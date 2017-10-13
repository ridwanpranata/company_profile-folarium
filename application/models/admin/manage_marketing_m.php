<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_marketing_m extends CI_Model {

	public function getMarketing()
	{
		$data_marketing = $this->db->query('SELECT * FROM md_user WHERE user_dept = "Marketing";')->result();
		return $data_marketing;
	}

	public function addMarketing($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function deleteMarketing($id)
	{
		$row = $this->db->query("SELECT user_pict FROM md_user WHERE user_id = '$id';")->last_row();
		$filename = $row->user_pict;
		unlink("assets/admin/img/marketing/".$filename);
		return $this->db->query("DELETE FROM md_user WHERE user_id = '$id';");
	}

	public function editMarketing($table,$data,$id)
	{
		
		$this->db->where('user_id',$id);
		$row = $this->db->query("SELECT user_pict FROM md_user WHERE user_id = '$id';")->last_row();
		$filename = $row->user_pict;
		unlink("assets/admin/img/marketing/".$filename);
		return $this->db->update($table,$data);
	}


	public function getDataMarketing($id){
		$datamarketing = $this->db->query("SELECT * FROM md_user WHERE user_id = '$id';")->row();
		return $datamarketing;

	}

	public function edit_picture($table,$data,$id){
		$this->db->where('user_id',$id);
		return $this->db->update($table,$data);
		
	}


}
