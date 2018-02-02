<?php

class DataModel extends CI_Model {

	function __construct() { 
		parent::__construct(); 
	} 

	function getAllProducts() {
		$this->db->from("data");

		return $this->db->get();
	}

	function addProduct($data)
	{
		$this->db->insert('data', $data);
	}

	function loginTrue($data)
	{
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
		$this->db->select('*');
		$this->db->from('data');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function read_user_information($username) {

		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('data');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}