<?php 
	class Partner_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_partner($partner_id = ""){
			if($partner_id === ""){
				$this->db->order_by('partner_order', 'ASC');
				$query = $this->db->get('partner');
				return $query->result_array();
			}
			$this->db->where('partner_id',$partner_id);
			$query = $this->db->get('partner');
			return $query->row_array();			
		}

		public function create_partner($partner_logo){

			$data = array(
				'partner_name' => $this->input->post('partner_name'),
				'partner_logo' => $partner_logo
			);
			return $this->db->insert('partner',$data); 
		}
		
		public function delete_partner($partner_id){
			$this->db->where('partner_id',$partner_id);
			$this->db->delete('partner');
		}
		
		public function edit_partner($partner_id){

			$data = array(
				'partner_name' => $this->input->post('partner_name'),
				'partner_logo' => $partner_logo
			);
			return $this->db
					->where('partner_id',$partner_id)
					->update('partner',$data);
		}

		public function update_partner($partner_logo){
			$partner_id = $this->input->post('partner_id');
			$data = array(
				'partner_name' => $this->input->post('partner_name'),
				'partner_logo' => $partner_logo
			);
			$this->db->where('partner_id',$partner_id);
			return $this->db->update('partner',$data);
		}
		
		public function order()
		{
			foreach($this->input->post('partner') as $partner_id=>$value)
			{
				$this->db->where('partner_id',$partner_id);
				$data = array(
					'partner_order' => $value,
				);				
				$this->db->update('partner',$data);
			}
			return null;
		}
		public function convert_webp($partner_id,$image)
		{
			$data = array(
				'partner_logo' => $image
			);
			return $this->db
					->where('partner_id',$partner_id)
					->update('partner',$data);
		}

		
	}