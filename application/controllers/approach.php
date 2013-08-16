<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approach extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['css'] = 'approach';
		$data['menu'] = 'approach';
		$this->load->view('approach', $data);
	}

}

