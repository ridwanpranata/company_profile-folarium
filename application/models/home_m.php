<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function getHeader()
	{
		$header = $this->db->query('SELECT * FROM mg_content_header WHERE content_header_type = "main";')->last_row();
		return $header;
	}

	public function getHeaderList()
	{
		$header = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_header";')->result();
		return $header;
	}

	public function getLogo()
	{
		$logo = $this->db->query('SELECT * FROM mg_content_header WHERE content_header_type = "logo";')->last_row();
		return $logo;
	}

	public function getCP()
	{
		$comp = $this->db->query('SELECT * FROM mg_content;')->last_row();
		return $comp;
	}

	public function getCPSlideshow(){
		$compListSlideshow = $this->db->query('SELECT content_product_pict FROM mg_content_product ORDER BY RAND() LIMIT 5;')->result();
		return $compListSlideshow;
	}

	public function getCPList(){
		$compList = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_cp";')->result();
		return $compList;
	}

	public function getCircleTitle (){
		$circleTitle = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "circle_title";')->last_row();
		return $circleTitle;
	}

	public function getCircleItem (){
		$circleItem = $this->db->query('SELECT * FROM mg_content_fortnership;')->result();
		return $circleItem;
	}

	public function getFortnership (){
		$fortnership = $this->db->query('SELECT * FROM mg_content_fortnership;')->result();
		return $fortnership;
	}

	public function getMainProduct(){
		$mprod = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "product_demo";')->last_row();
		return $mprod;
	}

	public function getProducts(){
		$prod = $this->db->query('SELECT * FROM mg_content_product;')->result();
		return $prod;
	}

	public function getMainBenefit(){
		$mben = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "benefit";')->last_row();
		return $mben;
	}

	public function getBenefits(){
		$ben = $this->db->query('SELECT * FROM mg_content_benefit;')->result();
		return $ben;
	}

	public function getMainPromo(){
		$mprom = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "promo";')->last_row();
		return $mprom;
	}

	public function getPromo1(){
		$prom = $this->db->query('SELECT * FROM mg_content_promo WHERE content_promo_type = "promo1";')->first_row();
		return $prom;
	}

	public function getPromo2(){
		$prom2 = $this->db->query('SELECT * FROM mg_content_promo WHERE content_promo_type = "promo2";')->first_row();
		return $prom2;
	}

	// public function getPromo(){
	// 	$prom = $this->db->query('SELECT * FROM mg_content_promo JOIN mg_promo_list ON mg_content_promo.content_promo_list = mg_promo_list.promo_list_subtitle;')->result();
	// 	return $prom;
	// }

	public function getPromo1List(){
		$prom = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p1";')->result();
		return $prom;
	}

	// public function getPromoCustomizedList(){
	// 	$prom = $this->db->query('SELECT promo_list_item FROM mg_content_promo JOIN mg_promo_list ON mg_content_promo.content_promo_list = mg_promo_list.promo_list_subtitle WHERE mg_content_promo.content_promo_list = "Software Customized?_list";')->result();
	// 	return $prom;
	// }

	public function getPromo2_1List(){
		$prom = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p2.1" ;')->result();
		return $prom;
	}

	public function getPromo2_2List(){
		$prom = $this->db->query('SELECT * FROM mg_content_list WHERE content_list_ct = "content_list_p2.2" ;')->result();
		return $prom;
	}

	// public function getPromoWebSejutaanDapetnyaList(){
	// 	$prom = $this->db->query('SELECT promo_list_item FROM mg_content_promo JOIN mg_promo_list ON mg_content_promo.content_promo_list = mg_promo_list.promo_list_subtitle WHERE mg_content_promo.content_promo_list = "Website Sejutaan?Dapetnya ini_list";')->result();
	// 	return $prom;
	// }

	// public function getPromoWebSejutaanGratisnyaList(){
	// 	$prom = $this->db->query('SELECT promo_list_item FROM mg_content_promo JOIN mg_promo_list ON mg_content_promo.content_promo_list = mg_promo_list.promo_list_subtitle WHERE mg_content_promo.content_promo_list = "Website Sejutaan?Gratisnya ini_list";')->result();
	// 	return $prom;
	// }

	public function getMainMarketing(){
		$mmar = $this->db->query('SELECT * FROM mg_main_content WHERE main_content_type = "marketing";')->last_row();
		return $mmar;
	}

	public function getMarketing(){
		$mar = $this->db->query('SELECT * FROM md_user WHERE user_dept = "Marketing";')->result();
		return $mar;
	}
}
