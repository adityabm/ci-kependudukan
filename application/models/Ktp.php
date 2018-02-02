<?php

class Ktp extends CI_Model {

	function __construct() { 
		parent::__construct(); 
	} 

	function getAll() {
		$this->db->from("ktp");

		return $this->db->get();
	}

	function cekNik($nik) {
		$query = $this->db->from("ktp")->where('nik',$nik)->get();

		if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

	function insertPen($data)
	{
		$this->db->insert('ktp', $data);
	}

	function updatePen($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('ktp', $data);
	}

	function deletePen($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('ktp');
	}
}