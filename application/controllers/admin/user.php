<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_Model');
	}

	public function index()
	{

		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$count = $this->User_Model->findCountSub();

		$data['num'] = $num;
		//分页配置
		$config['base_url'] = 'index.php?d=admin&c=user&m=index';
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
		
		$registers = $this->User_Model->findAllSub($offset, $limit);
		$data['users'] = $registers;

		$data['menu'] = 'user';
		$data['sub_menu'] = 'user_list';

		$this->load->view("admin/_header");
		$this->load->view("admin/_left", $data);
		$this->load->view("admin/user_list", $data);
		$this->load->view("admin/_footer");

	}

}

