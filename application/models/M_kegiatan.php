<?php

class M_kegiatan extends CI_Model
{


	function join($table, $tbljoin, $join)
	{
		$this->db->join($tbljoin, $join);
		return $this->db->get($table);
	}

	function input_kegiatan($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update_kegiatan($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_kegiatan($id_keg)
	{
		$this->db->where('id_keg', $id_keg);
		$this->db->delete('kegiatan');
		return true;
	}
}
