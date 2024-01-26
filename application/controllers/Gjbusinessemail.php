<?php
	class Gjbusinessemail extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Business_email_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('file');
		}

		public function index(){

			$data['title'] = 'Business Email';

			$data['business_email'] = $this->Business_email_model->get_business_email();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/business_email/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function view($id = NULL){
			
			$data['business_email'] = $this->Business_email_model->get_business_email($id);
			
			if(empty($data['business_email'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/business_email/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create Testimonial ----------
		public function create(){

			$data['title'] = "Create Business Email";

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/business_email/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Business_email_model->create_business_email();
				redirect('gjbusinessemail');
			}
		}
		
		public function edit($id){
			
			$data['title'] = "Edit Business Email";
			
			$data['business_email'] = $this->Business_email_model->get_business_email($id);
			
			$data['email'] = $data['business_email']['email'];
			$data['name'] = $data['business_email']['name'];
			$data['password'] = $data['business_email']['password'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/business_email/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/business_email/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Business_email_model->update_business_email();
				redirect('gjbusinessemail');
			} 
		}

		public function delete($id){
			//$this->greatjoin->delete($this->Testimonial_model,$id,'business_email');
			$this->Business_email_model->delete_business_email($id);
			redirect('gjbusinessemail');
		}
	} 
?>