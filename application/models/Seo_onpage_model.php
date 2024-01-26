<?php 
	class Seo_onpage_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_seo_onpage($seo_onpage_id = ""){
			if($seo_onpage_id != "")
			{
				$this->db->where('seo_onpage_id',$seo_onpage_id);
				$query = $this->db->get('seo_onpage');
				return $query->row_array();	
			}
			else
			{
				$query = $this->db->get('seo_onpage');
				return $query->result_array();				
			}
		}

	}