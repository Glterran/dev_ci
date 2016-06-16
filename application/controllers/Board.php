<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	// mod_rewrite : URL의 Redirect나 위장 / 치환등을 실시(정규표현식)
	
	// URL - controller/function/variable value
	
	// 접근 경로 - /board
	public function index(){
		// $this->load->view('welcome_message');
		echo 'test';
	}
	
	// 접근 경로 - /board/get
	public function get($id, $no){
		echo 'ddd'.$id;
		echo 'no'.$no;
	}
}
