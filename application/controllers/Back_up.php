<?php

class Back_up extends CI_Controller{

	public function index(){
		$this->load->view('home/__temp/header');
		$this->load->view('home/__temp/sidenav');
		$this->load->view('home/__temp/topbar');
		$this->load->view('home/back_up.php');
		$this->load->view('home/__temp/footer');
	}
}
