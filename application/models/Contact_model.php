<?php 
	class Contact_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_contact(){
			$query = $this->db->get('contact');
			return $query->result_array();			
		}

		
		// Come form contact page at client side
		public function update_contact(){
			$post = $_POST;
			foreach($_POST as $name=>$value)
			{
				if(is_array($value))
					$value = implode("|||",$value);
				
				$data = array(
					'name' => $name,
					'value' => $value,
				);		
				$data = array('value' => $value);
				$this->db
				->where('name',$name)
				->update('contact',$data);
			}
			return; 
		}

		public function get_contact_detail()
		{
			$contact_detail = array();
			$querys = $this->db->get('contact');
			$querys = $querys->result_array();
			foreach ($querys as $query) 
			{
				$contact_detail[$query['name']] = $query['value'];
			}
			return $contact_detail;
		}
	}