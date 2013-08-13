<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analyst extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_Model');
	}

	public function index()
	{

	}

	public function analyst_talk()
	{
		$this->load->view('analyst_talk');	
	}

	public function analyst_list()
	{
		$this->load->view('analyst_list');	
	}

}

