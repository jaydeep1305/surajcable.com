<?php 
	class Product_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_product_4($product_id = ""){
			if($product_id === ""){
				$this->db->order_by('product_order', 'ASC');
				$this->db->limit(6);
				$this->db->where('status',1);
				$query = $this->db->get('product');
				return $query->result_array();
			}
			$this->db->order_by('product_order', 'ASC');
			$this->db->where('status',1);
			$this->db->where('product_id',$product_id);
			$query = $this->db->get('product');
			return $query->row_array();		
		}
		
		public function get_related_product($product_id){
			$this->db->order_by('product_order', 'ASC');
			$this->db->where('product_id',$product_id);
			$this->db->where('status',1);
			$query = $this->db->get('product');
			$product = $query->result_array();	
			
			$this->db->where('cat_id',$product[0]['cat_id']);
			$this->db->where('status',1);
			$query = $this->db->get('product');
			return $query->result_array();	
		}
		
		//Admin Panel Models
		
		public function get_categories(){
			$this->db->order_by('cat_name');
			$query = $this->db->get('category');
			return $query->result_array();
		}
		
		public function count_inquiry(){
			$query = $this->db->from('product')->count_all_results();
			return $query;
		}
		
		public function get_product($product_id = ""){

			if($product_id === ""){
				$this->db->order_by('product_order', 'ASC');
                $this->db->where('status',1);
                $query = $this->db->get('product');
				return $query->result_array();
			}
			$this->db->where('product_id',$product_id);
			$query = $this->db->get('product');
			return $query->row_array();			
		}
		
		public function get_product_header(){
			$this->db->select("product_name,product_slug,cat_name,cat_slug");
			$this->db->from('category as ca');
			$this->db->join('product as po', 'po.cat_id = ca.cat_id', 'left');
			$this->db->order_by('cat_order','asc');
			$query = $this->db->get();
			return $query->result_array();			
		}
		
		public function get_product_by_slug($product_slug){
			$this->db->where('product_slug',$product_slug);
			$this->db->where('status',1);
			$query = $this->db->get('product');
			return $query->row_array();			
		}

		public function get_product_by_category($cat_id = ""){
			$this->db->order_by('product_order', 'ASC');
			$this->db->where('cat_id',$cat_id);
			$this->db->where('status',1);
			$query = $this->db->get('product');
			return $query->result_array();			
		}
		
		public function get_product_by_categories($cat_ids){
			$this->db->order_by('product_order', 'ASC');
			$this->db->where_in('cat_id',$cat_ids);
			$this->db->where('status',1);
			$query = $this->db->get('product');
			return $query->result_array();			
		}
		
		public function get_category_name($product_id = ""){
			
			if ($product_id === ""){
				$query = $this->db->get('product');
				$product = $query->result_array();
				
				$this->db->order_by('product.product_id', 'DESC');
				$this->db->join('category', 'category.cat_id = product.cat_id');
				$query = $this->db->get('product');
			}
			else{
				$this->db->where('product_id',$product_id);
				$query = $this->db->get('product');
				$product = $query->result_array();	
				
				$this->db->where('cat_id',$product[0]['cat_id']);
				$query = $this->db->get('category');
				return $query->row_array();
			}
		}

		public function create_product(){

			$data = array(
				'product_name' => $this->input->post('product_name'),
				'cat_id' => $this->input->post('cat_id'),
				'product_description' => $this->input->post('product_description'),
				'product_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('product_slug')))
			);
			$this->db->insert('product',$data); 
		    return $this->db->insert_id();
		}
		
		public function delete_product($product_id){
			$this->db->where('product_id',$product_id);
			$this->db->delete('product');
		}

		public function edit_product($product_id){

			$data = array(
				'product_name' => $this->input->post('product_name'),
				'cat_id' => $this->input->post('cat_id'),
				'product_description' => $this->input->post('product_description'),			
				'product_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('product_slug')))	
			);
			return $this->db
					->where('product_id',$product_id)
					->update('product',$data);
		}

		public function update_product(){
			$product_id = $this->input->post('product_id');
			$data = array(
				'product_name' => $this->input->post('product_name'),
				'cat_id' => $this->input->post('cat_id'),
				'product_description' => $this->input->post('product_description'),
				'product_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('product_slug')))
			);
			$this->db->where('product_id',$product_id);
			return $this->db->update('product',$data);
		}

		public function order()
		{
			foreach($this->input->post('product') as $product_id=>$value)
			{
				$this->db->where('product_id',$product_id);
				$data = array(
					'product_order' => $value,
				);				
				$this->db->update('product',$data);
			}
			return null;
		}

		public function change_status()
		{
			$product_id = $this->input->post('product_id');
			$product_status = $this->input->post('product_status');

			$this->db->where('product_id',$product_id);
			$data = array(
				'status' => $product_status,
			);				
			$this->db->update('product',$data);
			return null;
		}
		
	}