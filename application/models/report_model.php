<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Report_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function findSetting()
	{
		$query = $this->db->query("select * from setting where id = 1");		
		return $query->row_array();
	}

	function del($id)
	{
		$this->db->delete('report', array('id' => $id));	
	}

	function save($report)
	{
		$this->db->insert('report', $report);
	}

	function update_setting($id, $first_ids, $foot_ids)
	{
		$setting = array(
			'first_ids' => $first_ids,
			'foot_ids'	=> $foot_ids
		);
		$this->db->where('id', $id);	
		$this->db->update("setting", $setting);
	}

	function update($id, $report)
	{
		$this->db->where('id', $id);
		$this->db->update('report', $report);	
	}

	function findLatest($count = 4)
	{
		$query = $this->db->query("select * from setting where id = 1");
		$result = $query->row_array();
		$ids = explode(";", $result['foot_ids']);
		$sql = 'select * from report where id in ('.$ids[0].','.$ids[1].','.$ids[2].','.$ids[3].')';
		$sql .= " order by field(id, ".$ids[0].",".$ids[1].",".$ids[2].",".$ids[3].")";
		$query = $this->db->query($sql);	
		return $query->result_array();
	}

	function findFirstReport()
	{
		$query = $this->db->query("select * from setting where id = 1");
		$result = $query->row_array();
		$ids = explode(";", $result['first_ids']);
		$sql = 'select * from report where id in ('.$ids[0].','.$ids[1].','.$ids[2].','.$ids[3].','.$ids[4].','.$ids[5].')';
		$sql .= " order by field(id, ".$ids[0].",".$ids[1].",".$ids[2].",".$ids[3].",".$ids[4].",".$ids[5].")";
		$query = $this->db->query($sql);	
		return $query->result_array();
	}

	function findById($id)
	{
		$cur_data = $this->db->query('select * from report where id = ' . $id);
		$curr = $cur_data->result_array();

		$next_data = $this->db->query('select id, title from report where id >'.$id.' order by id asc limit 1');
		$pre_data = $this->db->query('select id, title from report where id <'.$id.' order by id desc limit 1');
		$next = $next_data->result_array();
		$pre = $pre_data->result_array();
		$data = array();
		if(!empty($next)) $data['next'] = $next[0];
		if(!empty($pre)) $data['pre'] = $pre[0];
		$data['curr'] = $curr[0];
		return $data;
	}

	function findAll($offset = 0, $limit = 10) 
	{
		$query = $this->db->query("select * from setting where id = 1");
		$result = $query->row_array();
		$ids = explode(";", $result['first_ids']);
		$sql = 'select * from report where id not in 
			('.$ids[0].','.$ids[1].','.$ids[2].','.$ids[3].','.$ids[4].','.$ids[5].') 
			order by id desc limit '. $offset . ', '. $limit;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function findbackAll($offset = 0, $limit = 10) 
	{
		$sql = 'select * from report order by id desc limit '. $offset . ', '. $limit;
		$query = $this->db->query($sql);
		return $query->result_array();
	}


	function findallshow()
	{
		$sql = "select id, cover from report order by id desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function findCount() 
	{
		$sql = "select count(1) as count from report";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}
