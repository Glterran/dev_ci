<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_list()
	{
		$query = $this->db->order_by('id','desc')->get('items');
		$result = $query->result();
		
		return $result;
	}
	
	public function get_view($no)
	{
		$query = $this->db->get_where('items', array('id' => $no));
		$row = $query->row();
		return $row;
	}
	
	public function insert_todo($data)
	{
		$this->db->insert('items', $data);
		return $this->db->insert_id(); // insert_id value
	}
	
	public function delete_todo($no)
	{
		$result = $this->db->delete('items', array('id' => $no));
		return $result;
	}
	
}