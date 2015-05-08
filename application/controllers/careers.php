<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['css'] = 'careers';
		$data['menu'] = 'contact';

		$this->load->view('careers', $data);
	}

}

