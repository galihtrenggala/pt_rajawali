<?php

Class Login_model extends CI_model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function login($data)
	{
		$sql = "SELECT * FROM tbl_user WHERE username = '". $data['username'] ."' AND password = '". $data['password'] ."'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function read_user_information($username)
	{
		$sql = "SELECT * FROM tbl_user WHERE username = '". $username ."'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}

?>