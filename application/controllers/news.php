<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Article_Model');
		$this->load->model('Articletype_Model');
	}

	public function index()
	{
		$types = array('name' => '媒体报道', 'id'=>0);
		$data['types'] = $types;
		$news = $this->Article_Model->findAllIndex();
		$data['list'] = $news;
		$this->load->view('news_list', $data);		
	}

	public function show($id)
	{
		$data['curr'] = 'research';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('news_show', $data);	
	}

	public function mintai_show($id)
	{

		$data['sub'] = $id;
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];
		if($type[0]['id'] == 13) 
		{
			$data['sub'] = 13;
			$data['sub_url'] = 13;
		}
		else
		{
			$data['sub_url'] = 19;
		}


		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('mintai_news_show', $data);	
	}


	public function wtshow($id)
	{
		$data['curr'] = 'online';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('wtnews_show', $data);	
	}

	public function caseshow($id)
	{
		$data['curr'] = 'pro';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('casenews_show', $data);	
	}


	public function xyshow($id)
	{
		$data['curr'] = 'xy';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('xynews_show', $data);	
	}

	public function abshow($id)
	{
		$data['curr'] = 'about';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('abnews_show', $data);	
	}

	public function rumen_show($id)
	{
		$data['curr'] = 'guide';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('rumen_news_show', $data);	
	}



	public function mdshow($id)
	{
		$data['curr'] = 'media';
		$result = $this->Article_Model->findById($id);
		$type = $this->Articletype_Model->findById($result['curr']['type_id']);
		$data['types'] = $type[0];

		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		$this->load->view('mdnews_show', $data);	
	}

	public function case_news($type_id = 18)
	{

		$data['curr'] = "pro";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=wt_news&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('pro_case', $data);	
	}


	public function wt_news($type_id = 12)
	{

		$data['curr'] = "online";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=wt_news&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('wt_news', $data);	
	}

	public function important_news($type_id = 13)
	{

		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=important_news&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('mintai_news', $data);	
	}

	public function media_news($type_id = 17)
	{

		$data['curr'] = "media";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=media_news&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('media_news', $data);	
	}

	public function media($type_id = 17)
	{
		$data['curr'] = "about";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=media&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('about_news', $data);	
	}

	public function online_faq()
	{
		$data['curr'] = "online";
		$this->load->view("online_faq", $data);	
	}


	public function morexy($type_id = 0)
	{
		$data['curr'] = "xy";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=morexy&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('news_xy_list', $data);	

	}	
	

	public function more($type_id = 0)
	{
		$data['curr'] = "research";
		$limit = 10;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = empty($type_id) ?  $this->input->get('type_id') : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;

		//分页配置
		$config['base_url'] = '/index.php?c=news&m=more&type_id=' . $type_id;
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<a class="on" href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a>';
		$config['last_link'] = '尾页';
		$config['first_link'] = '首页';
		$config['next_link'] = false;
		$config['prev_link'] = false;
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
		$data['count'] = $count[0]['count'];
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('news_list', $data);	
	}	

}

