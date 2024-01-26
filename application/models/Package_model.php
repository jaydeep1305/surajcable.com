<?php 
	class package_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_package_4($package_id = ""){
			if($package_id === ""){
				$this->db->order_by('package_order', 'ASC');
				$this->db->limit(6);
				$this->db->where('status',1);
				$query = $this->db->get('package');
				return $query->result_array();
			}
			$this->db->order_by('package_order', 'ASC');
			$this->db->where('status',1);
			$this->db->where('package_id',$package_id);
			$query = $this->db->get('package');
			return $query->row_array();		
		}
		
		public function get_related_package($package_id){
			$this->db->order_by('package_order', 'ASC');
			$this->db->where('package_id',$package_id);
			$this->db->where('status',1);
			$query = $this->db->get('package');
			$package = $query->result_array();	
			
			$this->db->where('cat_id',$package[0]['cat_id']);
			$this->db->where('status',1);
			$query = $this->db->get('package');
			return $query->result_array();	
		}
		
		//Admin Panel Models
		
		public function get_categories(){
			$this->db->order_by('cat_name');
			$query = $this->db->get('category');
			return $query->result_array();
		}
		
		public function count_inquiry(){
			$query = $this->db->from('package')->count_all_results();
			return $query;
		}
		
		public function get_package($package_id = ""){

			if($package_id === ""){
				$this->db->order_by('package_order', 'ASC');
                $this->db->where('status',1);
                $query = $this->db->get('package');
				return $query->result_array();
			}
			$this->db->where('package_id',$package_id);
			$query = $this->db->get('package');
			return $query->row_array();			
		}
		
		public function get_package_header(){
			$this->db->select("package_name,package_slug,cat_name,cat_slug");
			$this->db->from('category as ca');
			$this->db->join('package as po', 'po.cat_id = ca.cat_id', 'left');
			$this->db->order_by('cat_order','asc');
			$query = $this->db->get();
			return $query->result_array();			
		}
		
		public function get_package_by_slug($package_slug){
			$this->db->where('package_slug',$package_slug);
			$this->db->where('status',1);
			$query = $this->db->get('package');
			return $query->row_array();			
		}

		public function get_package_by_category($cat_id = ""){
			$this->db->order_by('package_order', 'ASC');
			$this->db->where('cat_id',$cat_id);
			$this->db->where('status',1);
			$query = $this->db->get('package');
			return $query->result_array();			
		}
		
		public function get_package_by_categories($cat_ids){
			$this->db->order_by('package_order', 'ASC');
			$this->db->where_in('cat_id',$cat_ids);
			$this->db->where('status',1);
			$query = $this->db->get('package');
			return $query->result_array();			
		}
		
		public function get_category_name($package_id = ""){
			
			if ($package_id === ""){
				$query = $this->db->get('package');
				$package = $query->result_array();
				
				$this->db->order_by('package.package_id', 'DESC');
				$this->db->join('category', 'category.cat_id = package.cat_id');
				$query = $this->db->get('package');
			}
			else{
				$this->db->where('package_id',$package_id);
				$query = $this->db->get('package');
				$package = $query->result_array();	
				
				$this->db->where('cat_id',$package[0]['cat_id']);
				$query = $this->db->get('category');
				return $query->row_array();
			}
		}

		public function create_package(){

			$data = array(
				'package_name' => $this->input->post('package_name'),
				'package_price' => $this->input->post('package_price'),
				'package_description' => $this->input->post('package_description'),
				'package_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('package_slug')))
			);
			$this->db->insert('package',$data); 
		    return $this->db->insert_id();
		}
		
		public function delete_package($package_id){
			$this->db->where('package_id',$package_id);
			$this->db->delete('package');
		}

		public function edit_package($package_id){

			$data = array(
				'package_name' => $this->input->post('package_name'),
				'package_price' => $this->input->post('package_price'),
				'package_description' => $this->input->post('package_description'),			
				'package_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('package_slug')))	
			);
			return $this->db
					->where('package_id',$package_id)
					->update('package',$data);
		}

		public function update_package(){
			$package_id = $this->input->post('package_id');
			$data = array(
				'package_name' => $this->input->post('package_name'),
				'package_price' => $this->input->post('package_price'),
				'package_description' => $this->input->post('package_description'),
				'package_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('package_slug')))
			);
			$this->db->where('package_id',$package_id);
			return $this->db->update('package',$data);
		}

		public function order()
		{
			foreach($this->input->post('package') as $package_id=>$value)
			{
				$this->db->where('package_id',$package_id);
				$data = array(
					'package_order' => $value,
				);				
				$this->db->update('package',$data);
			}
			return null;
		}

		public function change_status()
		{
			$package_id = $this->input->post('package_id');
			$package_status = $this->input->post('package_status');

			$this->db->where('package_id',$package_id);
			$data = array(
				'status' => $package_status,
			);				
			$this->db->update('package',$data);
			return null;
		}
		
	}