<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_fortnership_m extends CI_Model {

	public function getDataFortnership(){
		$data = $this->db->query('SELECT * FROM mg_content_fortnership' )->result();
		return $data;
	}

	public function addFortnership($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function edit_fortnership($table,$data,$id)
	{	
		$this->db->where('content_fortnership_id',$id);
		$row = $this->db->query("SELECT content_fortnership_pict FROM mg_content_fortnership WHERE content_fortnership_id = '$id';")->last_row();
		$filename = $row->content_fortnership_pict;
		unlink("assets/admin/img/fortnership/".$filename);
		return $this->db->update($table,$data);
	}

	public function deleteFortnership($id)
	{
		$row = $this->db->query("SELECT content_fortnership_pict FROM mg_content_fortnership WHERE content_fortnership_id = '$id';")->last_row();
		$filename = $row->content_fortnership_pict;
		unlink("assets/admin/img/fortnership/".$filename);
		return $this->db->query("DELETE FROM mg_content_fortnership WHERE content_fortnership_id = '$id';");
	}
}
