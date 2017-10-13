<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_product_c extends CI_Controller {


	public function index()
	{
		$data['product'] = $this->manage_product_m->getProduct();
		$this->template->load('admin/static_v','admin/manage_product_v',$data);
		
	}

	public function listDetail($products)
	{
		$data['title'] = $products;
		$data['list'] = $this->manage_product_m->getListDetail($products);
		$this->template->load('admin/static_v','admin/manage_product_listDetail_v',$data);
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_product_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function add(){
		$config['upload_path']          = './assets/admin/img/products/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);
		$count = 0;
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        // $this->upload->initialize($config);
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $errors = $this->upload->display_errors();
		            redirect('admin/manage_product_c');
		        }
		        else
		        {
		        	$filename[$count]=$this->upload->data('file_name');
		        }
		    }
		    $count++;
		}

		$title = $this->input->post('addproduct-title-input');
		$desc = $this->input->post('addproduct-desc-input');
		$detail = $this->input->post('addproduct-detail-input');
		$pict = $filename[0];
		$best = $this->input->post('addproduct-best-input');

		$data = array(
			'content_product_title' => $title, 	
			'content_product_desc' => $desc,
			'content_product_detail' => $detail,
			'content_product_pict' => $pict,
			'content_product_best' => $best,
			);

		$this->manage_product_m->addProduct('mg_content_product',$data);
		
		redirect('admin/manage_product_c');
		
	}

	public function add_listDetail(){

		$config['upload_path']          = "./assets/admin/img/products/detail-pict/";
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);
		$title = $this->input->post('listDetail-title');
    
        if ($this->upload->do_upload('add-listDetail-input'))
        {
        	$filename=$this->upload->data('file_name');
        	$title = $this->input->post('listDetail-title');
        	$item = $filename;
        	$data = array(
        		'content_listDetail_product' => $title,
        		'content_listDetail_item' => $item,
        		);
        	$this->manage_product_m->addListDetail('mg_content_listDetail',$data);
        	redirect('admin/manage_product_c');
        }
        else
        {
        	redirect('admin/manage_product_c');
        }

	}

	public function delete(){
		$id = $_REQUEST['content_product_id'];
		$this->manage_product_m->deleteProduct($id);
		redirect('admin/manage_product_c');
	}

	public function deleteList(){
		$id = $_REQUEST['content_listDetail_id'];
		$this->manage_product_m->deleteListDetail($id);
		redirect('admin/manage_product_c');
	}

	public function edit(){

		$config['upload_path']          = './assets/admin/img/products/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);
	    if (!empty($_FILES['eproduct-pict-input']['name']))
	    {
	        $this->upload->initialize($config);
	        $this->upload->do_upload('eproduct-pict-input');
	        $filename=$this->upload->data('file_name');
	        $id = $this->input->post('eproduct-id-input');
	        $title = $this->input->post('eproduct-title-input');
	        $desc = $this->input->post('eproduct-desc-input');
	        $detail = $this->input->post('eproduct-detail-input');
	        $pict = $filename;
	        $ytlink = $this->input->post('eproduct-ytlink-input');
	        $best = $this->input->post('eproduct-best-input');
	        $pict = $filename;
	        $data = array(
	        	'content_product_title' => $title, 	
	        	'content_product_desc' => $desc,
	        	'content_product_detail' => $detail,
	        	'content_product_pict' => $pict,
	        	'content_product_ytLink' => $ytlink,
	        	'content_product_best' => $best,
	        	);
	        $this->manage_product_m->editProduct('mg_content_product',$data,$id);
	        redirect('admin/manage_product_c');
	    } else {
	    	$filename=$this->upload->data('file_name');
	    	$id = $this->input->post('eproduct-id-input');
	    	$title = $this->input->post('eproduct-title-input');
	    	$desc = $this->input->post('eproduct-desc-input');
	    	$detail = $this->input->post('eproduct-detail-input');
	    	$ytlink = $this->input->post('eproduct-ytlink-input');
	    	$best = $this->input->post('eproduct-best-input');
	    	$pict = $filename;
	    	$data = array(
	    		'content_product_title' => $title, 	
	    		'content_product_desc' => $desc,
	    		'content_product_detail' => $detail,
	    		'content_product_ytLink' => $ytlink,
	    		'content_product_best' => $best,
	    		);
	    	$this->manage_product_m->editProduct('mg_content_product',$data,$id);
	    	redirect('admin/manage_product_c');

	    }		
	}

	public function edit_others(){

		if(!empty($_FILES['eproduct-otherspict-input']['name']))
		{
			$config['upload_path']          = './assets/admin/img/products/others-product/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']      		= '10000';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$this->upload->do_upload('eproduct-otherspict-input');
			$filename=$this->upload->data('file_name');
			$id = $this->input->post('eproduct-id-input');
			$otherspict = $filename;
			$data = array(
				'content_product_othersPict' => $otherspict,
				);
			$this->manage_product_m->editOthers('mg_content_product',$data,$id);
			redirect('admin/manage_product_c');
		}
		else 
		{
			redirect('admin/manage_product_c');
		}
				
	}

	public function edit_detail(){

		if(!empty($_FILES['eproduct-pict2-input']['name']))
		{
			$config['upload_path']          = './assets/admin/img/products/detail-pict/main-pict/';
			$config['allowed_types']        = 'jpg|png|pdf';
			$config['max_size']      		= '10000';

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('eproduct-pict2-input')) {
				
			} else {
				$filename=$this->upload->data('file_name');
				$id = $this->input->post('eproduct-id-input');
				$pict2 = $filename;
				$data = array(
					'content_product_pict2' => $pict2,
					);
				$this->manage_product_m->editDetailPict('mg_content_product',$data,$id);
			}
			
			redirect('admin/manage_product_c');
		}
		else 
		{
			redirect('admin/manage_product_c');
		}
				
	}

	public function edit_proposal(){

		if(!empty($_FILES['eproduct-proposal-input']['name']))
		{
			$config['upload_path']          = './assets/admin/file/product-proposal/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']      		= '10000';

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('eproduct-proposal-input')) {
				
			} else {
				$filename=$this->upload->data('file_name');
				$id = $this->input->post('eproduct-id-input');
				$proposal = $filename;
				$data = array(
					'content_product_proposal' => $proposal,
					);
				$this->manage_product_m->editProposal('mg_content_product',$data,$id);
			}
			
			redirect('admin/manage_product_c');
		}
		else 
		{
			redirect('admin/manage_product_c');
		}
				
	}

	public function edit_demoLink(){
	    $id = $this->input->post('eproduct-id-input');
		$demoLink = $this->input->post('eproduct-demoLink-input');
		$data = array(
			'content_product_ytLink' => $demoLink,
			);
		$this->manage_product_m->editProduct('mg_content_product',$data,$id);
		redirect('admin/manage_product_c');
				
	}

	public function loadEditProduct(){
		$id = $_REQUEST['content_product_id'];
		$data['product'] = $this->manage_product_m->getDataProduct($id);
		$this->load->view('admin/load_edit_product_v',$data);
	}

	public function loadEditProductProposal(){
		$id = $_REQUEST['content_product_id'];
		$data['product'] = $this->manage_product_m->getDataProduct($id);
		$this->load->view('admin/load_edit_product_proposal_v',$data);
	}

	public function loadEditProductOthers(){
		$id = $_REQUEST['content_product_id'];
		$data['product'] = $this->manage_product_m->getDataProduct($id);
		$this->load->view('admin/load_edit_product_others_v',$data);
	}

	public function loadEditProductDetail(){
		$id = $_REQUEST['content_product_id'];
		$data['product'] = $this->manage_product_m->getDataProduct($id);
		$this->load->view('admin/load_edit_product_detail_v',$data);
	}

	public function loadEditProductDemoLink(){
		$id = $_REQUEST['content_product_id'];
		$data['product'] = $this->manage_product_m->getDataProduct($id);
		$this->load->view('admin/load_edit_product_demoLink_v',$data);
	}
}
