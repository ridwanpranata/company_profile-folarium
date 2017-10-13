<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_company_profile_m extends CI_Model {

	public function edit_company_profile($table,$data,$id)
	{
		$this->db->where('content_id',$id);
		$row = $this->db->query("SELECT content_proposal FROM mg_content WHERE content_id = '$id';")->last_row();
		$filename = $row->content_proposal;
		unlink("assets/admin/file/".$filename);
		return $this->db->update($table,$data);
	}

	public function get_list(){
		$list = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_CP";')->result();
		return $list;
	}

	public function deleteList($id)
	{

		return $this->db->query("DELETE FROM mg_content_list WHERE content_list_id = '$id';");
	}

	public function edit_company_profile_list($table,$list_subdesc)
	{

		$this->db->where('content_list_ct',"content_list_CP");
		$data = array(
		'content_list_ct' => "content_list_CP",
        'content_list_item' => $list_subdesc,
        );
    	return $this->db->insert($table, $data);
		
	}

	public function getCompanyProfile(){

		$companyprofile = $this->db->query('SELECT * FROM mg_content')->last_row();

		return $companyprofile;
	}
}
