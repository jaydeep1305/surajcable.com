<?php 
	class Seo_onpage_value_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create($page_slug_id,$seo_onpage_id,$value)
		{
			$where = "page_slug_id = $page_slug_id AND seo_onpage_id = $seo_onpage_id";
			$query = $this->db
				->where($where)
				->get('seo_onpage_value');
			
			if($query->num_rows()>0)
			{
				$data = array('value'=>$value);
				
				$this->db
				->where($where)
				->update('seo_onpage_value',$data);
			}
			else
			{
				$data = array(
					'seo_onpage_id' => $seo_onpage_id,
					'page_slug_id' => $page_slug_id,
					'value' => $value
				);
				$this->db->insert('seo_onpage_value',$data);
			}
			return;
		}

		public function get_seo_onpage_value($page_slug_id){
			$this->db->where('page_slug_id',$page_slug_id);
			$query = $this->db->get('seo_onpage_value');
			return $query->result_array();
		}

		public function delete($page_slug_id,$seo_onpage_id)
		{
			$where = "page_slug_id = $page_slug_id AND seo_onpage_id = $seo_onpage_id";
			$query = $this->db->where($where);
			$this->db->delete('seo_onpage_value');
		}
	}