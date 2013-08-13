<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//权限控制
class Acl {

	private $uri_prefix1;
	private $uri_prefix2;
	private $CI;

	function Acl(){
		$this->CI =& get_instance();
		$this->CI->load->library('session');	

		$this->uri_prefix1 = $this->CI->uri->segment(1);
		$this->uri_prefix2 = $this->CI->uri->segment(2);
	}
	
	//权限控制方法
	function auth(){

		$employer = $this->CI->session->userdata('employer');
		$partner = $this->CI->session->userdata('partner');

		if("admin" == $this->uri_prefix1 && 
			"signin" != $this->uri_prefix2 && 
			"signin_do" != $this->uri_prefix2 &&
			"signout" != $this->uri_prefix2){

			if(empty($employer)){
				redirect('/admin/signin');
			}
		}

		if("admin" == $this->uri_prefix1 && 
			"signin" == $this->uri_prefix2 ){

			if(!empty($employer)){
				redirect('/admin/welcome');
			}
		}

		if("partner" == $this->uri_prefix1 && 
			"signin" != $this->uri_prefix2 && 
			"signin_do" != $this->uri_prefix2 &&
			"signout" != $this->uri_prefix2){

			if(empty($partner)){
				redirect("/partner/signin");
			}
		}

		if("partner" == $this->uri_prefix1 && 
			"signin" == $this->uri_prefix2 ){

			if(!empty($partner)){
				redirect('/partner');
			}
		}


	}

}

