<?php

class Inp_sasaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_sasaran');
	}

	public function index()
	{
		$data['sasaran_keg'] = $this->m_sasaran->tampil_sasaran()->result();
		$this->load->view('home/__temp/header', $data);
		$this->load->view('home/__temp/sidenav', $data);
		$this->load->view('home/__temp/topbar', $data);
		$this->load->view('home/input_sasaran.php', $data);
		$this->load->view('home/__temp/footer', $data);
	}

	public function tambah_sasaran()
	{
		$nama_sasaran = $this->input->post('nama_sasaran');

		$data = array(
			'id_sasaran' => '',
			'nama_sasaran' => $nama_sasaran

		);

		$this->m_sasaran->input_sasaran($data, 'sasaran');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sasaran Berhasil disimpan</div>');
		redirect('index.php/inp_sasaran');
	}

	public function update_sasaran()
	{
		$id_sasaran = $this->input->post('id_sasaran');
		$nama_sasaran = $this->input->post('nama_sasaran');

		$data = array(
			'nama_sasaran' => $nama_sasaran
		);

		$where = array(
			'id_sasaran' => $id_sasaran
		);

		$this->m_sasaran->update_sasaran($where, $data, 'sasaran');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sasaran Berhasil diubah</div>');
		redirect('index.php/inp_sasaran');
	}

	public function hapus_sasaran()
	{
		$id_sasaran = $this->input->post('id_sasaran');
		$this->m_sasaran->hapus_sasaran($id_sasaran);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sasaran Berhasil dihapus</div>');
		redirect('index.php/inp_sasaran');
	}
}
