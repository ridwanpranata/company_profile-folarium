<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_logo_m extends CI_Model {

	public function getlogo()
	{
		$logo = $this->db->query('SELECT * FROM mg_content_header WHERE content_header_type = "logo"; ')->last_row();
		return $logo;
	}

	public function edit_logo($table,$data,$id)
	{

		$this->db->where('content_header_id',$id);
		$row = $this->db->query("SELECT content_header_pict FROM mg_content_header WHERE content_header_id = '$id';")->last_row();
		$filename = $row->content_header_pict;
		unlink("assets/admin/img/header/".$filename);
		return $this->db->update($table,$data);
		
	}
}
