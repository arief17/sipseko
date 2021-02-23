<?php

class Validasi_keg extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('index.php/auth');
		}
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('home/__temp/header_admin', $data);
		$this->load->view('home/__temp/sidenav_admin', $data);
		$this->load->view('home/__temp/topbar', $data);
		$this->load->view('validator/validasi_keg', $data);
		$this->load->view('home/__temp/footer', $data);
	}
}
