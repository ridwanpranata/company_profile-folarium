<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_benefit_c extends CI_Controller {


	public function index()
	{
		$data['benefit'] = $this->manage_benefit_m->getbenefit();
		

		$this->template->load('admin/static_v','admin/manage_benefit_v',$data);
		
		
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_benefit_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function add(){

		$config['upload_path']          = './assets/admin/img/benefit/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('addbenefit-pict-input'))
		{
			$error = array('error'=>"<p style='color: red'>".strip_tags($this->upload->display_errors())."</p>");
			$this->session->set_flashdata('error',$error['error']);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$filename=$this->upload->data('file_name');
			$title = $this->input->post('addbenefit-title-input');
			$desc = $this->input->post('addbenefit-desc-input');
			$pict = $filename;


			$data = array(
				'content_benefit_title' => $title,
				'content_benefit_desc' => $desc,
				'content_benefit_pict' => $pict
				);

			$this->manage_benefit_m->addBenefit('mg_content_benefit',$data);
			
			redirect('admin/manage_benefit_c');
		}
	}

	public function delete(){
		$id = $_REQUEST['content_benefit_id'];
		$this->manage_benefit_m->deleteBenefit($id);
		redirect('admin/manage_benefit_c');
	}

	public function edit(){

		$config['upload_path']          = './assets/admin/img/benefit/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('ebenefit-pict-input'))
		{
			if(!empty($_FILES['ebenefit-pict-input']['name'])){
				$error = array('error'=>"<p style='color: red'>".strip_tags($this->upload->display_errors())."</p>");
				$this->session->set_flashdata('error',$error['error']);
			}
			$id = $this->input->post('ebenefit-id-input');
			$title = $this->input->post('ebenefit-title-input');
			$desc = $this->input->post('ebenefit-desc-input');

			$data = array(
				'content_benefit_title' => $title,
				'content_benefit_desc' => $desc,
				);
			$this->manage_benefit_m->editBenefit('mg_content_benefit',$data,$id);
			redirect('admin/manage_benefit_c');
				
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$filename=$this->upload->data('file_name');
			$id = $this->input->post('ebenefit-id-input');
			$title = $this->input->post('ebenefit-title-input');
			$desc = $this->input->post('ebenefit-desc-input');
			$pict = $filename;


			$data = array(
				'content_benefit_title' => $title,
				'content_benefit_desc' => $desc,
				'content_benefit_pict' => $pict
				);
			$this->manage_benefit_m->editBenefit('mg_content_benefit',$data,$id);
			
			redirect('admin/manage_benefit_c');
		}
	}

	public function loadEditbenefit(){
		$id = $_REQUEST['content_benefit_id'];
		$data['benefit'] = $this->manage_benefit_m->getDatabenefit($id);
		$this->load->view('admin/load_edit_benefit_v',$data);
	}
}
