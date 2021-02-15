<?php

class Back_up_valid extends CI_Controller {

	public function index()
	{
		$this->load->view('home/__temp/header');
		$this->load->view('home/__temp/sidenav_admin');
		$this->load->view('home/__temp/topbar');
		$this->load->view('validator/back_up_valid');
		$this->load->view('home/__temp/footer');
	}

}
