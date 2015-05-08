<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Partner_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($partner)
	{
		if(isset($partner['id']))
		{
			$this->db->where('id', $partner['id']);	
			$this->db->update('partner_stat', $partner);
		}else{
			$this->db->insert('partner_stat', $partner);	
		}
	}
	
	public function findbyrefer($pre_refer, $cur_date, $item)
	{
		$this->db->where("type", $item);
		$this->db->where("pre_refer", $pre_refer);
		$this->db->where("createtime", $cur_date);
		$query = $this->db->get("partner_stat");
		return $query->result_array();
	}

	public function findAllSub($offset = 0, $limit = 10, $pre_refer) 
	{
		if(!empty($pre_refer))
		{
			$this->db->where('pre_refer', $pre_refer);
		}
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("partner_stat", $limit, $offset);
		return $query->result_array();
	}

	public function findCountSub($pre_refer) 
	{
		if(!empty($pre_refer))
		{
			$sql = "select count(1) as count from partner_stat where pre_refer = '" . $pre_refer . "'";	
		}else{
			$sql = "select count(1) as count from partner_stat ";	
		}
		$query = $this->db->query($sql);
		return $query->result_array();
	}
//
//	function findAllSim($offset = 0, $limit = 10) 
//	{
//		$this->db->order_by('id', 'DESC');
//		$query = $this->db->get("simulation", $limit, $offset);
//		return $query->result_array();
//	}
//
//	function findCountSim() 
//	{
//		$sql = "select count(1) as count from simulation";	
//		$query = $this->db->query($sql);
//		return $query->result_array();
//	}
//
//
//	function findAll($type_id = 0, $offset = 0, $limit = 10) 
//	{
//		if($type_id !=0)
//		{
//			$this->db->where('type_id', $type_id);
//		}
//		$this->db->order_by('id', 'DESC');
//		$query = $this->db->get("register", $limit, $offset);
//		return $query->result_array();
//	}
//
//	function findCount($type_id = 0) 
//	{
//		if($type_id != 0)
//		{
//			$sql = "select count(1) as count from register where type_id = " . $type_id;	
//		}
//		else
//		{
//			$sql = "select count(1) as count from register";	
//		}
//		$query = $this->db->query($sql);
//		return $query->result_array();
//	}


}
