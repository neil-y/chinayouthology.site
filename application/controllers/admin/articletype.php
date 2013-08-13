<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArticleType extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Articletype_Model');
	}

	public function index()
	{
		$articletypes = $this->Articletype_Model->findAll();	
		$data['menu'] = 'article';
		$data['sub_menu'] = 'articletype_list';
		$data['articletypes'] = $articletypes;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/articletype_list", $data);
		$this->load->view('admin/_footer');

	}

	public function form()
	{
		$data['menu'] = 'article';
		$data['sub_menu'] = 'articletype_form';
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/articletype_form");
		$this->load->view('admin/_footer');

	}	

	public function add()
	{
		$name = $this->input->post("name");	
		$this->Articletype_Model->save($name);
		redirect("/admin/articletype/");
	}

}

