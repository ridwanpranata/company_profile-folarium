<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SEO_m extends CI_Model {

	public function edit_seo($table,$data)
	{
		return $this->db->replace($table,$data);
		
	}

	public function get_seo(){
		$seo = $this->db->query('SELECT * FROM mg_seo')->last_row();
		return $seo;
	}
}
