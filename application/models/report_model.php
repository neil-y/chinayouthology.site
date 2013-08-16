<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Report_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function del($id)
	{
		$this->db->delete('report', array('id' => $id));	
	}

	function save($report)
	{
		$this->db->insert('report', $report);
	}

	function update($id, $report)
	{
		$this->db->where('id', $id);
		$this->db->update('report', $report);	
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
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("report", $limit, $offset);
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
