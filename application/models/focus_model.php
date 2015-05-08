<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Focus_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function saveReportPdf($in_id, $file_url)
	{
		$this->db->query("insert into focus (file_url, in_id, status, type) values('".$file_url."', ".$in_id.", 1, 2)");	
	}

	//保存焦点图
	function save($focus)
	{
		$this->db->insert('focus', $focus);
	}

	function findById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('focus');
		return $query->row_array();
	}

	function findByType($id, $status =2)
	{
		$this->db->where('type', $id);
		if($status !=2)
		{
			$this->db->where('status', $status);
		}
		$query = $this->db->get('focus');
		return $query->result_array();
	}

	function findByInid($type, $id, $status =2)
	{
		if($status !=2)
		{
		
		$this->db->where('status', $status);
		}
		$this->db->where('in_id', $id);
		$this->db->where('type', $type);
		$query = $this->db->get('focus');
		return $query->result_array();
	}




	function update($id, $focus)	
	{
		$this->db->where('id', $id);
		$this->db->update('focus', $focus);	
	}
	function del($id)
	{
		$this->db->delete('focus', array('id' => $id));	
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
		$query = $this->db->get("focus");
		return $query->result_array();
	}

	function findAllSub($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("focus", $limit, $offset);
		return $query->result_array();
	}

	function findCountSub() 
	{
		$sql = "select count(1) as count from focus";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}
