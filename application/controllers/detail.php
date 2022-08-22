<?php 
class detail extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_detail');
	}

	function index(){
		$data['data']=$this->m_detail->get_all_tulisan();
		$this->load->view('v_detail', $data);
	}
}