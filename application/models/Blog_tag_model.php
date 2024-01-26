<?php 
	class Blog_tag_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_blog_tag($blog_tag_id = ""){
			if($blog_tag_id === ""){
				$query = $this->db->get('blog_tag');
				return $query->result_array();
			}
			$this->db->where('blog_tag_id',$blog_tag_id);
			$query = $this->db->get('blog_tag');
			return $query->row_array();	
		}
		
		public function get_blog_tag_random(){
			$this->db->order_by('rand()');
			$query = $this->db->get('blog_tag');
			return $query->result_array();
		}
		
		public function get_blog_tag_by_slug($blog_tag_slug){
			$this->db->where('blog_tag_slug',$blog_tag_slug);
			$query = $this->db->get('blog_tag');
			return $query->row_array();	
		}

		public function create_blog_tag(){
			$tag_lists = explode("\n",$this->input->post('tag_lists'));
			foreach($tag_lists as $tl)
			{
				$data = array(
					'blog_tag_name' => $tl,
					'blog_tag_slug' => trim(preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($tl)),"-")
				);				
				$insert_query = $this->db->insert_string('blog_tag', $data);
				$insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
				$this->db->query($insert_query);
			}
		}

		public function edit_blog_tag($blog_tag_id){
			$data = array(
				'blog_tag_name' => $this->input->post('blog_tag_name'),
				'blog_tag_slug' => $this->input->post('blog_tag_slug')
			);
			return $this->db
					->where('blog_tag_id',$blog_tag_id)
					->update('blog_tag',$data);
		}

		public function update_blog_tag(){
			$blog_tag_id = $this->input->post('blog_tag_id');
			$data = array(
				'blog_tag_name' => $this->input->post('blog_tag_name'),
				'blog_tag_slug' => $this->input->post('blog_tag_slug')
			);
			$this->db->where('blog_tag_id',$blog_tag_id);
			return $this->db->update('blog_tag',$data);
		}
		
		public function delete_blog_tag($blog_tag_id){
			$this->db->where('blog_tag_id',$blog_tag_id);
			$this->db->delete('blog_tag');
		}

	}