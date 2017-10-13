<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_product_m extends CI_Model {

	public function getProduct()
	{
		$data_product = $this->db->query('SELECT * FROM mg_content_product;')->result();
		return $data_product;
	}

	public function addProduct($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function addListDetail($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function deleteProduct($id)
	{
		$row = $this->db->query("SELECT * FROM mg_content_product WHERE content_product_id = '$id';")->last_row();
		$product_pict = $row->content_product_pict;
		unlink("assets/admin/img/products/".$product_pict);
		$product_pict2 = $row->content_product_pict2;
		unlink("assets/admin/img/products/detail-pict/".$product_pict2);
		$product_othersPict = $row->content_product_othersPict;
		unlink("assets/admin/img/products/others-product/".$product_othersPict);
		$product_proposal = $row->content_product_proposal;
		unlink("assets/admin/file/product-proposal/".$product_proposal);
		return $this->db->query("DELETE FROM mg_content_product WHERE content_product_id = '$id';");
	}

	public function deleteListDetail($id)
	{
		$row = $this->db->query("SELECT content_listDetail_item FROM mg_content_listDetail WHERE content_listDetail_id = '$id';")->last_row();
		$filename = $row->content_listDetail_item;
		unlink("assets/admin/img/products/detail-pict/".$filename);
		return $this->db->query("DELETE FROM mg_content_listDetail WHERE content_listDetail_id = '$id';");
	}

	public function editProduct($table,$data,$id)
	{
		
		$this->db->where('content_product_id',$id);
		$row = $this->db->query("SELECT content_product_pict FROM mg_content_product WHERE content_product_id = '$id';")->last_row();
		$filename = $row->content_product_pict;
		unlink("assets/admin/img/products/".$filename);
		return $this->db->update($table,$data);
	}

	public function editDetailPict($table,$data,$id)
	{
		
		$this->db->where('content_product_id',$id);
		$row = $this->db->query("SELECT content_product_pict2 FROM mg_content_product WHERE content_product_id = '$id';")->last_row();
		$filename = $row->content_product_pict2;
		unlink("assets/admin/img/products/detail-pict/main-detail/".$filename);
		return $this->db->update($table,$data);
	}

	public function editProposal($table,$data,$id)
	{
		
		$this->db->where('content_product_id',$id);
		$row = $this->db->query("SELECT content_product_proposal FROM mg_content_product WHERE content_product_id = '$id';")->last_row();
		$filename = $row->content_product_proposal;
		unlink("assets/admin/file/product-proposal/".$filename);
		return $this->db->update($table,$data);
	}

	public function editOthers($table,$data,$id)
	{
		
		$this->db->where('content_product_id',$id);
		$row = $this->db->query("SELECT content_product_othersPict FROM mg_content_product WHERE content_product_id = '$id';")->last_row();
		$filename = $row->content_product_othersPict;
		unlink("assets/admin/img/products/others-pict/".$filename);
		return $this->db->update($table,$data);
	}

	public function getDataProduct($id){
		$dataProduct = $this->db->query("SELECT * FROM mg_content_product WHERE content_product_id = '$id';")->row();
		return $dataProduct;

	}

	public function getListDetail($product)
	{
		$listDetail = $this->db->query("SELECT * FROM mg_content_listDetail WHERE content_listDetail_product = '$product';")->result();
		return $listDetail;
	}


}
