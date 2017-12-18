<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('detail_m');
		$this->load->model('home_m');
	}

	public function index()
	{
		$this->load->view('detail_v');
	}

	public function detailContent($products)
	{
		$data['seo'] 			= $this->home_m->getSeo();
		$data['getAllDetail']	= $this->detail_m->getAllDetail();
		$data['title'] 			= $products;
		$data['products'] 		= $this->detail_m->getDetailProduct($products);
		$data['getListDetail'] 	= $this->detail_m->getListDetail($products);
		$data['mar'] 			= $this->home_m->getMarketing();
		$this->template->load('detail_v','detail_content_v',$data);

	}

}