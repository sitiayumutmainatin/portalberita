<?php
class Rekap extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_rekap');
		$this->load->library('upload');
		$this->load->helper('url', 'form'); 
    	$this->load->library('form_validation');
	}

	function index(){
		$x['data']=$this->m_rekap->get_all_rekap();
		$this->load->view('admin/v_rekap',$x);
	}

	function simpan_rekap(){
		$config['upload_path'] = './assets/documents/'; //path folder
	    $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('filefoto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $judul=strip_tags($this->input->post('xjudul_rekap'));
						$tanggal=strip_tags($this->input->post('xtanggal_rekap'));
						$bulan=strip_tags($this->input->post('xbulan_rekap'));
						$tahun=strip_tags($this->input->post('xtahun_rekap'));
						$media=strip_tags($this->input->post('xmedia_rekap'));
						$file=strip_tags($this->input->post('filefoto'));
						$this->m_rekap->simpan_rekap($judul,$tanggal,$bulan,$tahun,$media,$file);
						echo $this->session->set_flashdata('msg','error');
						redirect('admin/rekap');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $judul=strip_tags($this->input->post('xjudul_rekap'));
						$tanggal=strip_tags($this->input->post('xtanggal_rekap'));
						$bulan=strip_tags($this->input->post('xbulan_rekap'));
						$tahun=strip_tags($this->input->post('xtahun_rekap'));
						$media=strip_tags($this->input->post('xmedia_rekap'));
						$file=strip_tags($this->input->post('filefoto'));
						$this->m_rekap->simpan_rekap($judul,$tanggal,$bulan,$tahun,$media,$file);
						echo $this->session->set_flashdata('msg','success');
						redirect('admin/rekap');
                }

		// $judul=strip_tags($this->input->post('xjudul_rekap'));
		// $tanggal=strip_tags($this->input->post('xtanggal_rekap'));
		// $bulan=strip_tags($this->input->post('xbulan_rekap'));
		// $tahun=strip_tags($this->input->post('xtahun_rekap'));
		// $media=strip_tags($this->input->post('xmedia_rekap'));
		// $file=strip_tags($this->input->post('filefoto'));
		// $this->m_rekap->simpan_rekap($judul,$tanggal,$bulan,$tahun,$media,$file);
		// echo $this->session->set_flashdata('msg','success');
		// redirect('admin/rekap');
	}

	function update_rekap(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul_rekap'));
		$tanggal=strip_tags($this->input->post('xtanggal_rekap'));
		$bulan=strip_tags($this->input->post('xbulan_rekap'));
		$tahun=strip_tags($this->input->post('xtahun_rekap'));
		$media=strip_tags($this->input->post('xmedia_rekap'));
		$file=strip_tags($this->input->post('filefoto'));
		$this->m_rekap->update_rekap($kode,$judul,$tanggal,$bulan,$tahun,$media,$file);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/rekap');
	}

	function hapus_rekap(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_rekap->hapus_rekap($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/rekap');
	}
	
}
