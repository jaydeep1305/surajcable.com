<?php
require_once("application/libraries/vendor/autoload.php");

	class Gjproduct extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Product_model'); # <- add this
			$this->load->model('Product_image_model'); # <- add this
			$this->load->model('category_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
		}
		public function index(){
			$data['title'] = 'Latest product';

			$product_db = $this->Product_model->get_product();
			$products = array();
			$i = 0;
			foreach ($product_db as $p) {
				$products[$i]['product_id'] = $p['product_id'];
				$products[$i]['product_name'] = $p['product_name'];
				$products[$i]['cat_id'] = $p['cat_id'];
				$products[$i]['product_order'] = $p['product_order'];
				$products[$i]['cat_name'] = $this->Product_model->get_category_name($p['product_id'])['cat_name'];
				$products[$i]['status'] = $p['status'];
				$i++;
			}
			$data['product'] = $products;

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/product/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($product_id = NULL){
			$data['product'] = $this->Product_model->get_product($product_id);
			$data['product_image'] = $this->Product_image_model->get_product_image($product_id);

			if(empty($data['product'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/product/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create product ----------
		public function create(){

			$data['title'] = "Create Product";

			//------------ For Select Category from dropdown we need to call get_categories(); model from Product_model
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			//-------------------------------------------------------------------------------------------------------

			$this->form_validation->set_rules('product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('product_slug', 'Product Name', 'required');
			$this->form_validation->set_rules('product_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/product/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$product_id = $this->Product_model->create_product();
				redirect('gjproduct/edit/'.$product_id);
			}
		}
		
		public function edit($product_id){
			
			$data['title'] = "Edit Product";
			
			$data['product'] = $this->Product_model->get_product($product_id);
			$cat_id = $data['product']['cat_id'];
			
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);
			$data['cat_parent'] = $this->category_model->get_parent($cat_id);

			$data['product_name'] = $data['product']['product_name'];
			$data['product_description'] = $data['product']['product_description'];
			$data['product_slug'] = $data['product']['product_slug'];
			$data['product_image'] = $this->Product_image_model->get_product_image($product_id);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/product/edit', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function update(){
			
			$this->form_validation->set_rules('product_name', 'Name', 'required');
			$this->form_validation->set_rules('product_slug', 'Name', 'required');
			$this->form_validation->set_rules('product_description', 'Description', 'required');

			if($this->form_validation->run() === FALSE){
				$data['title'] = "Edit Product";
				$product_id = $this->input->post('product_id');
				$data['product'] = $this->Product_model->get_product($product_id);
				$data['categories'] = $this->Product_model->get_categories();
				
				$data['product_name'] = $this->input->post('product_name');
				$data['product_description'] = $this->input->post('product_description');
				$data['product_slug'] = $this->input->post('product_slug');
				$data['product_image'] = $this->Product_image_model->get_product_image($product_id);
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/product/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Product_model->update_product();
				redirect('gjproduct/view/'.$this->input->post('product_id'));
			} 
		}

		public function delete($id){
			$this->Product_model->delete_product($id);
			redirect('gjproduct');
		}

		public function productimage(){
			$config = $this->greatjoin->upload_image_config('assets/images/product');

			$_FILES['filex'] = $_FILES['file'];
			$ext = pathinfo( $_FILES['filex']['name'], PATHINFO_EXTENSION);
            $_FILES['filex']['name'] = preg_replace("/[^0-9a-z.A-Z]+/", "_", $_POST['product_name']."_".random_string('alnum', 10).".".$ext);

            $product_id = $_POST['product_id'];
            $product_image_name = $_FILES['filex']['name'];

			$this->load->library('upload', $config);
			if($this->upload->do_upload('filex'))
			{
				$this->Product_image_model->create_product_image($product_id,$product_image_name);
		        $uploadedImage = $this->upload->data();
		        //$this->resizeImage($uploadedImage['file_name']);
		     	$this->compressImage($uploadedImage['file_name']);
			}
		}
		
		public function compressImage($filename)
		{
			$compress1 = FCPATH.'assets/images/product/compress1/'. $filename;
			$tinyfy = \Tinify\setKey("BRuQieRW3MuSmz7hGSkXXOH7msN23Vn8");
			
			$source = \Tinify\fromFile(FCPATH.'assets/images/product/'. $filename);
			$source->toFile($compress1);

			$new_file = pathinfo($compress1, PATHINFO_FILENAME).".webp";
			$source_path = FCPATH.'assets/images/product/'. $filename;
			$target_path = FCPATH.'assets/images/product/compress/'. $new_file;
			echo shell_exec("cwebp -q 80 $source_path -o $target_path");
		}

		public function resizeImage($filename)
	   	{
			$source_path = FCPATH.'assets/images/product/'. $filename;
			$target_path = FCPATH.'assets/images/product/thumbnail/';
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

		public function deleteproductimage($id){
			$Product_image_model = $this->Product_image_model->get_product_id($id);
			$this->Product_image_model->delete_product_image($id);
			redirect('gjproduct/edit/'.$Product_image_model['product_id']);
		}
		public function productimageorder(){
			$id = "";
			foreach($_POST['product_image_order'] as $product_image_id=>$product_image_order)
			{
				$this->Product_image_model->product_image_order($product_image_id,$product_image_order);
				$id = $product_image_id;
			}
			$Product_image_model = $this->Product_image_model->get_product_id($id);
			redirect('gjproduct/edit/'.$Product_image_model['product_id']);
		}
		public function order(){
			$this->Product_model->order();
			redirect('gjproduct');
		}

		public function change_status(){
			$this->Product_model->change_status();
		}

	} 
?>