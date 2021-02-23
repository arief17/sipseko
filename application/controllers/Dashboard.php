<?php

class Dashboard extends CI_Controller
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
		$this->load->view('home/__temp/header', $data);
		$this->load->view('home/__temp/sidenav', $data);
		$this->load->view('home/__temp/topbar', $data);
		$this->load->view('home/dashboard', $data);
		$this->load->view('home/__temp/footer', $data);
	}
}
