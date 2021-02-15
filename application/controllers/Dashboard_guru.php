<?php

class Dashboard_guru extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_name')) {
			redirect('index.php/auth');
		}
	}

	public function index()
	{
		$this->load->view('home/__temp/header');
		$this->load->view('home/__temp/sidenav');
		$this->load->view('home/__temp/topbar');
		$this->load->view('home/dashboard');
		$this->load->view('home/__temp/footer');
	}
}
