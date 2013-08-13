<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Articletype_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	//保存分类
	function save($name)
	{
		$data = array(
			'name' => $name,
			'createtime' => date('Y-m-d H:m:s')
			);
		$this->db->insert('article_type', $data);
	}

	function findById($id) 
	{
		//$this->db->where('id', $id);
		$this->db->like('id', $id);
		$query = $this->db->get("article_type");
		return $query->result_array();
	}

	function findAll() 
	{
		$query = $this->db->get("article_type");
		return $query->result_array();
	}
}
