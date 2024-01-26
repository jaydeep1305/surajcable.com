<?php
	class Gjblogauthor extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Blog_author_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->helper('file');
		}

		public function index(){
			$data['title'] = 'Blog Authors';

			$data['blog_authors'] = $this->Blog_author_model->get_blog_author();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_author/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($id){
			
			$data['blog_author'] = $this->Blog_author_model->get_blog_author($id);
			
			if(empty($data['blog_author'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_author/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create Blog_author ----------
		public function create(){

			$data['title'] = "Create Blog Author";

			$this->form_validation->set_rules('blog_author_username', 'Username', 'required');
			$this->form_validation->set_rules('blog_author_name', 'Author Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/blog_author/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Blog_author_model->create_blog_author($blog_author_image);
				redirect('gjblogauthor');
			}
		}
		
		public function edit($blog_author_id){

			$data['blog_author'] = $this->Blog_author_model->get_blog_author($blog_author_id);

			if(empty($data['blog_author'])){
				show_404();
			}

			$data['title'] = $data['blog_author']['blog_author_username'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_author/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			$this->Blog_author_model->update_blog_author();
			redirect('gjblogauthor/view/'.$this->input->post('blog_author_id'));
		}

		public function delete($blog_author_id){
			$this->Blog_author_model->delete_blog_author($blog_author_id);
			redirect('gjblogauthor');
		}

	} 
?>