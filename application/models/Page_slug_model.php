<?php 
	class Page_slug_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_page_slug($page_slug="")
		{
			if($page_slug == "")
			{
				$query = $this->db->get('page_slug');
				return $query->result_array();						
			}
			$this->db->where('page_slug',$page_slug);
			$query = $this->db->get('page_slug');
			return $query->row_array();		
		}

		public function get_page_name($page_slug_id)
		{
			$this->db->where('page_slug_id',$page_slug_id);
			$query = $this->db->get('page_slug');
			return $query->row_array();		
		}

		public function get_page_slug_id($page_slug)
		{
			$this->db->where('page_slug',$page_slug);
			$query = $this->db->get('page_slug');
			return $query->row_array();		
		}
		
		public function create_slug($page_slug)
		{
			$data = array(
				'page_slug' => $page_slug
			);
			return $this->db->insert('page_slug',$data); 
		}

		public function generateslug()
		{
			/*-----Make all slug list-----*/
			// Product Slug List
			$this->load->model('Product_model');
			$products = $this->Product_model->get_product();
			
			foreach($products as $product)
			{
				if(!empty($product['product_slug']))
				{
					$product_slug = "product/".$product['product_slug'];
                    $product_slug = substr($product_slug,0,50);
					$check_already_product = $this->get_page_slug($product_slug);
					if(empty($check_already_product))
					{
						$this->create_slug($product_slug);
					}
				}
			}
			// Category Slug List
			$this->load->model('Category_model');
			$categories = $this->Category_model->get_category();
			
			foreach($categories as $category)
			{
				if(!empty($category['cat_slug']))
				{
					$category_slug = "category/".$category['cat_slug'];
                    $category_slug = substr($category_slug,0,50);
					$check_already_category = $this->get_page_slug($category_slug);
					if(empty($check_already_category))
					{
						$this->create_slug($category_slug);
					}
				}
			}			

			// Blog Post Slug List
			$this->load->model('Blog_post_model');
			$blog_posts = $this->Blog_post_model->get_blog_post();

			foreach($blog_posts as $bp)
			{
				if(!empty($bp['blog_post_slug']))
				{
                    $blog_post_slug = "blog/".$bp['blog_post_slug'];
                    $blog_post_slug = substr($blog_post_slug,0,50);

					$check_already_blog_post = $this->get_page_slug($blog_post_slug);
					if(empty($check_already_blog_post))
					{
					    $this->create_slug($blog_post_slug);
					}
				}
			}			

			// Blog Tag Slug List
			$this->load->model('Blog_tag_model');
			$blog_tags = $this->Blog_tag_model->get_blog_tag();
			
			foreach($blog_tags as $bt)
			{
				if(!empty($bt['blog_tag_slug']))
				{
					$blog_tag_slug = "blog/tag/".$bt['blog_tag_slug'];
                    $blog_tag_slug = substr($blog_tag_slug,0,50);
					$check_already_blog_tag = $this->get_page_slug($blog_tag_slug);
					if(empty($check_already_blog_tag))
					{
						$this->create_slug($blog_tag_slug);
					}
				}
			}			

			// Blog Cat Slug List
			$this->load->model('Blog_category_model');
			$blog_cats = $this->Blog_category_model->get_blog_category();
			
			foreach($blog_cats as $bc)
			{
				if(!empty($bc['blog_cat_slug']))
				{
					$blog_cat_slug = "blog/category/".$bc['blog_cat_slug'];
                    $blog_cat_slug = substr($blog_cat_slug,0,50);
					$check_already_blog_cat = $this->get_page_slug($blog_cat_slug);
					if(empty($check_already_blog_cat))
					{
						$this->create_slug($blog_cat_slug);
					}
				}
			}			


		}

	}