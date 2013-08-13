<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Register_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($register)
	{
		$this->db->insert('register', $register);	
	}

	public function saveSub($sub)
	{
		$this->db->insert('subscribe', $sub);	
	}

	public function saveSim($sim)
	{
		$this->db->insert('simulation', $sim);	
	}

	function findAllSub($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("subscribe", $limit, $offset);
		return $query->result_array();
	}

	function findCountSub() 
	{
		$sql = "select count(1) as count from subscribe";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function findAllSim($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("simulation", $limit, $offset);
		return $query->result_array();
	}

	function findCountSim() 
	{
		$sql = "select count(1) as count from simulation";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}


	function findAll($type_id = 0, $offset = 0, $limit = 10) 
	{
		if($type_id !=0)
		{
			$this->db->where('type_id', $type_id);
		}
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("register", $limit, $offset);
		return $query->result_array();
	}

	function findCount($type_id = 0) 
	{
		if($type_id != 0)
		{
			$sql = "select count(1) as count from register where type_id = " . $type_id;	
		}
		else
		{
			$sql = "select count(1) as count from register";	
		}
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}
