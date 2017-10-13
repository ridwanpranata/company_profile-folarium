<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_product_m extends CI_Model {

	public function edit_detail_demo($table,$data)
	{
		return $this->db->replace($table,$data);
		
	}

	public function getMainDetail_Demo(){
		$maindd = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "product_demo"')->last_row();
		return $maindd;
	}
}
