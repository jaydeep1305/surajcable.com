<?php
	class Gjblogtag extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Blog_tag_model'); # <- add this
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->helper('file');
		}

		public function index(){
			$data['title'] = 'Blog Tags';

			$data['blog_tags'] = $this->Blog_tag_model->get_blog_tag();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_tag/index', $data);
			$this->load->view('admin/templates/footer');
		}
		
		public function view($id){
			
			$data['blog_tag'] = $this->Blog_tag_model->get_blog_tag($id);
			
			if(empty($data['blog_tag'])){
				show_404();
			}
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_tag/view', $data);
			$this->load->view('admin/templates/footer');
		}

		//-------- Create Blog_tag ----------
		public function create(){

			$data['title'] = "Create Blog Tag";

			$this->form_validation->set_rules('tag_lists', 'TagLists', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/blog_tag/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$this->Blog_tag_model->create_blog_tag();
				redirect('gjblogtag');
			}
		}
		
		public function edit($blog_tag_id){

			$data['blog_tag'] = $this->Blog_tag_model->get_blog_tag($blog_tag_id);

			if(empty($data['blog_tag'])){
				show_404();
			}

			$data['title'] = $data['blog_tag']['blog_tag_name'];
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/blog_tag/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		public function update(){
			$this->Blog_tag_model->update_blog_tag();
			redirect('gjblogtag/view/'.$this->input->post('blog_tag_id'));
		}

		public function delete($blog_tag_id){
			$this->Blog_tag_model->delete_blog_tag($blog_tag_id);
			redirect('gjblogtag');
		}

	} 
?>