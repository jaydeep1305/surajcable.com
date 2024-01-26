<?php
	class Gjclient extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Client_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){
			$data['title'] = 'clients';
			$data['clients'] = $this->Client_model->get_client();
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/client/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function view($id){
			
			//if(empty($data['client'])){
			//	show_404();
			//}
			$data['client'] = $this->Client_model->get_client($id);
			$data['client_name'] = $data['client']['client_name'];
			$data['client_email'] = $data['client']['client_email'];
			$data['client_provider'] = $data['client']['client_provider'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/client/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create client ----------
		public function create(){

			$data['title'] = "Create client";

			$this->form_validation->set_rules('client_name', 'client Name', 'required');
			$this->form_validation->set_rules('client_email', 'client Email', 'required');
			$this->form_validation->set_rules('client_provider', 'client Provider', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/client/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Client_model->create_client();
				redirect('gjclient');
			}
		}

		public function delete($id){
			$this->Client_model->delete_client($id);
			redirect('gjclient');
		}

		public function edit($id){
			
			$data['title'] = "Edit client";

			$data['client'] = $this->Client_model->get_client($id);
			
			$data['client_name'] = $data['client']['client_name'];
			$data['client_email'] = $data['client']['client_email'];
			$data['client_provider'] = $data['client']['client_provider'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/client/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			
			$this->form_validation->set_rules('client_name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/client/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {				
				$this->Client_model->update_client();
				redirect('gjclient');
			} 
		}

	} 
?>