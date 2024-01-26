<?php
	class Gjhadono_home_image extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Hadono_home_image_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'Homepage Collection Images';

			$data['hadono_home_images'] = $this->Hadono_home_image_model->get_hadono_home_image();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/hadono_home_image/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler hadono_home_image using SLUG (url) "SINGLE hadono_home_image VIEW" ------------------
		public function view($id){
			
			//if(empty($data['hadono_home_image'])){
			//	show_404();
			//}
			$data['hadono_home_image'] = $this->Hadono_home_image_model->get_hadono_home_image($id);

			$data['hadono_home_image_id'] = $data['hadono_home_image']['hadono_home_image_id'];
			$data['hadono_home_image_name'] = $data['hadono_home_image']['hadono_home_image_name'];
			$data['hadono_home_image_title'] = $data['hadono_home_image']['hadono_home_image_title'];
			$data['hadono_home_image_url'] = $data['hadono_home_image']['hadono_home_image_url'];
			$data['hadono_home_image_order'] = $data['hadono_home_image']['hadono_home_image_order'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/hadono_home_image/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create hadono_home_image ----------
		public function create(){

			$data['title'] = "Create hadono_home_image";

			$this->form_validation->set_rules('hadono_home_image_title', 'Title', 'required');
			$this->form_validation->set_rules('hadono_home_image_order', 'Order', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/hadono_home_image/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload Image 
				$image = $_FILES['userfile']['name'];
				$config['upload_path']='assets/images/home/';
				$config['allowed_types']='gif|jpg|jpeg|png';
				$config['file_name']=$image;
				$config['max_size']='0';
				
				$this->load->library('upload',$config);

				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
					print_r($errors);
					$image = 'default.png';
				}else{
					$data = array('upload_data' => $this->upload->data());
				}
				$this->Hadono_home_image_model->create_hadono_home_image($image);
				redirect('gjhadono_home_image');
			}
		}

		public function delete($id){
			$this->Hadono_home_image_model->delete_hadono_home_image($id);
			redirect('gjhadono_home_image');
		}

		public function edit($id){
			
			$data['title'] = "Edit hadono_home_image";

			$data['hadono_home_image'] = $this->Hadono_home_image_model->get_hadono_home_image($id);

			$data['hadono_home_image_id'] = $data['hadono_home_image']['hadono_home_image_id'];
			$data['hadono_home_image_name'] = $data['hadono_home_image']['hadono_home_image_name'];
			$data['hadono_home_image_title'] = $data['hadono_home_image']['hadono_home_image_title'];
			$data['hadono_home_image_url'] = $data['hadono_home_image']['hadono_home_image_url'];
			$data['hadono_home_image_order'] = $data['hadono_home_image']['hadono_home_image_order'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/hadono_home_image/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			
			$this->form_validation->set_rules('hadono_home_image_title', 'Title', 'required');
			$this->form_validation->set_rules('hadono_home_image_order', 'Order', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/hadono_home_image/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated Image 
					$image = $_FILES['userfile']['name'];
					$config['upload_path']='assets/images/home/';
					$config['allowed_types']='gif|jpg|jpeg|png';
					$config['file_name']=$image;
					$config['max_size']='0';
					
					$this->load->library('upload',$config);
					 

					if(!$this->upload->do_upload('userfile')){
						$errors = array('error'=>$this->upload->display_errors());
						$process_image = 'default.png';
					}else{
						$data = array('upload_data' => $this->upload->data());
					}
				}
				else
				{
					//No need to upload image just take image name from hidden field and store in DB
					$image = $this->input->post('hadono_home_image_name');
				}
				
				$this->Hadono_home_image_model->update_hadono_home_image($image);
				redirect('gjhadono_home_image');
			} 
		}

	} 
?>