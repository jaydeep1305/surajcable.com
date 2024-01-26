<?php 
	class Mail_sent_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_mail($_attachments = ""){
			$attachments = "";
			if(is_array($_attachments))
			{
				$attachments = json_encode($_attachments);
			}
			$data = array(
				"from_email" => $this->input->post('from_email'),
				"to_email" => $this->input->post('to_email'),
				"bcc_email" => $this->input->post('bcc_email'),
				"cc_email" => $this->input->post('cc_email'),
				"subject" => $this->input->post('subject'),
				"mail_description" => $this->input->post('mail_description'),
				"attachments" => $attachments,
				"status" => 0
			);
			$this->db->insert('mail_sent',$data);
			return $this->db->insert_id();
		}
		
		public function view($id){
			$this->db->where('mail_sent_id',$id);
			$query = $this->db->get('mail_sent');
			return $query->row_array();			
		}

		public function mailbox($limit=10,$start=0,$status=0){
			$this->db->order_by('mail_sent_id','DESC');
			$this->db->where('status',$status);
			$this->db->limit($limit, $start);
			$query = $this->db->get('mail_sent');
			return $query->result_array();	
		}

		public function get_attachments_db($id)
		{
			$this->db->where('mail_sent_id',$id);
			$query = $this->db->get('mail_sent');
			$query = $query->row_array();
			$attachments = $query['attachments'];
			$attachments = json_decode($attachments);
			return $attachments;
		}
		
		public function record_count($status) {
			return $this->db->where('status',$status)->count_all_results("mail_sent");
		}

		public function deletemail($id){
			$data = array('status' => -1);
			$this->db->where('mail_sent_id',$id)->update('mail_sent',$data);
		}
		public function deletemailpermanent($id){
			$this->db->where('mail_sent_id',$id)->delete('mail_sent');
		}
	}