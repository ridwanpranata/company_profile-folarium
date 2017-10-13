<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_promo_m extends CI_Model {

	public function getPromo1()
	{
		$data_promo = $this->db->query('SELECT * FROM mg_content_promo WHERE content_promo_type = "promo1";')->last_row();
		return $data_promo;
	}

	public function getPromo2()
	{
		$data_promo = $this->db->query('SELECT * FROM mg_content_promo WHERE content_promo_type = "promo2";')->first_row();
		return $data_promo;
	}

	public function get_list1(){
		$list = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p1";')->result();
		return $list;
	}

	public function get_list2_1(){
		$list = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p2.1";')->result();
		return $list;
	}

	public function get_list2_2(){
		$list = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p2.2";')->result();
		return $list;
	}

	public function addPromo($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function deletePromo($id)
	{
		return $this->db->query("DELETE FROM mg_content_promo WHERE content_promo_id = '$id';");
	}

	public function editPromo($table,$data,$id)
	{
		
		$this->db->where('content_promo_id',$id);
		return $this->db->update($table,$data);
	}

	public function edit_promo_list($table,$list_promo)
	{

		$this->db->where('content_list_ct',"content_list_p1");
		$data = array(
		'content_list_ct' => "content_list_p1",
        'content_list_item' => $list_promo,
        );
    	return $this->db->insert($table, $data);
		
	}

	public function edit_promo_list2_1($table,$list_promo)
	{

		$data = array(
		'content_list_ct' => "content_list_p2.1",
        'content_list_item' => $list_promo,
        );
    	return $this->db->insert($table, $data);
		
	}

	public function edit_promo_list2_2($table,$list_promo)
	{

		$data = array(
		'content_list_ct' => "content_list_p2.2",
        'content_list_item' => $list_promo,
        );
    	return $this->db->insert($table, $data);
		
	}

	public function deleteList($id)
	{

		return $this->db->query("DELETE FROM mg_content_list WHERE content_list_id = '$id';");
	}

	// public function getDataPromo($id){
	// 	$dataPromo = $this->db->query("SELECT * FROM mg_content_promo WHERE content_promo_id = '$id';")->last_row();
	// 	return $dataPromo;

	// }


}
