<?php 
	class Image_gallery_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_image($image_id=""){
			if($image_id != "")
			{
				$this->db->where('image_id',$image_id);
				$query = $this->db->get('image_gallery');
				return $query->row_array();						
			}
			$this->db->order_by("image_id", "desc");
			$query = $this->db->get('image_gallery');
			return $query->result_array();
		}
		public function create_image($image_name,$ext,$image_original_name){
			$data = array(
				'image_name' => $image_name,
				'image_original_name' => $image_original_name,
				'ext' => $ext,
			);
			return $this->db->insert('image_gallery',$data); 
		}
		
		public function delete_image($image_id){
			$this->db->where('image_id',$image_id);
			$this->db->delete('image_gallery');
		}

		public function convert_webp($image_id,$image)
		{
			$data = array(
				'image_name' => $image
			);
			return $this->db
					->where('image_id',$image_id)
					->update('image_gallery',$data);
		}

	}