<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_marketing_c extends CI_Controller {


	public function index()
	{
		$data['marketing'] = $this->manage_marketing_m->getmarketing();
		$this->template->load('admin/static_v','admin/manage_marketing_v',$data);
		
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_marketing_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function add(){
		$config['upload_path']          = './assets/admin/img/marketing/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '20000';

		$this->load->library('upload');
		$this->upload->initialize($config);
		
	    if ($this->upload->do_upload('addmarketing-pict-input'))
	    {
	    	$filename=$this->upload->data('file_name');
	    	$username = $this->input->post('addmarketing-username-input');
	    	$fname = $this->input->post('addmarketing-fname-input');
	    	$lname = $this->input->post('addmarketing-lname-input');
	    	$email = $this->input->post('addmarketing-email-input');
	    	$dept = "Marketing";
	    	$bio = $this->input->post('addmarketing-bio-input');
	    	$phone = $this->input->post('addmarketing-phone-input');
	    	$line = $this->input->post('addmarketing-line-input');
	    	$pinbb = $this->input->post('addmarketing-pinbb-input');
	    	$pict = $filename;

	    	$data = array(
	    		'user_username' => $username, 	
	    		'user_fname' => $fname,
	    		'user_lname' => $lname,
	    		'user_email' => $email,
	    		'user_dept' => $dept,
	    		'user_bio' => $bio,
	    		'user_phone' => $phone,
	    		'user_line' => $line,
	    		'user_pinbb' => $pinbb,
	    		'user_pict' => $pict
	    		);

	    	$this->manage_marketing_m->addmarketing('md_user',$data);
	    } else {
	    	
	    }
	redirect('admin/manage_marketing_c');
		
	}

	public function delete(){
		$id = $_REQUEST['content_marketing_id'];
		$this->manage_marketing_m->deletemarketing($id);
		redirect('admin/manage_marketing_c');
	}

	public function edit(){

		$config['upload_path']          = './assets/admin/img/marketing/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('emarketing-pict-input')) {
			$id = $this->input->post('emarketing-id-input');
			$fname = $this->input->post('emarketing-fname-input');
			$lname = $this->input->post('emarketing-lname-input');
			$email = $this->input->post('emarketing-email-input');
			$bio = $this->input->post('emarketing-bio-input');
			$phone = $this->input->post('emarketing-phone-input');
			$line = $this->input->post('emarketing-line-input');
			$pinbb = $this->input->post('emarketing-pinbb-input');
		    $data = array(
				'user_fname' => $fname,
				'user_lname' => $lname,
				'user_email' => $email,
				'user_bio' => $bio,
				'user_phone' => $phone,
				'user_line' => $line,
				'user_pinbb' => $pinbb,
		    	);
		    $this->manage_marketing_m->editmarketing('md_user',$data,$id);
		} else {

			$filename=$this->upload->data('file_name');
			$id = $this->input->post('emarketing-id-input');
			$fname = $this->input->post('emarketing-fname-input');
			$lname = $this->input->post('emarketing-lname-input');
			$email = $this->input->post('emarketing-email-input');
			$bio = $this->input->post('emarketing-bio-input');
			$phone = $this->input->post('emarketing-phone-input');
			$line = $this->input->post('emarketing-line-input');
			$pinbb = $this->input->post('emarketing-pinbb-input');
			$pict = $filename;
			$data = array(
				'user_fname' => $fname,
				'user_lname' => $lname,
				'user_email' => $email,
				'user_bio' => $bio,
				'user_phone' => $phone,
				'user_line' => $line,
				'user_pinbb' => $pinbb,
				'user_pict' => $pict,
				);
			$this->manage_marketing_m->editmarketing('md_user',$data,$id);
		}
			redirect('admin/manage_marketing_c');

	    		
	}


	public function loadEditmarketing(){
		$id = $_REQUEST['user_id'];
		$data['marketing'] = $this->manage_marketing_m->getDataMarketing($id);
		$this->load->view('admin/load_edit_marketing_v',$data);
	}

	public function loadEditmarketingOthers(){
		$id = $_REQUEST['content_marketing_id'];
		$data['marketing'] = $this->manage_marketing_m->getDatamarketing($id);
		$this->load->view('admin/load_edit_marketing_others_v',$data);
	}

	public function loadEditmarketingDetail(){
		$id = $_REQUEST['content_marketing_id'];
		$data['marketing'] = $this->manage_marketing_m->getDatamarketing($id);
		$this->load->view('admin/load_edit_marketing_detail_v',$data);
	}

	public function loadEditmarketingDetailProposal(){
		$id = $_REQUEST['content_marketing_id'];
		$data['marketing'] = $this->manage_marketing_m->getDatamarketing($id);
		$this->load->view('admin/load_edit_marketing_detail_proposal_v',$data);
	}
}
