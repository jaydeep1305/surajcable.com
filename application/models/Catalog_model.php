<?php 
	class Catalog_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Admin Panel Models
		
		public function get_catalog($catalog_id = ""){
			
			if($catalog_id === ""){
				$this->db->order_by('catalog.catalog_id', 'DESC');
				$query = $this->db->get('catalog');
				return $query->result_array();
			}
			$this->db->where('catalog_id',$catalog_id);
			$query = $this->db->get('catalog');
			return $query->row_array();			
		}

		public function create_catalog($catalog_file){

			$data = array(
				'catalog_title' => $this->input->post('catalog_title'),
				'catalog_description' => $this->input->post('catalog_description'),
				'catalog' => $catalog_file
			);
			return $this->db->insert('catalog',$data); 
		}
		
		public function delete_catalog($catalog_id){
			$this->db->where('catalog_id',$catalog_id);
			$this->db->delete('catalog');
		}

		public function edit_catalog($catalog_id){

			$data = array(
				'catalog_title' => $this->input->post('catalog_title'),
				'catalog_description' => $this->input->post('catalog_description'),
				'catalog' => $catalog_file
			);
			return $this->db
					->where('catalog_id',$catalog_id)
					->update('catalog',$data);
		}

		public function update_catalog($catalog_file){
			$catalog_id = $this->input->post('catalog_id');
			$data = array(
				'catalog_title' => $this->input->post('catalog_title'),
				'catalog_description' => $this->input->post('catalog_description'),
				'catalog' => $catalog_file
			);
			$this->db->where('catalog_id',$catalog_id);
			return $this->db->update('catalog',$data);
		}
	}