<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['css'] = 'services';
		$data['menu'] = 'services';
		$this->load->view('services', $data);
	}

}

