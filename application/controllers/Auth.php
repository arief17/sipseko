<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		// agar tidak kembali ke page login
		if ($this->session->userdata('username')) {
			//  redirect('user');
		}
		$this->form_validation->set_rules('username', 'User Name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('Auth-login');
		} else {
			// validasinya succes
			$this->_login();
		}
	}

	// untuk login
	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'id_level' => $user['id_level']
					];
					$this->session->set_userdata($data);


					if ($user['id_level'] == 1) {
						redirect('index.php/validator_guru/dashboard_valid_guru');
					} else if ($user['id_level'] == 2) {
						redirect('index.php/validator/dashboard_tu');
					} else if ($user['id_level'] == 3) {
						redirect('dashboard_guru');
					} else {

						redirect('dashboard_tu');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
					redirect('index.php/auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mohon Maaf Akun Anda Belum Aktif Silahkan Hubungi Admin!</br>
                </div>');
				redirect('index.php/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar</div>');
			redirect('index.php/auth');
		}
	}
}
