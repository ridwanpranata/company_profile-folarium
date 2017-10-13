<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_promo_c extends CI_Controller {


	public function index()
	{
		$data['promo1'] = $this->manage_promo_m->getPromo1();
		$data['promo2'] = $this->manage_promo_m->getPromo2();
		$data['listP1'] = $this->manage_promo_m->get_list1();
		$data['listP2_1'] = $this->manage_promo_m->get_list2_1();
		$data['listP2_2'] = $this->manage_promo_m->get_list2_2();
		$this->template->load('admin/static_v','admin/manage_promo_v',$data);
		
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_promo_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function delete(){
		$id = $_REQUEST['content_list_id'];
		$this->manage_promo_m->deleteList($id);
		redirect('admin/manage_promo_c');
	}

	public function edit(){

		$id = $this->input->post('promo-id-input');
		$title = $this->input->post('promo-title-input');
		$list_promo = $this->input->post('promo-list-input[]');
		

		$data = array(
			'content_promo_title' => $title,
			);

		$this->manage_promo_m->editPromo('mg_content_promo',$data,$id);

		foreach($list_promo as $key=> $n){

		    $this->manage_promo_m->edit_promo_list('mg_content_list',$list_promo[$key]);
		}

		redirect('admin/manage_promo_c');


	}

	public function edit2(){

		$id = $this->input->post('promo2-id-input');
		$title = $this->input->post('promo2-title-input');
		$subtitle2_1 = $this->input->post('promo2-sub-title-input');
		$subtitle2_2 = $this->input->post('promo2-sub-title2-input');
		$list_promo2_1 = $this->input->post('promo2_1-list-input[]');
		$list_promo2_2 = $this->input->post('promo2_2-list-input[]');

		$data = array(
			'content_promo_title' => $title,
			'content_promo_sub_title' => $subtitle2_1,
			'content_promo_sub_title2' => $subtitle2_2,
			);

		$this->manage_promo_m->editPromo('mg_content_promo',$data,$id);

		foreach($list_promo2_1 as $key=> $n){

		    $this->manage_promo_m->edit_promo_list2_1('mg_content_list',$list_promo2_1[$key]);
		}

		foreach($list_promo2_2 as $key=> $n){

		    $this->manage_promo_m->edit_promo_list2_2('mg_content_list',$list_promo2_2[$key]);
		}

		redirect('admin/manage_promo_c');


	}
}
