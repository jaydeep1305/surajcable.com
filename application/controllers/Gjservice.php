<?php
require_once("application/libraries/vendor/autoload.php");

	class Gjservice extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('service_model'); # <- add this
			$this->load->model('service_image_model'); # <- add this
			$this->load->model('category_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
		}
		public function index(){
			$data['title'] = 'Latest service';

			$service_db = $this->service_model->get_service();
			$services = array();
			$i = 0;
			foreach ($service_db as $p) {
				$services[$i]['service_id'] = $p['service_id'];
				$services[$i]['service_name'] = $p['service_name'];
				$services[$i]['service_slug'] = $p['service_slug'];
				$services[$i]['service_price'] = $p['service_price'];
				$services[$i]['service_description'] = $p['service_description'];
				$services[$i]['service_order'] = $p['service_order'];
				$services[$i]['status'] = $p['status'];
				$i++;
			}
			$data['service'] = $services;

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/service/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($service_id = NULL){
			$data['service'] = $this->service_model->get_service($service_id);
			$data['service_image'] = $this->service_image_model->get_service_image($service_id);

			if(empty($data['service'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/service/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create service ----------
		public function create(){

			$data['title'] = "Create service";

			//------------ For Select Category from dropdown we need to call get_categories(); model from service_model
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			//-------------------------------------------------------------------------------------------------------

			$this->form_validation->set_rules('service_name', 'service Name', 'required');
			$this->form_validation->set_rules('service_slug', 'service Name', 'required');
			$this->form_validation->set_rules('service_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/service/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$service_id = $this->service_model->create_service();
				redirect('gjservice/edit/'.$service_id);
			}
		}
		
		public function edit($service_id){
			
			$data['title'] = "Edit service";
			
			$data['service'] = $this->service_model->get_service($service_id);
			
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			$data['service_name'] = $data['service']['service_name'];
			$data['service_description'] = $data['service']['service_description'];
			$data['service_slug'] = $data['service']['service_slug'];
			$data['service_price'] = $data['service']['service_price'];
			$data['service_image'] = $this->service_image_model->get_service_image($service_id);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/service/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
			$this->form_validation->set_rules('service_name', 'Name', 'required');
			$this->form_validation->set_rules('service_slug', 'Name', 'required');
			$this->form_validation->set_rules('service_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$data['title'] = "Edit service";
				$service_id = $this->input->post('service_id');
				$data['service'] = $this->service_model->get_service($service_id);
				$data['categories'] = $this->service_model->get_categories();
				
				$data['service_name'] = $this->input->post('service_name');
				$data['service_description'] = $this->input->post('service_description');
				$data['service_slug'] = $this->input->post('service_slug');
				$data['service_image'] = $this->service_image_model->get_service_image($service_id);
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/service/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->service_model->update_service();
				redirect('gjservice/view/'.$this->input->post('service_id'));
			} 
		}

		public function delete($id){
			$this->service_model->delete_service($id);
			redirect('gjservice');
		}

		public function serviceimage(){
			$config = $this->greatjoin->upload_image_config('assets/images/service');

			$_FILES['filex'] = $_FILES['file'];
			$ext = pathinfo( $_FILES['filex']['name'], PATHINFO_EXTENSION);
            $_FILES['filex']['name'] = preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['service_name']."_".random_string('alnum', 10).".".$ext);

            $service_id = $_POST['service_id'];
            $service_image_name = $_FILES['filex']['name'];

			$this->load->library('upload', $config);
			if($this->upload->do_upload('filex'))
			{
				$this->service_image_model->create_service_image($service_id,$service_image_name);
		        $uploadedImage = $this->upload->data();
		        //$this->resizeImage($uploadedImage['file_name']);
		     	$this->compressImage($uploadedImage['file_name']);
			}
		}
		
		public function compressImage($filename)
		{
			$compress1 = FCPATH.'assets/images/service/compress1/'. $filename;
			$tinyfy = \Tinify\setKey("BRuQieRW3MuSmz7hGSkXXOH7msN23Vn8");
			
			$source = \Tinify\fromFile(FCPATH.'assets/images/service/'. $filename);
			$source->toFile($compress1);

			$new_file = pathinfo($compress1, PATHINFO_FILENAME).".webp";
			$source_path = FCPATH.'assets/images/service/'. $filename;
			$target_path = FCPATH.'assets/images/service/compress/'. $new_file;
			echo shell_exec("cwebp -q 80 $source_path -o $target_path");
		}

		public function resizeImage($filename)
	   	{
			$source_path = FCPATH.'assets/images/service/'. $filename;
			$target_path = FCPATH.'assets/images/service/thumbnail/';
			$config_manip = array(
				'image_library' => 'gd2',
				'source_image' => $source_path,
				'new_image' => $target_path,
				'maintain_ratio' => TRUE,
				'create_thumb' => TRUE,
				'thumb_marker' => '',
				'width' => 150,
				'height' => 150
			);
			$this->load->library('image_lib', $config_manip);
				if (!$this->image_lib->resize()) {
				echo $this->image_lib->display_errors();
			}
	      $this->image_lib->clear();
	    }

		public function deleteserviceimage($id){
			$service_image_model = $this->service_image_model->get_service_id($id);
			$this->service_image_model->delete_service_image($id);
			redirect('gjservice/edit/'.$service_image_model['service_id']);
		}
		public function serviceimageorder(){
			$id = "";
			foreach($_POST['service_image_order'] as $service_image_id=>$service_image_order)
			{
				$this->service_image_model->service_image_order($service_image_id,$service_image_order);
				$id = $service_image_id;
			}
			$service_image_model = $this->service_image_model->get_service_id($id);
			redirect('gjservice/edit/'.$service_image_model['service_id']);
		}
		public function order(){
			$this->service_model->order();
			redirect('gjservice');
		}

		public function change_status(){
			$this->service_model->change_status();
		}

	} 
?>