<?php 
	class client_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_client($client_id = ""){
			if($client_id === ""){
				$this->db->order_by('client_id', 'DESC');
				$query = $this->db->get('client');
				return $query->result_array();
			}
			$this->db->where('client_id',$client_id);
			$query = $this->db->get('client');
			return $query->row_array();			
		}

		public function create_client(){

			$data = array(
				'client_name' => $this->input->post('client_name'),
				'client_email' => $this->input->post('client_email'),
				'client_provider' => $this->input->post('client_provider')
			);
			return $this->db->insert('client',$data); 
		}
		
		public function delete_client($client_id){
			$this->db->where('client_id',$client_id);
			$this->db->delete('client');
		}
		
		public function edit_client($client_id){

			$data = array(
				'client_name' => $this->input->post('client_name'),
				'client_email' => $this->input->post('client_email'),
				'client_provider' => $this->input->post('client_provider')
			);
			return $this->db
					->where('client_id',$client_id)
					->update('client',$data);
		}

		public function update_client(){
			$client_id = $this->input->post('client_id');
			$data = array(
				'client_name' => $this->input->post('client_name'),
				'client_email' => $this->input->post('client_email'),
				'client_provider' => $this->input->post('client_provider')
			);
			$this->db->where('client_id',$client_id);
			return $this->db->update('client',$data);
		}
		
		
	}