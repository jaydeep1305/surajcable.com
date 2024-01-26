<?php 
	class package_image_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_all_package_image(){
			$query = $this->db->get('package_image');
			return $query->result_array();		
		}
		public function get_package_image($package_id){
			$this->db->where('package_id',$package_id);
			$this->db->order_by("package_image_order", "asc");
			$query = $this->db->get('package_image');
			return $query->result_array();		
		}
		public function get_package_image_single($package_id){
			$this->db->where('package_id',$package_id);
			$this->db->order_by("package_image_order", "asc");
			$query = $this->db->get('package_image');
			return $query->row_array();		
		}

		public function get_package_id($package_image_id){
			$this->db->where('package_image_id',$package_image_id);
			$query = $this->db->get('package_image');
			return $query->row_array();
		}
		
		public function create_package_image($package_id,$package_image_name){
			$data = array(
				'package_id' => $package_id,
				'package_image_name' => $package_image_name,
			);
			return $this->db->insert('package_image',$data); 
		}
		
		public function package_image_order($package_image_id,$package_image_order){
			$data = array('package_image_order' => $package_image_order);
			return $this->db
					->where('package_image_id',$package_image_id)
					->update('package_image',$data);
		}

		public function delete_package_image($package_image_id){
			$this->db->where('package_image_id',$package_image_id);
			$this->db->delete('package_image');
		}

		public function convert_webp($package_image_id,$image)
		{
			$data = array(
				'package_image_name' => $image
			);
			return $this->db
					->where('package_image_id',$package_image_id)
					->update('package_image',$data);
		}


	}