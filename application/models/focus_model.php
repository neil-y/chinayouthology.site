<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Focus_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	//保存焦点图
	function save($focus)
	{
		$this->db->insert('mt_focus', $focus);
	}

	function findById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('mt_focus');
		return $query->row_array();
	}

	function update($id, $focus)	
	{
		$this->db->where('id', $id);
		$this->db->update('mt_focus', $focus);	
	}


	/**
	 * findAll 
	 * 查询焦点图列表 
	 * @access public
	 * @return void
	 */
	function findAll() 
	{
		$this->db->where('status', 1);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("mt_focus");
		return $query->result_array();
	}

	function findAllSub($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("mt_focus", $limit, $offset);
		return $query->result_array();
	}

	function findCountSub() 
	{
		$sql = "select count(1) as count from mt_focus";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}
