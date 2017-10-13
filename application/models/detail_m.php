<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {


	public function getAllDetail(){
		$detail = $this->db->query('SELECT * FROM mg_content_product ORDER BY RAND()LIMIT 4;')->result();
		return $detail;
	}

	public function getDetailProduct($products){
		$detailProduct = $this->db->query("SELECT * FROM mg_content_product WHERE content_product_title = '$products';")->last_row();
		return $detailProduct;
	}

	public function getListDetail($products){
		$fornicListDetailIcon = $this->db->query("SELECT * FROM mg_content_listDetail WHERE content_listDetail_product = '$products';")->result();
		return $fornicListDetailIcon;
	}

}
