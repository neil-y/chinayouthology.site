<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Focus extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Focus_Model');
	}

	/**
	 * form
	 *  首页焦点图form 
	 * @access public
	 * @return void
	 */
	public function form()
	{
		$data['menu'] = 'focus';
		$data['sub_menu'] = 'focus_form';
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/focus_form");
		$this->load->view('admin/_footer');
	}


	public function update($id)
	{
		$focus = $this->Focus_Model->findById($id);
		$status = $focus['status'] == 1 ? 0 : 1;
		$focus['status'] = $status;
		$this->Focus_Model->update($id, $focus);

		redirect('/admin/focus/');
		
	}


	/**
	 * add 
	 * 焦点图上传 
	 * @access public
	 * @return void
	 */
	public function add()
	{

		$title = $this->input->post("title");	
		$focus_url = $this->input->post("focus_url");	
		$status = $this->input->post("status");	
		$status = ($status == 'yes') ? 1 : 0;

		$config['upload_path'] = './uploads/focus/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width']  = '966';
		$config['max_height']  = '200';
		$config['file_name']  = date('YmdHms');
		  
		$this->load->library('upload', $config);
		 
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);exit;
		} 
		  else
		{
			  $data = array('upload_data' => $this->upload->data());
			  $focus = array(
				  'title' => $title,
				  'focus_url' => $focus_url,
				  'img_url' => $data['upload_data']['file_name'],
				  'status' => $status,
				  'createtime' => date("Y-m-d H:m:s")
			  );
			  $this->Focus_Model->save($focus);
		}
		redirect("/admin/focus");
	
	} 	

	public function index()
	{
	
		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$count = $this->Focus_Model->findCountSub();

		$data['num'] = $num;
		//分页配置
		$config['base_url'] = 'index.php?d=admin&c=focus&m=index';
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
		
		$registers = $this->Focus_Model->findAllSub($offset, $limit);
		$data['focus'] = $registers;

		$data['menu'] = 'focus';
		$data['sub_menu'] = 'focus_list';

		$this->load->view("admin/_header");
		$this->load->view("admin/_left", $data);
		$this->load->view("admin/focus_list", $data);
		$this->load->view("admin/_footer");

	}


}

