<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//	
	}
	
	public function _remap($method)
	{
		$this->load->view('template/header_v');
		if(method_exists($this, $method))
		{
			$this->{"{$method}"}();
		}
		$this->load->view('template/footer_v');
	}
	
}