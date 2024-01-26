<?php 
	class Inquiry_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_inquiry($inquiry_id = ""){
			if($inquiry_id === ""){
				$this->db->order_by('inquiry_id', 'DESC');
				$query = $this->db->get('inquiry');
				return $query->result_array();
			}
			$this->db->where('inquiry_id',$inquiry_id);
			$query = $this->db->get('inquiry');
			return $query->row_array();			
		}
		
		public function count_inquiry(){
			$query = $this->db->from('inquiry')->count_all_results();
			return $query;
		}
		
		// Come form contact page at client side
		public function create_inquiry(){
			$data = array(
				'name' => $this->input->post('your_name'),
				'email' => $this->input->post('your_email'),
				'phone' => $this->input->post('your_contact'),
				'inquiry' => $this->input->post('your_inquiry')
			);
			return $this->db->insert('inquiry',$data); 
		}
        public function create_career_inquiry(){
            $data = array(
                'name' => "Career : ".$this->input->post('your_name'),
                'email' => $this->input->post('your_email'),
                'phone' => $this->input->post('your_contact'),
                'inquiry' => "Designation : ".$this->input->post('your_designation')." ".$this->input->post('your_inquiry')
            );
            return $this->db->insert('inquiry',$data);
        }


        public function create_callback(){
			$data = array(
				'name' => $this->input->post('your_name'),
				'email' => "callback",
				'phone' => $this->input->post('your_contact'),
				'inquiry' => "callback"
			);
			return $this->db->insert('inquiry',$data); 
		}
		
		public function delete_inquiry($inquiry_id){
			$this->db->where('inquiry_id',$inquiry_id);
			$this->db->delete('inquiry');
		}
	}