<?php 
	class service_image_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_all_service_image(){
			$query = $this->db->get('service_image');
			return $query->result_array();		
		}
		public function get_service_image($service_id){
			$this->db->where('service_id',$service_id);
			$this->db->order_by("service_image_order", "asc");
			$query = $this->db->get('service_image');
			return $query->result_array();		
		}
		public function get_service_image_single($service_id){
			$this->db->where('service_id',$service_id);
			$this->db->order_by("service_image_order", "asc");
			$query = $this->db->get('service_image');
			return $query->row_array();		
		}

		public function get_service_id($service_image_id){
			$this->db->where('service_image_id',$service_image_id);
			$query = $this->db->get('service_image');
			return $query->row_array();
		}
		
		public function create_service_image($service_id,$service_image_name){
			$data = array(
				'service_id' => $service_id,
				'service_image_name' => $service_image_name,
			);
			return $this->db->insert('service_image',$data); 
		}
		
		public function service_image_order($service_image_id,$service_image_order){
			$data = array('service_image_order' => $service_image_order);
			return $this->db
					->where('service_image_id',$service_image_id)
					->update('service_image',$data);
		}

		public function delete_service_image($service_image_id){
			$this->db->where('service_image_id',$service_image_id);
			$this->db->delete('service_image');
		}

		public function convert_webp($service_image_id,$image)
		{
			$data = array(
				'service_image_name' => $image
			);
			return $this->db
					->where('service_image_id',$service_image_id)
					->update('service_image',$data);
		}


	}