<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_Model');
		$this->load->model('Focus_Model');
	}

	public function index()
	{
		$data['data1'] = $this->Article_Model->findByType(1, 7);
		$data['data2'] = $this->Article_Model->findByType(2, 7);
		$data['data3'] = $this->Article_Model->findByType(3, 7);
		$data['data4'] = $this->Article_Model->findByType(4, 7);
		$data['data9'] = $this->Article_Model->findByType(9);
		$data['data10'] = $this->Article_Model->findByType(10);
		$data['data11'] = $this->Article_Model->findByType(11);
		$data['data12'] = $this->Article_Model->findByType(12);
			
		//重要公告
		$notices = $this->Article_Model->findByType(13, 9);
		$data['notice'] = $this->_proceNotice($notices);

		$data['focus'] = $this->Focus_Model->findAll();
		$data['curr'] = "index";

		$this->load->view('index', $data);
	}

	/**
	 * _proceNotice 
	 * 通知处理 
	 * @access private
	 * @return void
	 */
	private function _proceNotice($notices)
	{
		$not_arr = array();
		$not1 = array();
		$not2 = array();
		$not3 = array();
		$not_count = count($notices); 

		for($i=0; $i<$not_count; $i++)
		{
			if($i < 3)			
			{
				$not1[] = $notices[$i];
			}
			if($i > 2 and $i < 6)
			{
				$not2[]	= $notices[$i];
			}
			if ($i>5)
		   	{
				$not3[] = $notices[$i];
			}
		}

		if(!empty($not1)) $not_arr['n1'] =$not1;
		if(!empty($not2)) $not_arr['n2'] =$not2;
		if(!empty($not3)) $not_arr['n3'] =$not3;
		return $not_arr;
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function signout()
	{
		$this->load->view('signin');
	}

}

