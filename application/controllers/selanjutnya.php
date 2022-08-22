<?php
class selanjutnya extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_selanjutnya');
	}

	function index()
	{
		$data['data'] = $this->m_selanjutnya->get_all_tulisan();
		$this->load->view('v_selanjutnya', $data);
	}
}
