<?php
	class Gjpartner extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Partner_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){
			$data['title'] = 'partners';
			$data['partners'] = $this->Partner_model->get_partner();
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/partner/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function view($id){
			
			//if(empty($data['partner'])){
			//	show_404();
			//}
			$data['partner'] = $this->Partner_model->get_partner($id);
			$data['partner_name'] = $data['partner']['partner_name'];
			$data['partner_logo'] = $data['partner']['partner_logo'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/partner/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create partner ----------
		public function create(){

			$data['title'] = "Create partner";

			$this->form_validation->set_rules('partner_name', 'Partner Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/partner/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload partner_logo 
				$config = $this->greatjoin->upload_image_config('assets/images/partner/');
				$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	            $partner_logo =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['partner_name']."_".random_string('alnum', 10).".".$ext);
	            $_FILES['userfile']['name'] = $partner_logo;
				
				
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
					$partner_logo = 'default.png';
				}else{
					$data = array('upload_data' => $this->upload->data());
				}
				$this->Partner_model->create_partner($partner_logo);
				redirect('gjpartner');
			}
		}

		public function delete($id){
			$this->Partner_model->delete_partner($id);
			redirect('gjpartner');
		}

		public function edit($id){
			
			$data['title'] = "Edit partner";

			$data['partner'] = $this->Partner_model->get_partner($id);
			
			$data['partner_name'] = $data['partner']['partner_name'];
			$data['partner_logo'] = $data['partner']['partner_logo'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/partner/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			
			$this->form_validation->set_rules('partner_name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/partner/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated partner_logo 
					$config = $this->greatjoin->upload_image_config('assets/images/partner/');
					$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
		            $partner_logo =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['partner_name']."_".random_string('alnum', 10).".".$ext);
		            $_FILES['userfile']['name'] = $partner_logo;
					
					$this->load->library('upload',$config);					 

					if(!$this->upload->do_upload('userfile')){
						$errors = array('error'=>$this->upload->display_errors());
						$process_partner_logo = 'default.png';
					}else{
						$data = array('upload_data' => $this->upload->data());
					}
				}
				else
				{
					//No need to upload partner_logo just take partner_logo name from hidden field and store in DB
					$partner_logo = $this->input->post('partner_logo');
				}
				
				$this->Partner_model->update_partner($partner_logo);
				redirect('gjpartner');
			} 
		}
		public function order(){
			$this->Partner_model->order();
			redirect('gjpartner');
		}
	} 
?>