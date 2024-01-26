<?php
	class Gjblogpost extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Blog_post_model'); # <- add this
			$this->load->model('blog_category_model'); # <- add this
			$this->load->model('Blog_author_model'); # <- add this
			$this->load->model('Blog_tag_model'); # <- add this
			$this->load->model('Blog_category_post_model'); # <- add this
			$this->load->model('Blog_tag_post_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->helper('file');
		}

		public function index(){
			$data['title'] = 'Blog Posts';

			$data['blog_posts'] = $this->Blog_post_model->get_blog_post();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_post/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($id){
			
			$data['blog_post'] = $this->Blog_post_model->get_blog_post($id);
			
			if(empty($data['blog_post'])){
				show_404();
			}
			
			$data['blog_author'] = $this->Blog_author_model->get_blog_author($data['blog_post']['blog_author_id']);
			
			$blog_category_post = $this->Blog_category_post_model->get_blog_category_post_by_post($id);
			$blog_categories = array();
			$i=0;
			if(!empty($blog_category_post))
			{
				foreach($blog_category_post as $bcp)
				{
					$blog_category_data = $this->blog_category_model->get_blog_category($bcp['blog_cat_id']);
					if(!empty($blog_category_data))
					{
						$blog_categories[$i++] = $blog_category_data['blog_cat_name'];
					}
				}				
			}
			$data['blog_categories'] = $blog_categories;

			$blog_tag_post = $this->Blog_tag_post_model->get_blog_tag_post_by_post($id);
			$blog_tags = array();
			$i=0;
			if(!empty($blog_tag_post))
			{
				foreach($blog_tag_post as $btp)
				{
					$blog_tag_data = $this->Blog_tag_model->get_blog_tag($btp['blog_tag_id']);
					if(!empty($blog_tag_data))
					{
						$blog_tags[$i++] = $blog_tag_data['blog_tag_name'];
					}
				}				
			}
			$data['blog_tags'] = $blog_tags;

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_post/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create Blog_post ----------
		public function create(){

			$data['title'] = "Create Blog Post";

			$this->form_validation->set_rules('blog_post_title', 'Title', 'required');
			$this->form_validation->set_rules('blog_post_slug', 'Slug', 'required');
			$this->form_validation->set_rules('blog_post_date', 'Slug', 'required');
			$this->form_validation->set_rules('blog_post_content', 'Content', 'required');
			$this->form_validation->set_rules('blog_post_short_content', 'Short Content', 'required');
			$this->form_validation->set_rules('blog_post_featured_image', 'Featured Image Url', 'required');
			$this->form_validation->set_rules('blog_author_id', 'Blog Author', 'required');

			$blog_cat_tree = $this->blog_category_model->get_blog_category_tree();
			$data['blog_cat_tree'] = $this->blog_category_model->buildTree($blog_cat_tree);
			$data['blog_authors'] = $this->Blog_author_model->get_blog_author();
			$data['blog_tags'] = $this->Blog_tag_model->get_blog_tag();

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/blog_post/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Blog_post_model->create_blog_post();
				redirect('gjblogpost');
			}
		}
		
		public function edit($blog_post_id){

			$data['blog_post'] = $this->Blog_post_model->get_blog_post($blog_post_id);

			if(empty($data['blog_post'])){
				show_404();
			}
			$data['title'] = "Edit Blog Post";

			$this->form_validation->set_rules('blog_post_title', 'Title', 'required');
			$this->form_validation->set_rules('blog_post_slug', 'Slug', 'required');
			$this->form_validation->set_rules('blog_post_date', 'Slug', 'required');
			$this->form_validation->set_rules('blog_post_content', 'Content', 'required');
			$this->form_validation->set_rules('blog_post_short_content', 'Short Content', 'required');
			$this->form_validation->set_rules('blog_post_featured_image', 'Featured Image Url', 'required');
			$this->form_validation->set_rules('blog_author_id', 'Blog Author', 'required');

			$blog_cat_tree = $this->blog_category_model->get_blog_category_tree();
			$data['blog_cat_tree'] = $this->blog_category_model->buildTree($blog_cat_tree);
			$data['blog_authors'] = $this->Blog_author_model->get_blog_author();
			$data['blog_tags'] = $this->Blog_tag_model->get_blog_tag();

			$blog_category_post = $this->Blog_category_post_model->get_blog_category_post_by_post($blog_post_id);
			$blog_selected_categories = array();
			$i=0;
			if(!empty($blog_category_post))
			{
				foreach($blog_category_post as $bcp)
				{
					$blog_selected_categories[$i++] = $bcp['blog_cat_id'];
				}				
			}
			$data['blog_selected_categories'] = $blog_selected_categories;

			$blog_tag_post = $this->Blog_tag_post_model->get_blog_tag_post_by_post($blog_post_id);
			$blog_selected_tags = array();
			$i=0;
			if(!empty($blog_tag_post))
			{
				foreach($blog_tag_post as $btp)
				{
					$blog_selected_tags[$i++] = $btp['blog_tag_id'];
				}				
			}
			$data['blog_selected_tags'] = $blog_selected_tags;


			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/blog_post/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Blog_post_model->create_blog_post();
				redirect('gjblogpost');
			}
		}

		public function update(){
			$this->Blog_post_model->update_blog_post();
			redirect('gjblogpost/view/'.$this->input->post('blog_post_id'));
		}

		public function delete($blog_post_id){
			$this->Blog_post_model->delete_blog_post($blog_post_id);
			redirect('gjblogpost');
		}

	} 
?>