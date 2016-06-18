<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('todo_m');
	}
	
	public function index()
	{
		$this->lists();
	}
	
	public function lists()
	{
		$data['list'] = $this->todo_m->get_list();
		$this->load->view("todo/list_v", $data);
	} // lists end
	
	public function view()
	{
		$todo_no = $this->uri->segment(3);
		$data['views'] = null;
		
		if(preg_match('/\d/', $todo_no))
		{
			$data['views'] = $this->todo_m->get_view($todo_no);
		} 
		
		if($data['views'] != null)
		{
			$this->load->view("todo/view_v", $data);
		}
		else
		{
			redirect("error/page_missing");
			exit;
		}
	} // view end
	
	public function write()
	{
		$this->load->library('form_validation');
		
		if($_POST)
		{
			$this->form_validation->set_rules('content', '내용', 'required');
			// 날짜 검증 해야 함, 시작일 종료일 현재날짜보다 뒤인지도 검사해야함
			$this->form_validation->set_rules('created_on', '시작일', 'required');
			$this->form_validation->set_rules('due_date', '종료일', 'required');
			
			if($this->form_validation->run())
			{
				$data = array(
							'content' => $this->input->post('content', TRUE),
							'created_on' => $this->input->post('created_on', TRUE),
							'due_date' => $this->input->post('due_date', TRUE));
				
				$result = $this->todo_m->insert_todo($data);
				
				if($result != 0)
				{
					redirect("todo/view/".$result);
					exit;
				}
				else
				{
					redirect("todo/write");
					exit;
				}
				
			}
			else
			{
				$this->load->view('todo/write_v');
			}
		}
		else
		{
			$this->load->view('todo/write_v');
		}
	} // write end
	
	public function delete()
	{
		$no = $this->uri->segment(3);
		if(preg_match('/\d/', $no))
		{
			$this->todo_m->delete_todo($no);
			redirect("todo/lists/");
			exit;
		}
		else
		{
			redirect("error/page_missing");
			exit;
		}
	}
	
	public function _remap($method)
	{
		if(method_exists($this, $method))
		{
			$this->load->view('template/header_v');
			$this->{"{$method}"}();
			$this->load->view('template/footer_v');
		}
		else
		{
			redirect("error/page_missing");
			exit;
		}
	} // _remap end

}