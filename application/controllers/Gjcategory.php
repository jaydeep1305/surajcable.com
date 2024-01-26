<?php
	class Gjcategory extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('category_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'List of Categories';

			$cat_tree = $this->category_model->get_category_tree();
			$data['category'] = $this->category_model->buildTree($cat_tree);


			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/category/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler category using SLUG (url) "SINGLE category VIEW" ------------------
		public function view($cat_id){
			
			//if(empty($data['category'])){
			//	show_404();
			//}
			$data['category'] = $this->category_model->get_category($cat_id);
			$data['cat_name'] = $data['category']['cat_id'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/category/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create category ----------
		public function create(){

			$data['title'] = "Create category";

			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);

			$this->form_validation->set_rules('cat_name', 'Name', 'required');
			$this->form_validation->set_rules('cat_slug', 'Cat Slug', 'required');
			$this->form_validation->set_rules('parent_cat_id', 'Parent Category', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/category/create', $data);
				$this->load->view('admin/templates/footer');				
			} 
			else{
				$cat_id = $this->category_model->create_category();
				redirect('gjcategory/view/'.$cat_id);
			}
		}

		public function delete($cat_id){
			$this->category_model->delete_category($cat_id);
			redirect('gjcategory');
		}

		public function edit($cat_id){

			$data['category'] = $this->category_model->get_category($cat_id);

			if(empty($data['category'])){
				show_404();
			}

			$data['title'] = 'Edit category';
			
			$cat_tree = $this->category_model->get_category_tree();
			$data['cat_tree'] = $this->category_model->buildTree($cat_tree);
			$data['cat_parent'] = $this->category_model->get_parent($cat_id);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/category/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			$this->category_model->update_category();
			redirect('gjcategory/view/'.$this->input->post('cat_id'));
		}

		public function order(){
			$this->category_model->order();
			redirect('gjcategory');
		}

	} 
?>