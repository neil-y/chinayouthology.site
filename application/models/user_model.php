<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function findUserByUsername($username) 
	{
		$this->db->where('username', $username);	
		$query = $this->db->get("user");
		return $query->row_array();
	}

}
