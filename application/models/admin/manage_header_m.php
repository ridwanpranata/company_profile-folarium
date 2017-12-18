<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_header_m extends CI_Model {

	public function getHeader()
	{
		$header = $this->db->query('SELECT * FROM mg_content_header WHERE content_header_type = "main"; ')->last_row();
		return $header;
	}

	public function getList()
	{
		$list = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_header"; ')->result();
		return $list;
	}

	public function edit_main_header($table,$data,$id)
	{

		$this->db->where('content_header_id',$id);
		return $this->db->update($table,$data);
		
	}

	public function edit_header_picture($table,$data,$id)
	{
		$this->db->where('content_header_id',$id);
		$row = $this->db->query("SELECT content_header_pict FROM mg_content_header WHERE content_header_id = '$id';")->last_row();
		$filename = $row->content_header_pict;
		unlink("assets/admin/img/header/".$filename);
		return $this->db->update($table,$data);
	}

	public function add_list_header($table,$list_header)
	{

		$this->db->where('content_list_ct',"content_list_header");
		$data = array(
		'content_list_ct' => "content_list_header",
        'content_list_item' => $list_header,
        );
    	return $this->db->insert($table, $data);
		
	}

	public function deleteList($id)
	{

		return $this->db->query("DELETE FROM mg_content_list WHERE content_list_id = '$id';");
	}
}
