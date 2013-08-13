<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Area_Model');
	}
	
	public function ajaxProvince()
	{
		$provinces = $this->Area_Model->findProvice();
		echo json_encode($provinces, JSON_UNESCAPED_UNICODE);
	}

	public function ajaxCity($pid)
	{
		$citys = $this->Area_Model->findCityByPid($pid);
		echo json_encode($citys, JSON_UNESCAPED_UNICODE);
	}
}

