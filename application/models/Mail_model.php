<?php 
	class Mail_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_mail(){
			$data = array(
				"timestamp" => $this->input->post('timestamp'),
				"token" => $this->input->post('token'),
				"signature" => $this->input->post('signature'),
				"domain" => $this->input->post('domain'),
				"From_gj" => $this->input->post('From'),
				"X-Envelope-From" => $this->input->post('X-Envelope-From'),
				"X-Google-Dkim-Signature" => $this->input->post('X-Google-Dkim-Signature'),
				"To_gj" => $this->input->post('To'),
				"Dkim-Signature" => $this->input->post('Dkim-Signature'),
				"subject" => $this->input->post('Subject'),
				"X-Received" => $this->input->post('X-Received'),
				"Date" => $this->input->post('Date'),
				"Message-Id" => $this->input->post('Message-Id'),
				"Mime-Version" => $this->input->post('Mime-Version'),
				"Received" => $this->input->post('Received'),
				"message-url" => $this->input->post('message-url'),
				"recipient" => $this->input->post('recipient'),
				"sender" => $this->input->post('sender'),
				"X-Mailgun-Incoming" => $this->input->post('X-Mailgun-Incoming'),
				"X-Gm-Message-State" => $this->input->post('X-Gm-Message-State'),
				"Content-Type" => $this->input->post('Content-Type'),
				"X-Google-Smtp-Source" => $this->input->post('X-Google-Smtp-Source'),
				"message-headers" => $this->input->post('message-headers'),
				"body-plain" => $this->input->post('body-plain'),
				"body-html" => $this->input->post('body-html'),
				"stripped-html" => $this->input->post('stripped-html'),
				"stripped-text" => $this->input->post('stripped-text'),
				"stripped-signature" => $this->input->post('stripped-signature'),
				"attachments" => $this->input->post('attachments'),
				"References" => $this->input->post('References'),
				"In-Reply-To" => $this->input->post('In-Reply-To'),
				"status" => 1
			);
			$this->db->insert('mail',$data);
			return $this->db->insert_id();
		}
		
		public function get_attachments()
		{
			if(!is_null($this->input->post('attachments')))
			{
				$attachments = $this->input->post('attachments');
				$attachments = json_decode($attachments);
				return $attachments;
			}
			return null;
		}

		public function get_attachments_db($id)
		{
			$this->db->where('mail_id',$id);
			$query = $this->db->get('mail');
			$query = $query->row_array();
			$attachments = $query['attachments'];
			$attachments = json_decode($attachments);
			return $attachments;
		}

		public function mailbox($limit=10,$start=0,$status=0){
			$this->db->order_by('mail_id','DESC');
			if($status == 0)
			{
				$this->db->where('status',0);
				$this->db->or_where('status',1);
			}else
			{
				$this->db->where('status',$status);
			}
	        $this->db->limit($limit, $start);
			$query = $this->db->get('mail');
			return $query->result_array();	
		}
		
		public function view($id){
			$data = array('status' => 0);
			$this->db->where('mail_id',$id)->update('mail',$data);					
			$this->db->where('mail_id',$id);
			$query = $this->db->get('mail');
			return $query->row_array();			
		}

		public function deletemail($id){
			$data = array('status' => -1);
			$this->db->where('mail_id',$id)->update('mail',$data);
		}

		public function deletemailpermanent($id){
			$this->db->where('mail_id',$id)->delete('mail');
		}

		public function record_count($status) {
			if($status == 0){
				$this->db->select('*');
				$this->db->from('mail');
				$this->db->where('status',0);
				$this->db->or_where('status',1);
				return $this->db->count_all_results();
			}else
			{
				return $this->db->where('status',$status)->count_all_results("mail");
			}
		}


	}