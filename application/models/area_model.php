<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Area_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function findProvice()
	{
		$query = $this->db->get("t_m_provincial");	
		return $query->result_array();
	}

	function findCityByPid($pid)
	{
		$this->db->where("pid", $pid);
		$query = $this->db->get("t_m_city");	
		return $query->result_array();
	}

}
