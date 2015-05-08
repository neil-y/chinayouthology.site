<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Report_Model");
	}

	public function index($filepath)
	{
		$filepath = preg_replace("/_/", "/", $filepath);
		$file_arr = explode("/", $filepath);
		$data = file_get_contents("./" . $filepath); // 读文件内容
		$name = $file_arr[count($file_arr) - 1];
		$name_arr = explode(".", $name);
		$real_name = $this->Report_Model->findById($name_arr[0]);
		force_download($real_name['curr']['title'].".pdf", $data);
	}

}

