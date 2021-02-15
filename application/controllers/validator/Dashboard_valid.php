<?php

class Dashboard_valid extends CI_Controller {

	public function index()
	{
		$this->load->view('home/__temp/header_admin');
		$this->load->view('home/__temp/sidenav_admin');
		$this->load->view('home/__temp/topbar');
		$this->load->view('validator/dashboard_valid');
		$this->load->view('home/__temp/footer');
	}

}
