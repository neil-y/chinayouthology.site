<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Article_Model');
		$this->load->model('Articletype_Model');
	}

	public function del($news_id)
	{
		$this->Article_Model->del($news_id);	
		redirect("/admin/article/");
	}

	public function index()
	{
		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = $this->input->get('type');
		$type_id = empty($type_id) ?  0 : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;
		//分页配置
		$config['base_url'] = 'index.php?d=admin&c=article&m=index';
		if(!empty($type_id))
		{
			$config['base_url'] = 'index.php?d=admin&c=article&m=index&type=' . $type_id;
		}

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
		
		$articles = $this->Article_Model->findAll($type_id, $offset, $limit);
		$types = $this->Articletype_Model->findAll();
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_list';
		$data['articles'] = $articles;
		$data['types'] = $types;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_list", $data);
		$this->load->view('admin/_footer');

	}

	public function form()
	{
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_form';

		$types = $this->Articletype_Model->findAll();
		$data['types'] = $types;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_form");
		$this->load->view('admin/_footer');
	}	

	public function add()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		$outline = $this->input->post('outline');
		$post_time = $this->input->post('post_time');

		if(empty($post_time))
		{
			$post_time = date('Y-m-d H:m:s');	
			$sp_date = date('m/d');
		}
		else
		{
			$sp_date = date('m/d', strtotime($post_time));		
		}
		
		$source = $this->input->post('source');
		$status = $this->input->post('status');
		$status = ($status == 'yes') ? 1 : 0;

		$type = $this->input->post('type_id');
		list($type_id, $typename) = explode("_", $type);

		$article = array(
			'title'	=> $title,
			'content' => $content,
			'outline' => $outline,
			'post_time' => $post_time,
			'sp_date' => $sp_date,
			'source' => $source,
			'status' => $status,
			'type_id' => $type_id,
			'typename' => $typename,
			'createtime' => date('Y-m-d H:m:s')
			); 

		$this->Article_Model->save($article);				
		redirect('/admin/article/');
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

	public function edit( $article_id )
	{
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_form';

		$article = $this->Article_Model->findById($article_id);
		$types = $this->Articletype_Model->findAll();
		$data['types'] = $types;
		$data['article'] = $article['curr'];
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_form", $data);
		$this->load->view('admin/_footer');
		
	}

	public function update()
	{
		$news_id= $this->input->post('news_id');
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		$outline = $this->input->post('outline');
		$post_time = $this->input->post('post_time');

		if(empty($post_time))
		{
			$post_time = date('Y-m-d H:m:s');	
			$sp_date = date('m/d');
		}
		else
		{
			$sp_date = date('m/d', strtotime($post_time));		
		}
		
		$source = $this->input->post('source');
		$status = $this->input->post('status');
		$status = ($status == 'yes') ? 1 : 0;


		$type = $this->input->post('type_id');
		list($type_id, $typename) = explode("_", $type);
		$article = $this->Article_Model->findById($news_id);
		$article = array(
			'title'	=> $title,
			'content' => $content,
			'outline' => $outline,
			'post_time' => $post_time,
			'sp_date' => $sp_date,
			'source' => $source,
			'status' => $status,
			'type_id' => $type_id,
			'typename' => $typename,
			); 

		$this->Article_Model->update($news_id, $article);				
		redirect('/admin/article/');

	}

	public function listall()
	{
	
	}	

}

