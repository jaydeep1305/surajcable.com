<?php 
	class Business_email_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_business_email($business_email_id = ""){
			if($business_email_id === ""){
				$query = $this->db->get('business_email');
				return $query->result_array();
			}
			$this->db->where('business_email_id',$business_email_id);
			$query = $this->db->get('business_email');
			return $query->row_array();			
		}

		public function create_business_email(){
			$data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password')
			);
			return $this->db->insert('business_email',$data); 
		}
		
		public function delete_business_email($business_email_id){
			$this->db->where('business_email_id',$business_email_id);
			$this->db->delete('business_email');
		}
		
		public function edit_business_email($business_email_id){
			$data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password')
			);

			return $this->db
					->where('business_email_id',$business_email_id)
					->update('business_email',$data);
		}

		public function update_business_email(){
			$business_email_id = $this->input->post('business_email_id');
			$data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),
			);
			$this->db->where('business_email_id',$business_email_id);
			return $this->db->update('business_email',$data);
		}
		
		
	}