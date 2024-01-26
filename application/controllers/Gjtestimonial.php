<?php
	class Gjtestimonial extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Testimonial_model'); # <- add this
			$this->load->model('Contact_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('file');
		}

		public function index(){

			$data['title'] = 'Latest Testimonial';

			$data['testimonials'] = $this->Testimonial_model->get_testimonial();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/testimonial/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function demo(){
			$data['title'] = 'Demo Testimonial';
			$testimonial = read_file('application/libraries/testimonial.txt');
			$data['testimonial_array'] = explode("\n",$testimonial);
			
			$Contact_model = $this->Contact_model->get_contact_detail();
			$data['company_name'] = $Contact_model['company_name'];

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/testimonial/demo', $data);
			$this->load->view('admin/templates/footer');
		}

		public function view($id = NULL){
			
			$data['testimonial'] = $this->Testimonial_model->get_testimonial($id);
			
			if(empty($data['testimonial'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/testimonial/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create Testimonial ----------
		public function create(){

			$data['title'] = "Create Testimonial";

			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('testimonial', 'Feedback / Message', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/testimonial/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload Image 
				$config = $this->greatjoin->upload_image_config('assets/images/testimonial/');
				$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	            $testimonial_image =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['username']."_".random_string('alnum', 10).".".$ext);
	            $_FILES['userfile']['name'] = $testimonial_image;
								
				$this->load->library('upload',$config);

				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
					$testimonial_image = 'defaultuser.png';
				}else{
					$data = array('upload_data' => $this->upload->data());
				}

				$this->Testimonial_model->create_testimonial($testimonial_image);
				redirect('gjtestimonial');
			}
		}
		
		public function edit($id){
			
			$data['title'] = "Edit Testimonial";
			
			$data['t'] = $this->Testimonial_model->get_testimonial($id);
			
			$data['username'] = $data['t']['username'];
			$data['designation'] = $data['t']['designation'];
			$data['testimonial'] = $data['t']['testimonial'];
			$data['testimonial_image'] = $data['t']['testimonial_image'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/testimonial/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('testimonial', 'Feedback / Message', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/testimonial/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated Image 
					$config = $this->greatjoin->upload_image_config('assets/images/testimonial/');
					$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
		            $testimonial_image =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['username']."_".random_string('alnum', 10).".".$ext);
		            $_FILES['userfile']['name'] = $testimonial_image;

					$this->load->library('upload',$config);					 

					if(!$this->upload->do_upload('userfile')){
						$errors = array('error'=>$this->upload->display_errors());
						$testimonial_image = 'default.png';
					}else{
						$data = array('upload_data' => $this->upload->data());
					}
				}
				else
				{
					//No need to upload image just take image name from hidden field and store in DB
					$testimonial_image = $this->input->post('testimonial_image');
				}
				
				$this->Testimonial_model->update_Testimonial($testimonial_image);
				redirect('gjtestimonial');
			} 
		}

		public function delete($id){
			//$this->greatjoin->delete($this->Testimonial_model,$id,'gjtestimonial');
			$this->Testimonial_model->delete_Testimonial($id);
			redirect('gjtestimonial');
		}

		public function order(){
			$this->Testimonial_model->order();
			redirect('gjtestimonial');
		}

	} 
?>