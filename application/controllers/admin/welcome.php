<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->model('Report_Model');
	}

	public function index()
	{
		$data['menu'] = 'welcome';
		$data['sub_menu'] = 'welcome_index';

		$data['count'] = $this->Report_Model->findCount();
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/index", $data);
		$this->load->view('admin/_footer');
	}

	public function signin()
	{
		$this->load->view('admin/signin');
	}

	//登陆 
	public function signin_do()
	{
		$username = $this->input->post('username');	
		$password = $this->input->post('password');	
		$user = $this->User_Model->findUserByUsername($username);

		if(!empty($user))
		{
			if($password == $user['password'])
			{
				$this->session->set_userdata('user', $user);
				redirect('/admin/welcome');
			}
		}

	}

	public function signout()
	{
	//	$this->session->sess_destroy();
		$this->session->unset_userdata('user');
		redirect('/admin/signin');
	}

}

