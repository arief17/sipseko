<?php

class M_sasaran extends CI_Model
{

	function join($table, $tbljoin, $join)
	{
		$this->db->join($tbljoin, $join);
		return $this->db->get($table);
	}

	function tampil_sasaran()
	{
		return $this->db->get('sasaran');
	}

	function input_sasaran($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update_sasaran($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_sasaran($id_sasaran)
	{
		$this->db->where('id_sasaran', $id_sasaran);
		$this->db->delete('sasaran');
		return true;
	}
}
