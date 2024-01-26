<?php 
	class Blog_category_post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_blog_category_post($blog_post_id,$blog_cat_id){
			$this->db->where('blog_post_id',$blog_post_id);
			$this->db->where('blog_cat_id',$blog_cat_id);
			$query = $this->db->get('blog_category_post');
			return $query->result_array();		
		}

		public function get_blog_category_post_by_post($blog_post_id){
			$this->db->where('blog_post_id',$blog_post_id);
			$query = $this->db->get('blog_category_post');
			return $query->result_array();			
		}

		public function get_blog_category_post_by_cat($blog_cat_id){
			$this->db->where('blog_cat_id',$blog_cat_id);
			$query = $this->db->get('blog_category_post');
			return $query->result_array();			
		}

		public function create_blog_category_post($blog_post_id,$blog_cat_id){
			$data = array(
				'blog_cat_id' => $blog_cat_id,
				'blog_post_id' => $blog_post_id
			);
			return $this->db->insert('blog_category_post',$data); 
		}

		public function remove_blog_category_post($blog_post_id,$blog_cat_id){
			$this->db->where('blog_cat_id',$blog_cat_id);
			$this->db->where('blog_post_id',$blog_post_id);
			return $this->db->delete('blog_category_post');
		}

		public function edit_blog_category_post($blog_cat_post_id){
			$data = array(
				'blog_cat_id' => $this->input->post('blog_cat_id'),
				'blog_post_id' => $this->input->post('blog_post_id')
			);
			return $this->db
					->where('blog_cat_post_id',$blog_cat_post_id)
					->update('blog_category_post',$data);
		}
		
		public function delete_blog_category_post($blog_cat_post_id){
			$this->db->where('blog_cat_post_id',$blog_cat_post_id);
			$this->db->delete('blog_category_post');
		}
	
	}