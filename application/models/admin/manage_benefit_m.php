<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_benefit_m extends CI_Model {

	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->database();
	// }

	public function getBenefit()
	{
		$data_benefit = $this->db->query('SELECT * FROM mg_content_benefit;')->result();
		return $data_benefit;
	}

	public function addBenefit($table,$data)
	{	
		$this->db->insert($table,$data);
	}

	public function deleteBenefit($id)
	{
		$this->db->where('content_benefit_id',$id);
		$row = $this->db->query("SELECT content_benefit_pict FROM mg_content_benefit WHERE content_benefit_id = '$id';")->last_row();
		$filename = $row->content_benefit_pict;
		unlink("assets/admin/img/benefit/".$filename);
		return $this->db->query("DELETE FROM mg_content_benefit WHERE content_benefit_id = '$id';");
	}

	public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
	public function editBenefit($table,$data,$id)
	{
		$this->db->where('content_benefit_id',$id);
		$row = $this->db->query("SELECT content_benefit_pict FROM mg_content_benefit WHERE content_benefit_id = '$id';")->last_row();
		$filename = $row->content_benefit_pict;
		unlink("assets/admin/img/benefit/".$filename);
		return $this->db->update($table,$data);
	}

	public function getCompanyProfile(){

		$companyprofile = $this->db->query('SELECT * FROM mg_content WHERE content_ct = "CP"')->last_row();

		return $companyprofile;
	}

	public function getDataBenefit($id){
		$dataBenefit = $this->db->query("SELECT * FROM mg_content_benefit WHERE content_benefit_id = '$id';")->last_row();
		return $dataBenefit;

	}


}
