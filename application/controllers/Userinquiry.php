<?php
	class Userinquiry extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			
			$this->load->model('Inquiry_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		
		//-------- Create inquiry at Client Side // Contact Page ----------
		public function create(){

			$data['title'] = "Create Inquiry";
			$this->Inquiry_model->create_inquiry();
		}
	} 
?>