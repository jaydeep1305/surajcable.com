<?php 
	class Blog_tag_post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_blog_tag_post($blog_post_id,$blog_tag_id){
			$this->db->where('blog_post_id',$blog_post_id);
			$this->db->where('blog_tag_id',$blog_tag_id);
			$query = $this->db->get('blog_tag_post');
			return $query->result_array();		
		}

		public function get_blog_tag_post_by_post($blog_post_id){
			$this->db->where('blog_post_id',$blog_post_id);
			$query = $this->db->get('blog_tag_post');
			return $query->result_array();			
		}

		public function get_blog_tag_post_by_tag($blog_tag_id){
			$this->db->where('blog_tag_id',$blog_tag_id);
			$query = $this->db->get('blog_tag_post');
			return $query->result_array();			
		}

		public function create_blog_tag_post($blog_post_id,$blog_tag_id){
			$data = array(
				'blog_tag_id' => $blog_tag_id,
				'blog_post_id' => $blog_post_id
			);
			return $this->db->insert('blog_tag_post',$data); 
		}
		
		public function remove_blog_tag_post($blog_post_id,$blog_tag_id){
			$this->db->where('blog_tag_id',$blog_tag_id);
			$this->db->where('blog_post_id',$blog_post_id);
			$this->db->delete('blog_tag_post');
		}

		public function edit_blog_tag_post($blog_tag_post_id){
			$data = array(
				'blog_tag_id' => $this->input->post('blog_tag_id'),
				'blog_post_id' => $this->input->post('blog_post_id')
			);
			return $this->db
					->where('blog_tag_post_id',$blog_tag_post_id)
					->update('blog_tag_post',$data);
		}
		
		public function delete_blog_tag_post($blog_tag_post_id){
			$this->db->where('blog_tag_post_id',$blog_tag_post_id);
			$this->db->delete('blog_tag_post');
		}
	
	}