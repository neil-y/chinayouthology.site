<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Testimonials_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function del($id)
	{
		$this->db->delete('testimonials', array('id' => $id));	
	}

	function save($testimonials)
	{
		$this->db->insert('testimonials', $testimonials);
	}

	function update($id, $testimonials)
	{
		$this->db->where('id', $id);
		$this->db->update('testimonials', $testimonials);	
	}

	function findById($id)
	{
		$cur_data = $this->db->query('select * from testimonials where id = ' . $id);
		$curr = $cur_data->result_array();
		$data['curr'] = $curr[0];
		return $data;
	}

	function findAll($offset = 0, $limit = 10) 
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("testimonials", $limit, $offset);
		return $query->result_array();
	}

	function findCount() 
	{
		$sql = "select count(1) as count from testimonials";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
