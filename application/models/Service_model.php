<?php 
	class service_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_service_4($service_id = ""){
			if($service_id === ""){
				$this->db->order_by('service_order', 'ASC');
				$this->db->limit(6);
				$this->db->where('status',1);
				$query = $this->db->get('service');
				return $query->result_array();
			}
			$this->db->order_by('service_order', 'ASC');
			$this->db->where('status',1);
			$this->db->where('service_id',$service_id);
			$query = $this->db->get('service');
			return $query->row_array();		
		}
		
		public function get_related_service($service_id){
			$this->db->order_by('service_order', 'ASC');
			$this->db->where('service_id',$service_id);
			$this->db->where('status',1);
			$query = $this->db->get('service');
			$service = $query->result_array();	
			
			$this->db->where('cat_id',$service[0]['cat_id']);
			$this->db->where('status',1);
			$query = $this->db->get('service');
			return $query->result_array();	
		}
		
		//Admin Panel Models
		
		public function get_categories(){
			$this->db->order_by('cat_name');
			$query = $this->db->get('category');
			return $query->result_array();
		}
		
		public function count_inquiry(){
			$query = $this->db->from('service')->count_all_results();
			return $query;
		}
		
		public function get_service($service_id = ""){

			if($service_id === ""){
				$this->db->order_by('service_order', 'ASC');
                $this->db->where('status',1);
                $query = $this->db->get('service');
				return $query->result_array();
			}
			$this->db->where('service_id',$service_id);
			$query = $this->db->get('service');
			return $query->row_array();			
		}
		
		public function get_service_header(){
			$this->db->select("service_name,service_slug,cat_name,cat_slug");
			$this->db->from('category as ca');
			$this->db->join('service as po', 'po.cat_id = ca.cat_id', 'left');
			$this->db->order_by('cat_order','asc');
			$query = $this->db->get();
			return $query->result_array();			
		}
		
		public function get_service_by_slug($service_slug){
			$this->db->where('service_slug',$service_slug);
			$this->db->where('status',1);
			$query = $this->db->get('service');
			return $query->row_array();			
		}

		public function get_service_by_category($cat_id = ""){
			$this->db->order_by('service_order', 'ASC');
			$this->db->where('cat_id',$cat_id);
			$this->db->where('status',1);
			$query = $this->db->get('service');
			return $query->result_array();			
		}
		
		public function get_service_by_categories($cat_ids){
			$this->db->order_by('service_order', 'ASC');
			$this->db->where_in('cat_id',$cat_ids);
			$this->db->where('status',1);
			$query = $this->db->get('service');
			return $query->result_array();			
		}
		
		public function get_category_name($service_id = ""){
			
			if ($service_id === ""){
				$query = $this->db->get('service');
				$service = $query->result_array();
				
				$this->db->order_by('service.service_id', 'DESC');
				$this->db->join('category', 'category.cat_id = service.cat_id');
				$query = $this->db->get('service');
			}
			else{
				$this->db->where('service_id',$service_id);
				$query = $this->db->get('service');
				$service = $query->result_array();	
				
				$this->db->where('cat_id',$service[0]['cat_id']);
				$query = $this->db->get('category');
				return $query->row_array();
			}
		}

		public function create_service(){

			$data = array(
				'service_name' => $this->input->post('service_name'),
				'service_price' => $this->input->post('service_price'),
				'service_description' => $this->input->post('service_description'),
				'service_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('service_slug')))
			);
			$this->db->insert('service',$data); 
		    return $this->db->insert_id();
		}
		
		public function delete_service($service_id){
			$this->db->where('service_id',$service_id);
			$this->db->delete('service');
		}

		public function edit_service($service_id){

			$data = array(
				'service_name' => $this->input->post('service_name'),
				'service_price' => $this->input->post('service_price'),
				'service_description' => $this->input->post('service_description'),			
				'service_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('service_slug')))	
			);
			return $this->db
					->where('service_id',$service_id)
					->update('service',$data);
		}

		public function update_service(){
			$service_id = $this->input->post('service_id');
			$data = array(
				'service_name' => $this->input->post('service_name'),
				'service_price' => $this->input->post('service_price'),
				'service_description' => $this->input->post('service_description'),
				'service_slug' => preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('service_slug')))
			);
			$this->db->where('service_id',$service_id);
			return $this->db->update('service',$data);
		}

		public function order()
		{
			foreach($this->input->post('service') as $service_id=>$value)
			{
				$this->db->where('service_id',$service_id);
				$data = array(
					'service_order' => $value,
				);				
				$this->db->update('service',$data);
			}
			return null;
		}

		public function change_status()
		{
			$service_id = $this->input->post('service_id');
			$service_status = $this->input->post('service_status');

			$this->db->where('service_id',$service_id);
			$data = array(
				'status' => $service_status,
			);				
			$this->db->update('service',$data);
			return null;
		}
		
	}