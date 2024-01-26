<?php
	class Gjimagegallery extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Image_gallery_model');
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
		}
		public function index(){
			$data['title'] = 'Image Gallery';

			$data['image_gallery'] = $this->Image_gallery_model->get_image();
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/image_gallery/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function upload(){
			$_FILES['filex'] = $_FILES['file'];
			$ext = pathinfo( $_FILES['filex']['name'], PATHINFO_EXTENSION);
			$image_original_name = $_FILES['filex']['name'];
            $_FILES['filex']['name'] = preg_replace("/[^0-9a-z.A-Z]+/","_",random_string('alnum', 15).".".$ext);
            $image_name = $_FILES['filex']['name'];

			$config = $this->greatjoin->upload_gallery_config('assets/images/gallery');
	      	$this->load->library('upload', $config);
			if($this->upload->do_upload('filex'))
			{
				$this->Image_gallery_model->create_image($image_name,$ext,$image_original_name);
		        $uploadedImage = $this->upload->data();
		        $this->resizeImage($uploadedImage['file_name']);
			}
		}

		public function resizeImage($filename)
	   	{
			$source_path = FCPATH.'assets/images/gallery/'. $filename;
			$target_path = FCPATH.'assets/images/gallery/thumbnail/';
			$config_manip = array(
				'image_library' => 'gd2',
				'source_image' => $source_path,
				'new_image' => $target_path,
				'maintain_ratio' => TRUE,
				'create_thumb' => TRUE,
				'thumb_marker' => '',
				'width' => 150,
				'height' => 150
			);
			$this->load->library('image_lib', $config_manip);
				if (!$this->image_lib->resize()) {
				echo $this->image_lib->display_errors();
			}
	      $this->image_lib->clear();
	    }

		public function delete($id){
			$this->Image_gallery_model->delete_image($id);
			redirect('gjimagegallery');
		}

	} 
?>