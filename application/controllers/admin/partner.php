<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model("Employer_Model");
		$this->load->model("Partner_Model");
	}

	public function index()
	{

		$partner = $this->session->userdata('partner');

		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$count = $this->Partner_Model->findCountSub($partner['refer']);

		$data['num'] = $num;
		//分页配置
		$config['base_url'] = 'index.php?d=admin&c=partner&m=index';
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';	
		$config['num_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';	
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';	
		$config['last_tag_close'] = '</li>';
		$config['use_page_numbers'] = TRUE;
		$this->pagination->initialize($config);

		if(empty($num))
		{
			$num = 0;	
			$offset = 0;
		}
		else
		{
			$offset = ($num - 1 ) * $limit;	
		}
		
		$registers = $this->Partner_Model->findAllSub($offset, $limit, $partner['refer']);
		$data['partner'] = $registers;

		$data['menu'] = 'welcome';
		$data['sub_menu'] = 'welcome_stat';

		$this->load->view('admin/_partner_header');
		$this->load->view('admin/_partner_left', $data);
		$this->load->view("admin/partner_stat_list");
		$this->load->view('admin/_footer');
	}

	public function signin()
	{
		$this->load->view('admin/partner_signin');
	}

	//登陆 
	public function signin_do()
	{

		$username = $this->input->post('username');	
		$password = $this->input->post('password');	
		$employer = $this->Employer_Model->findEmployerByUsername($username);

		if(!empty($employer))
		{
			if($password == $employer['password'] && $employer['type'] == 'partner')
			{
				$this->session->set_userdata('partner', $employer);
				redirect('/partner');
			}
			
		}
	}

	public function signout()
	{
		$this->session->unset_userdata('partner');
		redirect('/partner/signin');
	}

}

