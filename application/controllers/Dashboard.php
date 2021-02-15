<?php

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('home/__temp/header');
		$this->load->view('home/__temp/sidenav');
		$this->load->view('home/__temp/topbar');
		$this->load->view('home/dashboard');
		$this->load->view('home/__temp/footer');
	}

}
