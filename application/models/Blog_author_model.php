<?php 
	class Blog_author_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_blog_author($blog_author_id = ""){
			if($blog_author_id === ""){
				$query = $this->db->get('blog_author');
				return $query->result_array();
			}
			$this->db->where('blog_author_id',$blog_author_id);
			$query = $this->db->get('blog_author');
			return $query->row_array();			
		}
		
		public function get_blog_author_by_slug($blog_author_username){
			$this->db->where('blog_author_username',$blog_author_username);
			$query = $this->db->get('blog_author');
			return $query->row_array();
		}

		public function create_blog_author(){
			$data = array(
				'blog_author_username' => $this->input->post('blog_author_username'),
				'blog_author_name' => $this->input->post('blog_author_name'),
				'blog_author_password' => $this->input->post('blog_author_password'),
				'blog_author_description' => $this->input->post('blog_author_description')
			);
			return $this->db->insert('blog_author',$data); 
		}

		public function edit_blog_author($blog_author_id){

			$data = array(
				'blog_author_username' => $this->input->post('blog_author_username'),
				'blog_author_name' => $this->input->post('blog_author_name'),
				'blog_author_password' => $this->input->post('blog_author_password'),
				'blog_author_description' => $this->input->post('blog_author_description')
			);
			return $this->db
					->where('blog_author_id',$blog_author_id)
					->update('blog_author',$data);
		}

		public function update_blog_author(){
			$blog_author_id = $this->input->post('blog_author_id');
			$data = array(
				'blog_author_username' => $this->input->post('blog_author_username'),
				'blog_author_name' => $this->input->post('blog_author_name'),
				'blog_author_password' => $this->input->post('blog_author_password'),
				'blog_author_description' => $this->input->post('blog_author_description')
			);
			$this->db->where('blog_author_id',$blog_author_id);
			return $this->db->update('blog_author',$data);
		}
		
		public function delete_blog_author($blog_author_id){
			$this->db->where('blog_author_id',$blog_author_id);
			$this->db->delete('blog_author');
		}

	}