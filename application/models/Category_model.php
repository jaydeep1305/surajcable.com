<?php 
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
				
		//Admin Panel Models
		public function get_category($cat_id = ""){
			if($cat_id === ""){
				$this->db->order_by('cat_order', 'ASC');
				$query = $this->db->get('category');
				return $query->result_array();
			}
			$this->db->where('cat_id',$cat_id);
			$query = $this->db->get('category');
			return $query->row_array();			
		}
		
		public function get_category_tree(){
			$this->db->order_by('cat_order', 'ASC');
			$query = $this->db->get('category');
			return $query->result_array();
		}
		
		public function get_category_by_slug($cat_slug){
			$this->db->where('cat_slug',$cat_slug);
			$query = $this->db->get('category');
			return $query->row_array();		
		}

		public function create_category(){
			$data = array(
							'cat_name' => $this->input->post('cat_name'),
							'cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('cat_slug'))),
							'parent_cat_id' =>  $this->input->post('parent_cat_id')
						);
			$this->db->insert('category',$data); 
		    return $this->db->insert_id();
		}
		
		public function delete_category($cat_id){
			$this->db->where('cat_id',$cat_id);
			$this->db->delete('category');
		}

		public function edit_category($cat_id){
			$data = array(
							'cat_name' => $this->input->post('cat_name'),
							'cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('cat_slug'))),
							'parent_cat_id' =>  $this->input->post('parent_cat_id')
						);
			return $this->db
					->where('cat_id',$cat_id)
					->update('category',$data);
		}

		public function update_category(){
			$cat_id = $this->input->post('cat_id');
			$data = array(
							'cat_name' => $this->input->post('cat_name'),
							'cat_slug' =>  preg_replace("/[^0-9a-z.A-Z]+/", "-", strtolower($this->input->post('cat_slug'))),
							'parent_cat_id' =>  $this->input->post('parent_cat_id')
						);
			$this->db->where('cat_id',$cat_id);
			return $this->db->update('category',$data);
		}
		
		public function get_parent($id="")
		{
			if($id=="")
			{
				$this->db->where('parent_cat_id',0);
				$query = $this->db->get('category');
				return $query->result_array();
			}else
			{
				$this->db->order_by('cat_order', 'ASC');
				$this->db->where('cat_id',$id);
				$query = $this->db->get('category');
				return $query->row_array();				
			}
		}

		public function get_child($id)
		{
			$this->db->order_by('cat_order', 'ASC');
			$this->db->where('parent_cat_id',$id);
			$query = $this->db->get('category');
			$array = $query->result_array();
			$array_dummy = $array;
			foreach($array_dummy as $a)
			{
				$this->db->where('parent_cat_id',$a['cat_id']);
				$query = $this->db->get('category');
				$_array = $query->result_array();
				if(!empty($_array))
				{
					foreach($_array as $_a)
					{
						array_push($array,$_a);
					}
				}
			}
			return $array;
		}

		public function order()
		{
			foreach($this->input->post('cat_id') as $cat_id=>$value)
			{
				$this->db->where('cat_id',$cat_id);
				$data = array(
					'cat_order' => $value,
				);				
				$this->db->update('category',$data);
			}
			return null;
		}

		public function buildTree($items) {
			$childs = array();
	    	foreach($items as &$item) $childs[$item['parent_cat_id']][] = &$item;
			    unset($item);
		    foreach($items as &$item) if (isset($childs[$item['cat_id']]))
	            $item['childs'] = $childs[$item['cat_id']];
		    return $childs[0];
		}
	}