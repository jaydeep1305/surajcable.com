<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Greatjoin {
    
    public function delete($model,$id,$redirect)
    {
		$model->delete($id);
		redirect($redirect);
    }
    public function pagination($model,$status,$base_url)
    {
    	$config["per_page"] = 10;
		$config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

    	$config["total_rows"] = $model->record_count($status);
		$config["base_url"] = base_url() . $base_url;
		return $config;
    }

    public function upload_image_config($path)
    {
    	$config = array();
		$config['upload_path']   = $path; 
		$config['allowed_types'] = 'gif|jpg|jpeg|png|webp';
		$config['max_size']      = 0;
			
		return $config;
    }
    
    public function upload_gallery_config($path)
    {
    	$config = array();
		$config['upload_path']   = $path; 
		$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc|docx|mp4|webp';
		$config['max_size']      = 0;
			
		return $config;
    }

    public function upload_catalog_config($path)
    {
    	$config = array();
		$config['upload_path']   = $path; 
		$config['allowed_types'] = 'pdf';
		$config['max_size']      = 0;
			
		return $config;
    }

}