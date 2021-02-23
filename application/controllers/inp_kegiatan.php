<?php

class Inp_kegiatan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('index.php/auth');
		}
		$this->load->model('m_kegiatan');
	}


	public function index()
	{
		$data['kegiatan'] = $this->m_kegiatan->join('kegiatan', 'sasaran', 'kegiatan.id_sasaran=sasaran.id_sasaran')->result();
		$data['sasaran'] = $this->m_sasaran->join('sasaran', 'user', 'sasaran.id_user=user.id_user')->result();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('home/__temp/header', $data);
		$this->load->view('home/__temp/sidenav', $data);
		$this->load->view('home/__temp/topbar', $data);
		$this->load->view('home/input_kegiatan.php', $data);
		$this->load->view('home/__temp/footer', $data);
	}

	public function input_kegiatan()
	{
		$id_user = $this->input->post('id_user');
		$tgl_keg = $this->input->post('tgl_keg');
		$sasaran_keg = $this->input->post('sasaran_keg');
		$uraian_keg = $this->input->post('uraian_keg');

		$data = array(
			'id_keg' => '',
			'id_user' => $id_user,
			'tgl_kegiatan' => $tgl_keg,
			'nama_kegiatan' => $uraian_keg,
			'id_sasaran' => $sasaran_keg,
			'catatan' => '',
			'status_keg' => '0'

		);

		$this->m_kegiatan->input_kegiatan($data, 'kegiatan');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">kegiatan Berhasil disimpan</div>');
		redirect('index.php/inp_kegiatan');
	}

	public function update_kegiatan()
	{
		$id_user = $this->input->post('id_user');
		$id_keg = $this->input->post('id_keg');
		$tgl_keg = $this->input->post('tgl_keg');
		$sasaran_keg = $this->input->post('sasaran_keg');
		$uraian_keg = $this->input->post('uraian_keg');

		$data = array(
			'id_keg' => $id_keg,
			'id_user' => $id_user,
			'tgl_kegiatan' => $tgl_keg,
			'nama_kegiatan' => $uraian_keg,
			'id_sasaran' => $sasaran_keg,
			'catatan' => '',
			'status_keg' => '0'

		);

		$where = array(
			'id_keg' => $id_keg
		);

		$this->m_kegiatan->update_kegiatan($where, $data, 'kegiatan');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">kegiatan Berhasil disimpan</div>');
		redirect('index.php/inp_kegiatan');
	}

	public function hapus_kegiatan()
	{
		$id_keg = $this->input->post('id_keg');
		$this->m_kegiatan->hapus_kegiatan($id_keg);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sasaran Berhasil dihapus</div>');
		redirect('index.php/inp_kegiatan');
	}
}
