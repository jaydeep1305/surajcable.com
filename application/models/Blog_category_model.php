<?php 
	class Blog_category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
				
		//Admin Panel Models
		public function get_blog_category($blog_cat_id = ""){
			if($blog_cat_id === ""){
				$this->db->order_by('blog_cat_order', 'ASC');
				$query = $this->db->get('blog_category');
				return $query->result_array();
			}
			$this->db->where('blog_cat_id',$blog_cat_id);
			$query = $this->db->get('blog_category');
			return $query->row_array();			
		}
		
		public function get_blog_category_tree(){
			$this->db->order_by('blog_cat_order', 'ASC');
			$query = $this->db->get('blog_category');
			return $query->result_array();
		}
		
		public function get_blog_category_by_slug($blog_cat_slug){
			$this->db->where('blog_cat_slug',$blog_cat_slug);
			$query = $this->db->get('blog_category');
			return $query->row_array();		
		}

		public function create_blog_category(){
			$data = array(
							'blog_cat_name' => $this->input->post('blog_cat_name'),
							'blog_cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('blog_cat_slug'))),
							'blog_parent_cat_id' =>  $this->input->post('blog_parent_cat_id')
						);
			$this->db->insert('blog_category',$data); 
		    return $this->db->insert_id();
		}
		
		public function delete_blog_category($blog_cat_id){
			$this->db->where('blog_cat_id',$blog_cat_id);
			$this->db->delete('blog_category');
		}

		public function edit_blog_category($blog_cat_id){
			$data = array(
							'blog_cat_name' => $this->input->post('blog_cat_name'),
							'blog_cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('blog_cat_slug'))),
							'blog_parent_cat_id' =>  $this->input->post('blog_parent_cat_id')
						);
			return $this->db
					->where('blog_cat_id',$blog_cat_id)
					->update('blog_category',$data);
		}

		public function update_blog_category(){
			$blog_cat_id = $this->input->post('blog_cat_id');
			$data = array(
							'blog_cat_name' => $this->input->post('blog_cat_name'),
							'blog_cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('blog_cat_slug'))),
							'blog_parent_cat_id' =>  $this->input->post('blog_parent_cat_id')
						);
			$this->db->where('blog_cat_id',$blog_cat_id);
			return $this->db->update('blog_category',$data);
		}
		
		public function get_parent($id)
		{
			$this->db->order_by('blog_cat_order', 'ASC');
			$this->db->where('blog_cat_id',$id);
			$query = $this->db->get('blog_category');
			return $query->row_array();
		}

		public function get_child($id)
		{
			$this->db->order_by('blog_cat_order', 'ASC');
			$this->db->where('blog_parent_cat_id',$id);
			$query = $this->db->get('blog_category');
			return $query->result_array();
		}

		public function order()
		{
			foreach($this->input->post('blog_cat_id') as $blog_cat_id=>$value)
			{
				$this->db->where('blog_cat_id',$blog_cat_id);
				$data = array(
					'blog_cat_order' => $value,
				);				
				$this->db->update('blog_category',$data);
			}
			return null;
		}

		public function buildTree($items) {
			$childs = array();
	    	foreach($items as &$item) $childs[$item['blog_parent_cat_id']][] = &$item;
			    unset($item);
		    foreach($items as &$item) if (isset($childs[$item['blog_cat_id']]))
	            $item['childs'] = $childs[$item['blog_cat_id']];
		    return isset($childs[0])?$childs[0]:null;
		}
	}