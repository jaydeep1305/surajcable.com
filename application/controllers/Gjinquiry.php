<?php
	class Gjinquiry extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('inquiry_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'List of Inquiries';

			$data['inquiry'] = $this->inquiry_model->get_inquiry();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/inquiry/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler inquiry using SLUG (url) "SINGLE inquiry VIEW" ------------------
		public function view($id){
			
			
			$data['inquiry'] = $this->inquiry_model->get_inquiry($id);
			if(empty($data['inquiry'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/inquiry/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create inquiry at Client Side // Contact Page ----------
		public function create(){

			$data['title'] = "Create Inquiry";

			$this->form_validation->set_rules('your-name', 'Your Name', 'required');
			$this->form_validation->set_rules('your-email', 'Your Email', 'required');
			$this->form_validation->set_rules('your-subject', 'Your Subject', 'required');
			$this->form_validation->set_rules('your-inquiry', 'Your Inquiry', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/contact', $data);
				$this->load->view('templates/footer');
				
			} 
			else{
				$this->inquiry_model->create_inquiry();
				$this->load->view('templates/header');
				$this->load->view('pages/sweet_alert', $data);
				$this->load->view('templates/footer');
				// Popup Display for message sended successfully.
			}
		}

		public function delete($id){
			$this->inquiry_model->delete_inquiry($id);
			redirect('gjinquiry');
		}
	} 
?>