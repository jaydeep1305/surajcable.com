<?php
	class Usersubscriber extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			
			$this->load->model('subscriber_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		
		//-------- Create subscriber at Client Side // Contact Page ----------
		public function create(){
			$data['title'] = "Subscription";
			$this->subscriber_model->create_subscriber();			
		}
	} 
?>