<?php 
	class Process_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		//Client Panel Models
		public function get_process_6($process_id = ""){
			if($process_id === ""){
				$this->db->order_by('process_id', 'DESC');
				$this->db->limit(6);
				$query = $this->db->get('process');
				return $query->result_array();
			}
			$this->db->where('process_id',$process_id);
			$query = $this->db->get('process');
			return $query->row_array();			
		}

		
		//Admin Panel Models
		public function get_process($process_id = ""){
			if($process_id === ""){
				$this->db->order_by('process_id', 'DESC');
				$query = $this->db->get('process');
				return $query->result_array();
			}
			$this->db->where('process_id',$process_id);
			$query = $this->db->get('process');
			return $query->row_array();			
		}

		public function create_process($process_image){

			$data = array(
				'process_name' => $this->input->post('process_name'),
				'process_description' => $this->input->post('process_description'),
				'process_image' => $process_image
			);
			return $this->db->insert('process',$data); 
		}
		
		public function delete_process($process_id){
			$this->db->where('process_id',$process_id);
			$this->db->delete('process');
		}

		public function edit_process($process_id,$process_image){
			
			$data = array(
				'process_name' => $this->input->post('process_name'),
				'process_description' => $this->input->post('process_description'),
				'process_image' => $process_image
			);
			return $this->db
					->where('process_id',$process_id)
					->update('process',$data);
		}

		public function update_process($process_image){
			$process_id = $this->input->post('process_id');
			$data = array(
				'process_name' => $this->input->post('process_name'),
				'process_description' => $this->input->post('process_description'),
				'process_image' => $process_image
			);
			$this->db->where('process_id',$process_id);
			return $this->db->update('process',$data);
		}
	}