<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Report_Model');
	}

	public function del($report_id)
	{
		$this->Report_Model->del($report_id);	
		redirect("/admin/report/");
	}

	public function index()
	{
		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$count = $this->Report_Model->findCount();
		$data['num'] = $num;
		$config['base_url'] = 'index.php?d=admin&c=report&m=index';
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
		} else {
			$offset = ($num - 1 ) * $limit;	
		}
		
		$reports = $this->Report_Model->findAll($offset, $limit);
		$data['menu'] = 'report';
		$data['sub_menu'] = 'report_list';
		$data['reports'] = $reports;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/report_list", $data);
		$this->load->view('admin/_footer');

	}

	public function form()
	{
		$data['menu'] = 'report';
		$data['sub_menu'] = 'report_form';
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/report_form", $data);
		$this->load->view('admin/_footer');
	}	

	public function add()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');

		$config['upload_path'] = './uploads/report/cover/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width']  = '500';
		$config['max_height']  = '500';
		$config['file_name']  = date('YmdHms');
		  
		$this->load->library('upload', $config);
		 
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);exit;
		}  else {

			$data = array('upload_data' => $this->upload->data());
			$report = array(
				'title'	=> $title,
				'content' => $content,
				'cover' => $data['upload_data']['file_name'],
				'createtime' => date('Y-m-d H:m:s')
				); 

			$this->Report_Model->save($report);				

		}

		redirect('/admin/report/');
	}

	public function preview()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		$news_content = $this->input->post('content');
		$post_time = $this->input->post('post_time');
		$outline = $this->input->post('outline');

		if(empty($post_time))
		{
			$post_time = date('Y-m-d H:m:s');	
		}

		$source = $this->input->post('source');
		$status = $this->input->post('status');
		$status = ($status == 'yes') ? 1 : 0;


		$type_id = $this->input->post('type_id');
		$type = $this->Articletype_Model->findById($type_id);
		$article = array(
			'title'	=> $title,
			'content' => $content,
			'outline' => $outline,
			'post_time' => $post_time,
			'source' => $source,
			'status' => $status,
			'type_id' => $type_id,
			'createtime' => date('Y-m-d H:m:s')
			); 
		$data['article'] = $article;
		$data['type'] = $type;

		$this->load->view('admin/news_preview', $data);	
	}

	public function edit($report_id)
	{
		$data['menu'] = 'report';
		$data['sub_menu'] = 'report_form';

		$report = $this->Report_Model->findById($report_id);
		$data['report'] = $report['curr'];
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/report_form", $data);
		$this->load->view('admin/_footer');
		
	}

	public function update()
	{
		$report_id= $this->input->post('report_id');
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		
		$config['upload_path'] = './uploads/report/cover/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width']  = '500';
		$config['max_height']  = '500';
		$config['file_name']  = date('YmdHms');
		  
		$this->load->library('upload', $config);
		 
		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$report = $this->Report_Model->findById($report_id);
			$report = array(
				'title'	=> $title,
				'content' => $content,
				); 

			$this->Report_Model->update($report_id, $report);				
		}  else {
			$data = array('upload_data' => $this->upload->data());
			$report = $this->Report_Model->findById($report_id);
			$report = array(
				'title'	=> $title,
				'content' => $content,
				'cover' => $data['upload_data']['file_name'],
				); 

			$this->Report_Model->update($report_id, $report);				
		}

		redirect('/admin/report/');
	}
}

