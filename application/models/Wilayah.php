<?php

class Wilayah extends CI_Model {

	function __construct() { 
		parent::__construct(); 
	} 

	function getProv() {
		$this->db->from("wilayah")->where('jenis','prv')->order_by("nama", "asc");

		return $this->db->get();
	}

	function getKab($kode){
		$this->db->from("wilayah")->where('jenis','kab')->like('kode',$kode,'after')->order_by("nama", "asc");
		
		return $this->db->get();
	}
	
	function getKec($kode){
		$this->db->from("wilayah")->where('jenis','kec')->like('kode',$kode,'after')->order_by("nama", "asc");
		
		return $this->db->get();
	}

	function getKel($kode){
		$this->db->from("wilayah")->where('jenis','kel')->like('kode',$kode,'after')->order_by("nama", "asc");
		
		return $this->db->get();
	}
}