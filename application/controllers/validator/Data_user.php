<?php

class Data_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('index.php/auth');
		}
		$this->load->model('m_user');
	}



	public function index()
	{
		$data['user'] = $this->m_user->tampil_user()->result();
		$data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('home/__temp/header_admin', $data);
		$this->load->view('home/__temp/sidenav_admin', $data);
		$this->load->view('home/__temp/topbar', $data1);
		$this->load->view('validator/data_user', $data);
		$this->load->view('home/__temp/footer', $data);
	}

	public function tambah_user()
	{
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'id_user'	=> '',
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'nama_user' => $nama_user,
			'is_active' => '1',
			'id_level' => $level
		);
		$this->m_user->input_user($data, 'user');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Berhasil disimpan</div>');
		redirect('index.php/validator/data_user');
	}

	public function edit_user()
	{
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'nama_user' => $nama_user,
			'is_active' => '1',
			'id_level' => $level
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->m_user->update_user($where, $data, 'user');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Berhasil diubah</div>');
		redirect('index.php/validator/data_user');
	}

	public function hapus_user()
	{
		$id_user = $this->input->post('id_user');
		$this->m_user->hapus_user($id_user);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User Berhasil dihapus</div>');
		redirect('index.php/validator/data_user');
	}
}
