<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_pages_profile_edit_m extends CI_Model {

	public function edit_profile($table,$data,$id)
	{
		$this->db->where('user_id',$id);
		$row = $this->db->query("SELECT user_pict FROM md_user WHERE user_id = '$id';")->last_row();
		return $this->db->update($table,$data);
	}

	public function edit_profile_picture($table,$data,$id)
	{
		$this->db->where('user_id',$id);
		$row = $this->db->query("SELECT user_pict FROM md_user WHERE user_id = '$id';")->last_row();
		$filename = $row->user_pict;
		unlink("assets/admin/img/user/".$filename);
		return $this->db->update($table,$data);
	}

	public function get_user_profile()
	{

		$userprofile = $this->db->query('SELECT * FROM md_user')->last_row();
		return $userprofile;

	}

	public function check_password($table,$where)
	{
		return $this->db->get_where($table,$where);
		
	}

	public function edit_password($table,$data,$id)
	{
		$this->db->where('user_id',$id);
		return $this->db->update($table,$data);
	}

}
