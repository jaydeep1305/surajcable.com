<?php
	class Gjcatalog extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Catalog_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'Your Catalogs';

			$data['catalogs'] = $this->Catalog_model->get_catalog();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/catalog/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function view($catalog_id = NULL){
			
			$data['catalog'] = $this->Catalog_model->get_catalog($catalog_id);
			
			if(empty($data['catalog'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/catalog/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create catalog ----------
		public function create(){

			$data['title'] = "Create catalog";

			//-------------------------------------------------------------------------------------------------------

			$this->form_validation->set_rules('catalog_title', 'catalog Title', 'required');
			$this->form_validation->set_rules('catalog_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/catalog/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				//Upload Image 
				$config = $this->greatjoin->upload_catalog_config('assets/catalog/');
				$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
	            $catalog_file =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['catalog_title']."_".random_string('alnum', 10).".".$ext);
	            $_FILES['userfile']['name'] = $catalog_file;					
				
				$this->load->library('upload',$config);

				if(!$this->upload->do_upload('userfile')){
					$errors = array('error'=>$this->upload->display_errors());
				}else{
					$data = array('upload_data' => $this->upload->data());
				}

				$this->Catalog_model->create_catalog($catalog_file);
				redirect('gjcatalog');
			}
		}
		
		public function edit($catalog_id){
			
			$data['title'] = "Edit Catalog";
			
			$data['catalog'] = $this->Catalog_model->get_catalog($catalog_id);
			
			$data['catalog_title'] = $data['catalog']['catalog_title'];
			$data['catalog_description'] = $data['catalog']['catalog_description'];
			$data['catalog_file'] = $data['catalog']['catalog'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/catalog/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
				if($_FILES['userfile']['name'] != "")
				{
					//Upload Updated File 
					$config = $this->greatjoin->upload_catalog_config('assets/catalog/');
					$ext = pathinfo( $_FILES['userfile']['name'], PATHINFO_EXTENSION);
		            $catalog_file =  preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['catalog_title']."_".random_string('alnum', 10).".".$ext);
		            $_FILES['userfile']['name'] = $catalog_file;					

					$this->load->library('upload',$config);

					if(!$this->upload->do_upload('userfile')){
						$errors = array('error'=>$this->upload->display_errors());
					}else{
						$data = array('upload_data' => $this->upload->data());
					}
				}
				else
				{
					//No need to upload FIle just take file name from hidden field and store in DB
					$catalog_file = $this->input->post('catalog_file');
				}
				
				$this->Catalog_model->update_catalog($catalog_file);
				redirect('gjcatalog');
			
		}

		public function delete($id){
			$this->Catalog_model->delete_catalog($id);
			redirect('gjcatalog');
		}
	} 
?>