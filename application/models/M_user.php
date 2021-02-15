<?php

class M_user extends CI_Model{
    function tampil_user()
    {
        return $this->db->get('user');
    }

    function input_user($data,$table)
    {
        $this->db->insert($table,$data);
    }
    
    function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

    function hapus_user($id_user)
    {
        $this->db->where('id_user',$id_user);
    	$this->db->delete('user');
    	return true;
    }
}
