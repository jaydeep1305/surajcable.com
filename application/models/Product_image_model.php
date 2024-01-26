<?php 
	class Product_image_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_all_product_image(){
			$query = $this->db->get('product_image');
			return $query->result_array();		
		}
		public function get_product_image($product_id){
			$this->db->where('product_id',$product_id);
			$this->db->order_by("product_image_order", "asc");
			$query = $this->db->get('product_image');
			return $query->result_array();		
		}
		public function get_product_image_single($product_id){
			$this->db->where('product_id',$product_id);
			$this->db->order_by("product_image_order", "asc");
			$query = $this->db->get('product_image');
			return $query->row_array();		
		}

		public function get_product_id($product_image_id){
			$this->db->where('product_image_id',$product_image_id);
			$query = $this->db->get('product_image');
			return $query->row_array();
		}
		
		public function create_product_image($product_id,$product_image_name){
			$data = array(
				'product_id' => $product_id,
				'product_image_name' => $product_image_name,
			);
			return $this->db->insert('product_image',$data); 
		}
		
		public function product_image_order($product_image_id,$product_image_order){
			$data = array('product_image_order' => $product_image_order);
			return $this->db
					->where('product_image_id',$product_image_id)
					->update('product_image',$data);
		}

		public function delete_product_image($product_image_id){
			$this->db->where('product_image_id',$product_image_id);
			$this->db->delete('product_image');
		}

		public function convert_webp($product_image_id,$image)
		{
			$data = array(
				'product_image_name' => $image
			);
			return $this->db
					->where('product_image_id',$product_image_id)
					->update('product_image',$data);
		}


	}