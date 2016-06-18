<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('todo_m');
	}
	
	public function index()
	{
		$this->url();
	}
	
	public function url()
	{
		$this->load->view('helper/url');
	}
	
	public function _remap($method)
	{
		$this->load->view('template/header_v');
	
		if(method_exists($this, $method)){
			$this->{"{$method}"}();
		}
	
		$this->load->view('template/footer_v');
	}

}