<?php
require_once("application/libraries/vendor/autoload.php");

	class Gjpackage extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('package_model'); # <- add this
			$this->load->model('package_image_model'); # <- add this
			$this->load->model('category_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
		}
		public function index(){
			$data['title'] = 'Latest package';

			$package_db = $this->package_model->get_package();
			$packages = array();
			$i = 0;
			foreach ($package_db as $p) {
				$packages[$i]['package_id'] = $p['package_id'];
				$packages[$i]['package_name'] = $p['package_name'];
				$packages[$i]['package_slug'] = $p['package_slug'];
				$packages[$i]['package_price'] = $p['package_price'];
				$packages[$i]['package_description'] = $p['package_description'];
				$packages[$i]['package_order'] = $p['package_order'];
				$packages[$i]['status'] = $p['status'];
				$i++;
			}
			$data['package'] = $packages;

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/package/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($package_id = NULL){
			$data['package'] = $this->package_model->get_package($package_id);
			$data['package_image'] = $this->package_image_model->get_package_image($package_id);

			if(empty($data['package'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/package/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create package ----------
		public function create(){

			$data['title'] = "Create package";

			//------------ For Select Category from dropdown we need to call get_categories(); model from package_model
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			//-------------------------------------------------------------------------------------------------------

			$this->form_validation->set_rules('package_name', 'package Name', 'required');
			$this->form_validation->set_rules('package_slug', 'package Name', 'required');
			$this->form_validation->set_rules('package_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/package/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$package_id = $this->package_model->create_package();
				redirect('gjpackage/edit/'.$package_id);
			}
		}
		
		public function edit($package_id){
			
			$data['title'] = "Edit package";
			
			$data['package'] = $this->package_model->get_package($package_id);
			
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			$data['package_name'] = $data['package']['package_name'];
			$data['package_description'] = $data['package']['package_description'];
			$data['package_slug'] = $data['package']['package_slug'];
			$data['package_price'] = $data['package']['package_price'];
			$data['package_image'] = $this->package_image_model->get_package_image($package_id);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/package/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
			$this->form_validation->set_rules('package_name', 'Name', 'required');
			$this->form_validation->set_rules('package_slug', 'Name', 'required');
			$this->form_validation->set_rules('package_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$data['title'] = "Edit package";
				$package_id = $this->input->post('package_id');
				$data['package'] = $this->package_model->get_package($package_id);
				$data['categories'] = $this->package_model->get_categories();
				
				$data['package_name'] = $this->input->post('package_name');
				$data['package_description'] = $this->input->post('package_description');
				$data['package_slug'] = $this->input->post('package_slug');
				$data['package_image'] = $this->package_image_model->get_package_image($package_id);
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/package/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->package_model->update_package();
				redirect('gjpackage/view/'.$this->input->post('package_id'));
			} 
		}

		public function delete($id){
			$this->package_model->delete_package($id);
			redirect('gjpackage');
		}

		public function packageimage(){
			$config = $this->greatjoin->upload_image_config('assets/images/package');

			$_FILES['filex'] = $_FILES['file'];
			$ext = pathinfo( $_FILES['filex']['name'], PATHINFO_EXTENSION);
            $_FILES['filex']['name'] = preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['package_name']."_".random_string('alnum', 10).".".$ext);

            $package_id = $_POST['package_id'];
            $package_image_name = $_FILES['filex']['name'];

			$this->load->library('upload', $config);
			if($this->upload->do_upload('filex'))
			{
				$this->package_image_model->create_package_image($package_id,$package_image_name);
		        $uploadedImage = $this->upload->data();
		        //$this->resizeImage($uploadedImage['file_name']);
		     	$this->compressImage($uploadedImage['file_name']);
			}
		}
		
		public function compressImage($filename)
		{
			$compress1 = FCPATH.'assets/images/package/compress1/'. $filename;
			$tinyfy = \Tinify\setKey("BRuQieRW3MuSmz7hGSkXXOH7msN23Vn8");
			
			$source = \Tinify\fromFile(FCPATH.'assets/images/package/'. $filename);
			$source->toFile($compress1);

			$new_file = pathinfo($compress1, PATHINFO_FILENAME).".webp";
			$source_path = FCPATH.'assets/images/package/'. $filename;
			$target_path = FCPATH.'assets/images/package/compress/'. $new_file;
			echo shell_exec("cwebp -q 80 $source_path -o $target_path");
		}

		public function resizeImage($filename)
	   	{
			$source_path = FCPATH.'assets/images/package/'. $filename;
			$target_path = FCPATH.'assets/images/package/thumbnail/';
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

		public function deletepackageimage($id){
			$package_image_model = $this->package_image_model->get_package_id($id);
			$this->package_image_model->delete_package_image($id);
			redirect('gjpackage/edit/'.$package_image_model['package_id']);
		}
		public function packageimageorder(){
			$id = "";
			foreach($_POST['package_image_order'] as $package_image_id=>$package_image_order)
			{
				$this->package_image_model->package_image_order($package_image_id,$package_image_order);
				$id = $package_image_id;
			}
			$package_image_model = $this->package_image_model->get_package_id($id);
			redirect('gjpackage/edit/'.$package_image_model['package_id']);
		}
		public function order(){
			$this->package_model->order();
			redirect('gjpackage');
		}

		public function change_status(){
			$this->package_model->change_status();
		}

	} 
?>