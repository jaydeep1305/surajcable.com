<?php 
	class Testimonial_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_testimonial($testimonial_id = ""){
			if($testimonial_id === ""){
				$this->db->order_by('testimonial_order', 'ASC');
				$query = $this->db->get('testimonial');
				return $query->result_array();
			}
			$this->db->where('testimonial_id',$testimonial_id);
			$query = $this->db->get('testimonial');
			return $query->row_array();			
		}

		public function create_testimonial($testimonial_image){
			$data = array(
				'username' => $this->input->post('username'),
				'designation' => $this->input->post('designation'),
				'testimonial' => $this->input->post('testimonial'),
				'testimonial_image' => $testimonial_image
			);
			return $this->db->insert('testimonial',$data); 
		}
		
		public function delete_testimonial($testimonial_id){
			$this->db->where('testimonial_id',$testimonial_id);
			$this->db->delete('testimonial');
		}

		public function edit_testimonial($testimonial_id){

			$data = array(
				'username' => $this->input->post('username'),
				'designation' => $this->input->post('designation'),
				'testimonial' => $this->input->post('testimonial'),
				'testimonial_image' => $testimonial_image
			);
			return $this->db
					->where('testimonial_id',$testimonial_id)
					->update('testimonial',$data);
		}

		public function update_testimonial($testimonial_image){
			$testimonial_id = $this->input->post('testimonial_id');
			$data = array(
				'username' => $this->input->post('username'),
				'designation' => $this->input->post('designation'),
				'testimonial' => $this->input->post('testimonial'),
				'testimonial_image' => $testimonial_image
			);
			$this->db->where('testimonial_id',$testimonial_id);
			return $this->db->update('testimonial',$data);
		}

		public function delete($testimonial_id){
			//$this->db->where('testimonial_id',$testimonial_id);
			//$this->db->delete('testimonial');
		}
		
		public function order()
		{
			foreach($this->input->post('testimonial') as $testimonial_id=>$value)
			{
				$this->db->where('testimonial_id',$testimonial_id);
				$data = array(
					'testimonial_order' => $value,
				);				
				$this->db->update('testimonial',$data);
			}
			return null;
		}
		
		public function convert_webp($testimonial_id,$image)
		{
			$data = array(
				'testimonial_image' => $image
			);
			return $this->db
					->where('testimonial_id',$testimonial_id)
					->update('testimonial',$data);
		}

	}