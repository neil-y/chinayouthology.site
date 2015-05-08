<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['css'] = 'cases';
		$data['menu'] = 'services';

		$this->load->view('cases', $data);
	}

}

