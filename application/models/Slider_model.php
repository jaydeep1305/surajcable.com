<?php 
	class Slider_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_slider($slider_id = ""){
			if($slider_id === ""){
				$this->db->order_by('slider_order', 'ASC');
				$query = $this->db->get('slider');
				return $query->result_array();
			}
			$this->db->where('slider_id',$slider_id);
			$query = $this->db->get('slider');
			return $query->row_array();			
		}

		public function create_slider($image){

			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $image
			);
			return $this->db->insert('slider',$data); 
		}
		
		public function delete_slider($slider_id){
			$this->db->where('slider_id',$slider_id);
			$this->db->delete('slider');
		}
		
		public function edit_slider($slider_id){

			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $image
			);
			return $this->db
					->where('slider_id',$slider_id)
					->update('slider',$data);
		}

		public function update_slider($image){
			$slider_id = $this->input->post('slider_id');
			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $image
			);
			$this->db->where('slider_id',$slider_id);
			return $this->db->update('slider',$data);
		}
		public function order()
		{
			foreach($this->input->post('slider') as $slider_id=>$value)
			{
				$this->db->where('slider_id',$slider_id);
				$data = array(
					'slider_order' => $value,
				);				
				$this->db->update('slider',$data);
			}
			return null;
		}

		public function convert_webp($slider_id,$image)
		{
			$data = array(
				'image' => $image
			);
			return $this->db
					->where('slider_id',$slider_id)
					->update('slider',$data);
		}

		
	}