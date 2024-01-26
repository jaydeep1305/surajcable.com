<?php
	class Gjslider extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Slider_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'Sliders';

			$data['sliders'] = $this->Slider_model->get_slider();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/slider/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler slider using SLUG (url) "SINGLE slider VIEW" ------------------
		public function view($id){
			
			//if(empty($data['slider'])){
			//	show_404();
			//}
			$data['slider'] = $this->Slider_model->get_slider($id);
			$data['title'] = $data['slider']['title'];
			$data['description'] = $data['slider']['description'];
			$data['image'] = $data['slider']['image'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/slider/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create slider ----------
		public function create(){

			$data['title'] = "Create Slider";

			$this->form_validation->set_rules('title', 'Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/slider/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload Image 
				$config = $this->greatjoin->upload_image_config('assets/images/slider/');
				$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	            $image =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['username']."_".random_string('alnum', 10).".".$ext);
	            $_FILES['userfile']['name'] = $image;

				$this->load->library('upload',$config);

				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
					print_r($errors);
					$image = 'default.png';
					die();
				}else{
					$data = array('upload_data' => $this->upload->data());
				}
				$this->Slider_model->create_slider($image);
				redirect('gjslider');
			}
		}

		public function delete($id){
			$this->Slider_model->delete_slider($id);
			redirect('gjslider');
		}

		public function edit($id){
			
			$data['title'] = "Edit Slider";

			$data['slider'] = $this->Slider_model->get_slider($id);
			
			$data['title'] = $data['slider']['title'];
			$data['description'] = $data['slider']['description'];
			$data['image'] = $data['slider']['image'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/slider/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			
			$this->form_validation->set_rules('title', 'Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/slider/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated Image 
					$config = $this->greatjoin->upload_image_config('assets/images/slider/');
					$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
		            $image =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['username']."_".random_string('alnum', 10).".".$ext);
		            $_FILES['userfile']['name'] = $image;

					$this->load->library('upload',$config);

					if(!$this->upload->do_upload('userfile')){
						$errors = array('error'=>$this->upload->display_errors());
						print_r($errors);
						die();
						$process_image = 'default.png';
					}else{
						$data = array('upload_data' => $this->upload->data());
					}
				}
				else
				{
					//No need to upload image just take image name from hidden field and store in DB
					$image = $this->input->post('image');
				}
				
				$this->Slider_model->update_slider($image);
				redirect('gjslider');
			} 
		}
		public function order(){
			$this->Slider_model->order();
			redirect('gjslider');
		}
	} 
?>