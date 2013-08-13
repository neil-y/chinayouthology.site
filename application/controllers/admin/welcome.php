<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Employer_Model');
	}

	public function index()
	{
		$data['menu'] = 'welcome';
		$data['sub_menu'] = 'welcome_index';
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/index");
		$this->load->view('admin/_footer');
	}

	public function signin()
	{
		$this->load->view('admin/signin');
	}

	//登陆 
	public function signin_do()
	{
		$email = $this->input->post('email');	
		$password = $this->input->post('password');	
		$employer = $this->Employer_Model->findEmployerByEmail($email);

		if(!empty($employer))
		{
			if($password == $employer['password'] && $employer['type'] == "empoyer")
			{
				$this->session->set_userdata('employer', $employer);
				redirect('/admin/welcome');
			}
		}

	}

	public function signout()
	{
	//	$this->session->sess_destroy();
		$this->session->unset_userdata('employer');
		redirect('/admin/signin');
	}

}

