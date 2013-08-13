<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($user)
	{
		$this->db->insert('user_apply', $user);	
	}


	function findAllSub($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("user_apply", $limit, $offset);
		return $query->result_array();
	}

	function findCountSub() 
	{
		$sql = "select count(1) as count from user_apply";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}
