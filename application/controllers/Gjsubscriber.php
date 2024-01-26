<?php
	class Gjsubscriber extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('subscriber_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'Your Subscribers';

			$data['subscriber'] = $this->subscriber_model->get_subscriber();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/subscriber/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler subscriber using SLUG (url) "SINGLE subscriber VIEW" ------------------

		public function delete($id){
			$this->subscriber_model->delete_subscriber($id);
			redirect('gjsubscriber');
		}
	} 
?>