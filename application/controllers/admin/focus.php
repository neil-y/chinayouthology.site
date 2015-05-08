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

	public function del($report_id)
	{
		$this->Focus_Model->del($report_id);	
		redirect("/admin/focus/");
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
		$url = $this->input->post("url");	
		$type = $this->input->post('type');
		$in_id = $this->input->post('in_id');
		$download_title = $this->input->post('download_title');

		$file_t_name = date('YmdHms');

		$config['upload_path'] = './uploads/file/';
		$config['allowed_types'] = 'png|gif|jpg|pdf|doc|docx|ppt|pptx|zip|rar|xls';
		$config['max_size'] = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$config['file_name']  = $in_id . ".pdf";

	//	if("application/pdf" == $file_type) 
	//	{	
	//		$config['file_name']  = $download_title;
	//	} else {
	//		$config['file_name']  = $file_t_name;
	//	}
		  
		$this->load->library('upload', $config);
		 
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);exit;
		} 
		  else
		{
			  $data = array('upload_data' => $this->upload->data());
			  $file_type = $data['upload_data']['file_ext'];
			  $focus = array(
				  'title' => $title,
				  'url' => $url,
				  'file_url' => $in_id . $file_type,
				  'type' => intval($type),
				  'status' => 1,
				  'in_id' => $in_id, 
				  'createtime' => date('Y-m-d H:m:s') 
			  );

			  $this->Focus_Model->save($focus);

			  exec("mv ./uploads/file/" . $data['upload_data']['file_name'] . "  ./uploads/file/" . $in_id. $file_type);

//			  if("application/pdf" == $file_type)
//			  {
//				$real_name = explode(".", $data['upload_data']['file_name'])[0];
//				mkdir("./uploads/file/report/" . $real_name);			 
//				exec("convert -density 150 -quality 100 " . "./uploads/file/" . $data['upload_data']['file_name'] . "  ./uploads/file/report/" . $real_name . "/" . $real_name . ".jpg");
//							
//				//PHP遍历文件夹下所有文件
//				$handle=opendir("./uploads/file/report/".$real_name); 
//				while (false !== ($file = readdir($handle)))
//				{
//					if ($file != "." && $file != "..") {
//						$this->Focus_Model->saveReportPdf($in_id, $real_name . "/" . $file);
//					}
//				}
//				closedir($handle); 
//
//			  }

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

