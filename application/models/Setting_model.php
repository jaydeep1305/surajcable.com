<?php 
	class Setting_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_setting(){
			$query = $this->db->get('setting');
			return $query->result_array();			
		}

		public function get_setting_detail()
		{
			$setting_detail = array();
			$querys = $this->db->get('setting');
			$querys = $querys->result_array();
			foreach ($querys as $query) 
			{
				$setting_detail[$query['name']] = $query['value'];
			}
			return $setting_detail;
		}
	}