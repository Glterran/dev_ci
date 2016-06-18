<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	// 404 error 발생시
	function page_missing()
	{
		$this->load->view('errors/404_error');
	}
}