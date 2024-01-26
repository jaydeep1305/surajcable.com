<?php 
	class Subscriber_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_subscriber($subscriber_id = ""){
			if($subscriber_id === ""){
				$this->db->order_by('subscriber_id', 'DESC');
				$query = $this->db->get('subscriber');
				return $query->result_array();
			}
			$this->db->where('subscriber_id',$subscriber_id);
			$query = $this->db->get('subscriber');
			return $query->row_array();			
		}

		public function count_inquiry(){
			$query = $this->db->from('subscriber')->count_all_results();
			return $query;
		}

		
		// Comes form contact page at client side
		public function create_subscriber(){

			$data = array(
				'subscriber_email' => $this->input->post('subscriber_email')
			);
			return $this->db->insert('subscriber',$data); 
		}
		
		public function delete_subscriber($subscriber_id){
			$this->db->where('subscriber_id',$subscriber_id);
			$this->db->delete('subscriber');
		}
	}