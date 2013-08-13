<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Employer_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	//根据email查询员工
	function findEmployerByEmail($email) 
	{
		$this->db->where('email', $email);	
		$query = $this->db->get("employer");
		return $query->row_array();
	}

	//根据username查询员工
	function findEmployerByUsername($username) 
	{
		$this->db->where('username', $username);	
		$query = $this->db->get("employer");
		return $query->row_array();
	}

}
