<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Openyouthology extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Focus_Model');
	}

	public function index()
	{

		$data['focus'] = $this->Focus_Model->findByType(0, 1);
		$data['css'] = 'youthology';
		$data['menu'] = 'openyouthology';
		$this->load->view('openyouthology', $data);
	}

}

