<?php
	class Gjprocess extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Process_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'Processes';

			$data['processes'] = $this->Process_model->get_process();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/process/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler process using SLUG (url) "SINGLE process VIEW" ------------------
		public function view($process_id){
			
			//if(empty($data['process'])){
			//	show_404();
			//}
			$data['process'] = $this->Process_model->get_process($process_id);
			$data['process_name'] = $data['process']['process_name'];
			$data['process_description'] = $data['process']['process_description'];
			$data['process_image'] = $data['process']['process_image'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/process/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create process ----------
		public function create(){

			$data['title'] = "Create process";

			$this->form_validation->set_rules('process_name', 'Name', 'required');
			$this->form_validation->set_rules('process_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/process/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload Image 
				$process_image = $_FILES['userfile']['name'];
				
				$config = $this->greatjoin->upload_image_config('assets/images/process/');
				$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	            $_FILES['userfile']['name'] = preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['process_name']."_".random_string('alnum', 10).".".$ext);

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
					$process_image = 'default.png';
				}else{
					$data = array('upload_data' => $this->upload->data());
					
				}

				$this->Process_model->create_process($process_image);
				redirect('gjprocess');
			}
		}

		public function delete($id){
			$this->Process_model->delete_process($id);
			redirect('gjprocess');
		}

		public function edit($process_id){

			$data['title'] = "Edit process";

			$data['process'] = $this->Process_model->get_process($process_id);
			$data['process_name'] = $data['process']['process_name'];
			$data['process_description'] = $data['process']['process_description'];
			$data['process_image'] = $data['process']['process_image'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/process/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			
			$this->form_validation->set_rules('process_name', 'Name', 'required');
			$this->form_validation->set_rules('process_description', 'Description', 'required');

				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated Image 
					$process_image = $_FILES['userfile']['name'];
					$config = $this->greatjoin->upload_image_config('assets/images/process/');
					$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	    	        $_FILES['userfile']['name'] = preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['process_name']."_".random_string('alnum', 10).".".$ext);

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
					$process_image = $this->input->post('process_image');
				}
				
				$this->Process_model->update_process($process_image);
				redirect('gjprocess');
		}

	} 
?>