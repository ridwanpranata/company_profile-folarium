<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_benefit_m extends CI_Model {

	public function edit_main_benefit($table,$data)
	{
		return $this->db->replace($table,$data);
		
	}

	public function get_main_benefit(){
		$mainBenefit = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "benefit"')->last_row();
		return $mainBenefit;
	}
}
