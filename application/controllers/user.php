<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_Model');
	}

	public function index()
	{
	}

	public function form()
	{
		$this->load->view('online');
	}	

	public function add()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$gender = $gender == "yes" ? 1 : 0;
		$remark = $this->input->post('remark');
		$user = array(
			'name'	=> $name,
			'phone' => $phone,
			'gender' => $gender,
			'remark' => $remark, 
			'createtime' => date('Y-m-d H:m:s')
			); 
		$this->User_Model->save($user);				
		$this->session->set_flashdata('add_success', '申请成功，随后客服人员会跟您取得联系!');	
		redirect('/item/show/online_userform/#qq_online');
	}

	public function edit()
	{
	
	}

	public function listall()
	{
	
	}	

	public function apply()
	{
	
	}

}

