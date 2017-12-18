<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('home_m');
	}

	public function index()
	{
		$data['seo'] 				= $this->home_m->getSeo();
		$data['header'] 			= $this->home_m->getHeader();
		$data['headerList']			= $this->home_m->getHeaderList();
		$data['logo'] 				= $this->home_m->getLogo();
		$data['cp'] 				= $this->home_m->getCP();
		$data['cpListSlideshow'] 	= $this->home_m->getCPSlideshow();
		$data['cpList'] 			= $this->home_m->getCPList();
		$data['mpd'] 				= $this->home_m->getMainProduct();
		$data['circleTitle'] 		= $this->home_m->getCircleTitle();
		$data['circleItem'] 		= $this->home_m->getCircleItem();
		$data['fortnership'] 		= $this->home_m->getFortnership();
		$data['product'] 			= $this->home_m->getProducts();
		$data['mben'] 				= $this->home_m->getMainBenefit();
		$data['benefit'] 			= $this->home_m->getBenefits();
		$data['mprom'] 				= $this->home_m->getMainPromo();
		$data['promo1']				= $this->home_m->getPromo1();
		$data['promo2'] 			= $this->home_m->getPromo2();
		$data['promo1List'] 		= $this->home_m->getPromo1List();
		$data['promo2_1List'] 		= $this->home_m->getPromo2_1List();
		$data['promo2_2List'] 		= $this->home_m->getPromo2_2List();
		$data['mar'] 				= $this->home_m->getMarketing();


		$this->load->view('home_v',$data);
	}

}
?>