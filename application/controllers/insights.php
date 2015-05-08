<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insights extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Report_Model');
		$this->load->model('Focus_Model');
	}

	public function index()
	{
		$data['reports'] = $this->Report_Model->findAll(0, 100);
		$data['focus'] = $this->Focus_Model->findByType(0, 1);

		$data['firstReport'] = $this->Report_Model->findFirstReport();

		$data['css'] = 'insights';
		$data['menu'] = 'insights';
		$this->load->view('insights', $data);
	}

	public function detail()
	{
		$data['css'] = 'insights-details';
		$data['menu'] = 'insights';

		$report_id = $this->uri->segment(2);	
	//	$data['focus'] = $this->Focus_Model->findByInid(2, $report_id, 1);
		$file = $this->Focus_Model->findByInid(3, $report_id);
		$data['report'] = $this->Report_Model->findById($report_id);
		if(!empty($file)) $data['file'] = $file[0];
		$data['allshow'] = $this->Report_Model->findallshow();

		$this->load->view('insights_detail', $data);
	}

	private function _processSlide($allshow)
	{
		$result = array();
		$tmp_4_arr = array();
		for($i=1; $i<=count($allshow); $i++)	
		{
			$tmp_arr = array();
			$tmp_arr['id'] = $allshow[$i - 1]['id'];
			$tmp_arr['cover'] = $allshow[$i - 1]['cover'];
			$tmp_4_arr[] = $tmp_arr;
			if(($i % 4) == 0)	
			{
				$result[] = $tmp_4_arr;		
				$tmp_4_arr = array();
			}

		}
		if((count($allshow) % 4) !=0)
		{
			$result[] = array();	
		}


		
		return $result;
	}

}

