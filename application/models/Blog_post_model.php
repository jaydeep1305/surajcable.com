<?php 
	class Blog_post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_blog_post($blog_post_id = ""){
			if($blog_post_id === ""){
				$this->db->order_by('blog_post_order', 'ASC');
				$query = $this->db->get('blog_post');
				return $query->result_array();
			}
			$this->db->where('blog_post_id',$blog_post_id);
			$query = $this->db->get('blog_post');
			return $query->row_array();			
		}

		public function get_blog_post_by_author($blog_author_id = ""){
			$this->db->where('blog_author_id',$blog_author_id);
			$this->db->order_by('blog_post_order', 'ASC');
			$query = $this->db->get('blog_post');
			return $query->result_array();	
		}
		
		public function get_blog_post_by_slug($blog_post_slug = ""){
			$this->db->where('blog_post_slug',$blog_post_slug);
			$query = $this->db->get('blog_post');
			return $query->row_array();	
		}

		public function get_blog_post_limit(){
			$this->db->order_by('blog_post_order', 'ASC');
			$this->db->limit(5);
			$query = $this->db->get('blog_post');
			return $query->result_array();
		}

		public function create_blog_post(){
			$data = array(
				'blog_post_title' => $this->input->post('blog_post_title'),
				'blog_post_slug' => $this->input->post('blog_post_slug'),
				'blog_post_date' => $this->input->post('blog_post_date'),
				'blog_post_content' => $this->input->post('blog_post_content'),
				'blog_post_short_content' => $this->input->post('blog_post_short_content'),
				'blog_post_featured_image' => $this->input->post('blog_post_featured_image'),
				'blog_post_thumbnail_image' => $this->input->post('blog_post_thumbnail_image'),
				'blog_post_order' => $this->input->post('blog_post_order'),
				'blog_author_id' => $this->input->post('blog_author_id'),
			);

			$this->db->insert('blog_post',$data);
			$blog_post_id = $this->db->insert_id();
			/*------------Blog Categories Post--------*/
			$blog_cat_ids = $this->input->post('blog_cat_ids');
			if(is_array($blog_cat_ids))
			{
				foreach($blog_cat_ids as $bci)
				{
					$this->load->model('blog_category_post_model'); 
					$return_blog_cat_posts = $this->blog_category_post_model->get_blog_category_post($blog_post_id,$bci);
					if(empty($return_blog_cat_posts))
					{
						$this->blog_category_post_model->create_blog_category_post($blog_post_id,$bci);
					}
				}
			}
			
			/*------------Blog Tags Post--------*/
			$blog_tags = $this->input->post('blog_tags');
			if(is_array($blog_tags))
			{
				foreach($blog_tags as $bts)
				{
					$this->load->model('blog_tag_post_model'); 
					$return_blog_tag_posts = $this->blog_tag_post_model->get_blog_tag_post($blog_post_id,$bts);
					if(empty($return_blog_tag_posts))
					{
						$this->blog_tag_post_model->create_blog_tag_post($blog_post_id,$bts);
					}
				}
			}
			return true;
		}

		public function edit_blog_post($blog_post_id){

			$data = array(
				'blog_post_title' => $this->input->post('blog_post_title'),
				'blog_post_slug' => $this->input->post('blog_post_slug'),
				'blog_post_content' => $this->input->post('blog_post_content'),
				'blog_post_date' => $this->input->post('blog_post_date'),
				'blog_post_short_content' => $this->input->post('blog_post_short_content'),
				'blog_post_featured_image' => $this->input->post('blog_post_featured_image'),
				'blog_post_thumbnail_image' => $this->input->post('blog_post_thumbnail_image'),
				'blog_post_order' => $this->input->post('blog_post_order'),
				'blog_author_id' => $this->input->post('blog_author_id'),
			);
			return $this->db
					->where('blog_post_id',$blog_post_id)
					->update('blog_post',$data);
		}

		public function update_blog_post(){
			$blog_post_id = $this->input->post('blog_post_id');
			$data = array(
				'blog_post_title' => $this->input->post('blog_post_title'),
				'blog_post_slug' => $this->input->post('blog_post_slug'),
				'blog_post_content' => $this->input->post('blog_post_content'),
				'blog_post_date' => $this->input->post('blog_post_date'),
				'blog_post_short_content' => $this->input->post('blog_post_short_content'),
				'blog_post_featured_image' => $this->input->post('blog_post_featured_image'),
				'blog_post_thumbnail_image' => $this->input->post('blog_post_thumbnail_image'),
				'blog_post_order' => $this->input->post('blog_post_order'),
				'blog_author_id' => $this->input->post('blog_author_id'),
			);

			/*------------Blog Categories Post--------*/
			$this->load->model('blog_category_post_model'); 
			
			$blog_cat_ids = $this->input->post('blog_cat_ids');
			if(empty($blog_cat_ids))
			{
				$blog_cat_ids = array();
			}

			$blog_old_cat_ids = array();
			$blog_category_post_model_data = $this->blog_category_post_model->get_blog_category_post_by_post($blog_post_id);
			$i=0;
			foreach($blog_category_post_model_data as $bcpmd)
			{
				$blog_old_cat_ids[$i++] = $bcpmd['blog_cat_id'];
			}
			$blog_cat_ids_diff = array_merge(array_diff($blog_cat_ids, $blog_old_cat_ids), array_diff($blog_old_cat_ids, $blog_cat_ids));
			if(is_array($blog_cat_ids_diff))
			{
				foreach($blog_cat_ids_diff as $bci)
				{
					$return_blog_cat_posts = $this->blog_category_post_model->get_blog_category_post($blog_post_id,$bci);
					if(empty($return_blog_cat_posts))
					{
						$this->blog_category_post_model->create_blog_category_post($blog_post_id,$bci);
					}
					else
					{
						$this->blog_category_post_model->remove_blog_category_post($blog_post_id,$bci);	
					}
				}
			}
			/*------------Blog Tags Post--------*/
			$this->load->model('blog_tag_post_model'); 
			$blog_tags = $this->input->post('blog_tags');
			if(empty($blog_tags))
			{
				$blog_tags = array();
			}

			$blog_old_tags = array();
			$blog_tag_post_model_data = $this->blog_tag_post_model->get_blog_tag_post_by_post($blog_post_id);
			$i=0;
			foreach($blog_tag_post_model_data as $btpmd)
			{
				$blog_old_tags[$i++] = $btpmd['blog_tag_id'];
			}
			$blog_tags_diff = array_merge(array_diff($blog_tags, $blog_old_tags), array_diff($blog_old_tags, $blog_tags));;
			if(is_array($blog_tags_diff))
			{
				foreach($blog_tags_diff as $bts)
				{
					$return_blog_tag_posts = $this->blog_tag_post_model->get_blog_tag_post($blog_post_id,$bts);
					if(empty($return_blog_tag_posts))
					{
						$this->blog_tag_post_model->create_blog_tag_post($blog_post_id,$bts);
					}
					else
					{
						$this->blog_tag_post_model->remove_blog_tag_post($blog_post_id,$bts);
					}
				}
			}

			$this->db->where('blog_post_id',$blog_post_id);
			return $this->db->update('blog_post',$data);
		}
		
		public function delete_blog_post($blog_post_id){
			$this->db->where('blog_post_id',$blog_post_id);
			$this->db->delete('blog_post');
		}

	}