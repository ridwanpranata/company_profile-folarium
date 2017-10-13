<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_promo_m extends CI_Model {

	public function edit_main_promo($table,$data)
	{
		return $this->db->replace($table,$data);
		
	}

	public function get_main_promo(){
		$mainpromo = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "promo"')->last_row();
		return $mainpromo;
	}
}
