<?php
	class Gjblogcategory extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('blog_category_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			//$this->load->library('form_validation');
			$this->load->helper('form');
		}
		public function index(){

			$data['title'] = 'List of Categories';

			$cat_tree = $this->blog_category_model->get_blog_category_tree();
			$data['blog_category'] = $this->blog_category_model->buildTree($cat_tree);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_category/index', $data);
			$this->load->view('admin/templates/footer');
		}

		//--------- View Perticuler blog_category using SLUG (url) "SINGLE blog_category VIEW" ------------------
		public function view($blog_cat_id){
			
			//if(empty($data['blog_category'])){
			//	show_404();
			//}
			$data['blog_category'] = $this->blog_category_model->get_blog_category($blog_cat_id);
			$data['blog_cat_name'] = $data['blog_category']['blog_cat_id'];
			

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_category/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create blog_category ----------
		public function create(){

			$data['title'] = "Create blog category";

			$cat_tree = $this->blog_category_model->get_blog_category_tree();
			$data['cat_tree'] = $this->blog_category_model->buildTree($cat_tree);

			$this->form_validation->set_rules('blog_cat_name', 'Name', 'required');
			$this->form_validation->set_rules('blog_cat_slug', 'Cat Slug', 'required');
			$this->form_validation->set_rules('blog_parent_cat_id', 'Parent Blog category', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/blog_category/create', $data);
				$this->load->view('admin/templates/footer');				
			} 
			else{
				$blog_cat_id = $this->blog_category_model->create_blog_category();
				redirect('gjblogcategory/view/'.$blog_cat_id);
			}
		}

		public function delete($blog_cat_id){
			$this->blog_category_model->delete_blog_category($blog_cat_id);
			redirect('gjblogcategory');
		}

		public function edit($blog_cat_id){

			$data['blog_category'] = $this->blog_category_model->get_blog_category($blog_cat_id);

			if(empty($data['blog_category'])){
				show_404();
			}

			$data['title'] = 'Edit blog_category';
			
			$cat_tree = $this->blog_category_model->get_blog_category_tree();
			$data['cat_tree'] = $this->blog_category_model->buildTree($cat_tree);
			$data['cat_parent'] = $this->blog_category_model->get_parent($blog_cat_id);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_category/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			$this->blog_category_model->update_blog_category();
			redirect('gjblogcategory/view/'.$this->input->post('blog_cat_id'));
		}

		public function order(){
			$this->blog_category_model->order();
			redirect('gjblogcategory');
		}

	} 
?>