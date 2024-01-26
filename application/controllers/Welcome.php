<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		https://example.com/index.php/welcome
	 *	- or -
	 * 		https://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at https://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	*/
	 
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Contact_model'); 
		$this->load->model('Catalog_model');
		$this->load->model('Setting_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Package_model');
		$this->load->model('Service_model');
		
		$this->load->model('Process_model');
		
		$this->load->model('Slider_model');
		$this->load->model('Testimonial_model');
		$this->load->model('Partner_model');
		$this->load->model('Slider_model');
		$this->load->model('Product_model');# <- add this
		$this->load->model('Page_slug_model');# <- add this
		$this->load->model('Seo_onpage_value_model');# <- add this
		$this->load->model('Seo_onpage_model');# <- add this
		$this->load->model('Product_image_model');# <- add this
		$this->load->helper('form');
		$this->load->helper('text');

		//$this->load->library('form_validation');
		$this->load->helper('form');
		//$this->ci_minifier->init(1);
		

	}
	
	public function index()
	{
		/* $data = $this->common();
		$data['title'] = "Hadono | Unique Hardware & Bathware";

		$slider_data['sliders'] = $this->Slider_model->get_slider();
		$data['hadono_home_image'] = $this->Hadono_home_image_model->get_hadono_home_image();
		$data['testimonial'] = $this->Testimonial_model->get_testimonial();
		$data['partners'] = $this->Partner_model->get_partner();
		$data['sliders'] = $this->Slider_model->get_slider();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/slider',$slider_data);
		$this->load->view('pages/home',$data);
		$this->load->view('templates/footer',$data); */
		
		$data = $this->common();
	    $data['title'] = "Home";
	    $data['page'] = "home";
	    $data['services'] = $this -> Service_model->get_service();
	    $data['package'] = $this->Package_model->get_package();
	    $data['contact'] = $this->Contact_model->get_contact_detail();
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/slider',$data);
		$this->load->view('pages/home',$data);
		$this->load->view('templates/footer',$data);
	}

	public function about()
	{
	    $data = $this->common();
	    $data['title'] = "About (SCN)";
	    $data['page'] = "about";
	    $data['contact'] = $this->Contact_model->get_contact_detail();
	    $data['package'] = $this->Package_model->get_package();
	    
		$this->load->view('templates/header',$data);
		$this->load->view('pages/about',$data);
		$this->load->view('templates/footer',$data);
	}
	public function team()
	{
		$data = $this->common();
		$data['title'] = "Team | SCN";
		$data['page'] = "team";
		$data['contact'] = $this->Contact_model->get_contact_detail();

		$data['partners'] = $this->Partner_model->get_partner();		
		$this->load->view('templates/header',$data);
		$this->load->view('pages/team',$data);
		$this->load->view('templates/footer',$data);
	}
	
	public function career()
	{
		$data = $this->common();
		$data['title'] = "Career | SCN";
		$data['page'] = "career";
		$data['contact'] = $this->Contact_model->get_contact_detail();

		$this->load->view('templates/header',$data);
		$this->load->view('pages/career',$data);
		$this->load->view('templates/footer',$data);
	}

	public function contact()
	{
	    $data = $this->common();
	    $data['title'] = "Contact Us";
	    $data['page'] = "contact";
	    $data['contact'] = $this->Contact_model->get_contact_detail();
	    
		$this->load->view('templates/header',$data);
		$this->load->view('pages/contact',$data);
		$this->load->view('templates/footer',$data);
	}
	public function services()
	{
	    $data = $this->common();
	    $data['title'] = "Services";
	    $data['page'] = "services";
	    $data['contact'] = $this->Contact_model->get_contact_detail();
	    $data['services'] = $this -> Service_model->get_service();
	    
		$this->load->view('templates/header',$data);
		$this->load->view('pages/services',$data);
		$this->load->view('templates/footer',$data);
	}
	
	public function packages()
	{
	    $data = $this->common();
	    $data['title'] = "Packages";
	    $data['page'] = "packages";
	    $data['contact'] = $this->Contact_model->get_contact_detail();
	    
		$this->load->view('templates/header',$data);
		$this->load->view('pages/packages',$data);
		$this->load->view('templates/footer',$data);
	}
	
	public function products()
	{
		/*$data = $this->common();
		$data['title'] = "Our Products | SCN";

		$data['products'] = $this->Product_model->get_product();
		$products_o = $data['products'];
		
		$products = array();
		$i = 0;

		foreach($products_o as $po)
		{
			$product_image = $this->Product_image_model->get_product_image_single($po['product_id']);
			$products[$i]['product_id'] = $po['product_id'];
			$products[$i]['product_name'] = $po['product_name'];
			$products[$i]['product_slug'] = $po['product_slug'];
			$products[$i]['product_image_name'] = $product_image['product_image_name'];
			$products[$i]['product_description'] = $po['product_description'];
			$products[$i]['cat_name'] = $this->Product_model->get_category_name($po['product_id'])['cat_name'];
			$i++;
		}
		$data['products'] = $products; */

		$this->load->view('templates/header');
		$this->load->view('pages/products');
		$this->load->view('templates/footer');
	}
	
	public function product($product_slug)
	{
		$data = $this->common();
		$data['title'] = "Product";
		$data['page'] = "product";
		$data['product'] = $this->Product_model->get_product_by_slug($product_slug);
		$product_id = $data['product']['product_id'];
		$product_name = $data['product']['product_name'];
		$data['title'] = $product_name;
		
		if(empty($data['product'])){
			show_404();
		}
		
		$data['category'] = $this->Product_model->get_category_name($product_id);
		$data['related_product'] = $this->Product_model->get_related_product($product_id);
		$data['product_image'] = $this->Product_image_model->get_product_image($product_id);
		

		$this->load->view('templates/header',$data);
		$this->load->view('pages/product_detail',$data);
		$this->load->view('templates/footer',$data);
	}

	public function category($cat_slug)
	{
		$data = $this->common();
		$data['category'] = $this->Category_model->get_category_by_slug($cat_slug);
		if(empty($data['category'])){
			show_404();
		}
		$cat_id = $data['category']['cat_id'];
		$cat_name = $data['category']['cat_name'];
		
		$data['title'] = $cat_name;
		$child_cat = $this->Category_model->get_child($cat_id);
		
		$cat_ids = array();
		$cat_ids[0] = $cat_id;
		$i=1;
		foreach($child_cat as $cc)
		{
			$cat_ids[$i++] = $cc['cat_id'];
		}
		
		$data['products'] = $this->Product_model->get_product_by_categories($cat_ids);

		$products_o = $data['products'];
		$products = array();
		$i = 0;

		foreach($products_o as $po)
		{
			$product_image = $this->Product_image_model->get_product_image_single($po['product_id']);
			$products[$i]['product_id'] = $po['product_id'];
			$products[$i]['product_name'] = $po['product_name'];
			$products[$i]['product_slug'] = $po['product_slug'];
			$products[$i]['product_image_name'] = $product_image['product_image_name'];
			$products[$i]['product_description'] = $po['product_description'];
			$products[$i]['cat_name'] = $this->Product_model->get_category_name($po['product_id'])['cat_name'];
			$i++;
		}
		$data['products'] = $products;

		$this->load->view('templates/header',$data);
		$this->load->view('pages/product',$data);
		$this->load->view('templates/footer',$data);
	}
	
	public function terms()
	{
		$data = $this->common();
		$data['title'] = "Terms and Conditions | SCN";
		$this->load->view('templates/header',$data);
		$this->load->view('pages/terms',$data);
		$this->load->view('templates/footer',$data);
	}
	public function privacy()
	{
		$data = $this->common();
		$data['title'] = "Privacy Policy | SCN";
		$this->load->view('templates/header',$data);
		$this->load->view('pages/privacy',$data);
		$this->load->view('templates/footer',$data);
	}
	public function disclaimer()
	{
		$data = $this->common();
		$data['title'] = "Disclaimer | Hadono";
		$this->load->view('templates/header',$data);
		$this->load->view('pages/disclaimer',$data);
		$this->load->view('templates/footer',$data);
	}
	
	function languages()
	{
	   extract($_POST);
	   $this->session->set_userdata('language', $dlang);
	   $redirect_url = base_url().$current;
	   redirect($redirect_url);	
	}

	// -------------------- Common Fuction ---------------------------//
	public function common()
	{
		/*--------------------COMMING SOON----------------------------*/
		$setting = $this->Setting_model->get_setting();
		$coming_soon = 0;
		foreach($setting as $s)
		{
			if($s['name'] == 'coming_soon')
			{
				$coming_soon = $s['value'];
				break;
			}
		}
		if($coming_soon)
		{
			$data['contact'] = $this->Contact_model->get_contact(); 
			$this->load->view('admin/coming_soon/index',$data);
			return;
		}

		/*------------######COMMING SOON######--------------------*/
		$cat_tree = $this->Category_model->get_category_tree();
		$data['cat_tree'] = $this->Category_model->buildTree($cat_tree);
		$data['setting_detail'] = $this->Setting_model->get_setting_detail();
		$data['contact_detail'] = $this->Contact_model->get_contact_detail();
		$contact_detail = $data['contact_detail'];
		$data['products_4'] = $this->Product_model->get_product_4();
		
		/*------------CATALOG-------------------*/
		
		/*----------------SEO-------------------*/
		$slug = "";
		if(!empty($this->uri->segment(1)))
			$slug.=$this->uri->segment(1);
		if(!empty($this->uri->segment(2)))
			$slug.= "/".$this->uri->segment(2);
		if(!empty($this->uri->segment(3)))
			$slug.= "/".$this->uri->segment(3);
		
        $slug = trim($slug);
        
        $meta_tags = "";
        $Page_slug_model = $this->Page_slug_model->get_page_slug_id($slug);
        if(!empty($Page_slug_model))
        {
        	$page_slug_id = $Page_slug_model['page_slug_id'];
        	$Seo_onpage_value_data = $this->Seo_onpage_value_model->get_seo_onpage_value($page_slug_id);
        	foreach($Seo_onpage_value_data as $sovd)
        	{
        		$Seo_onpage_value_data = $this->Seo_onpage_model->get_seo_onpage($sovd['seo_onpage_id']);
        		if(!empty($Seo_onpage_value_data))
        		{
        			$tag_name = $Seo_onpage_value_data['name'];
        			if($tag_name == "meta_keywords")
        			{
        				$meta_tags .= '<meta name="keywords" content="'.$sovd['value'].'"/>';
        			}

        			if($tag_name == "meta_description")
        			{
        				$meta_tags .= '<meta name="description" content="'.$sovd['value'].'"/>';	
        				$meta_tags .= '<meta name="og:description" content="'.$sovd['value'].'"/>';	
        				$meta_tags .= '<meta name="twitter:description" content="'.$sovd['value'].'"/>';	
        			}	

        			if($tag_name == "subject")
        			{
        				$meta_tags .= '<meta name="topic" content="'.$sovd['value'].'"/>';
        				$meta_tags .= '<meta name="subject" content="'.$sovd['value'].'"/>';
        				$meta_tags .= '<meta name="og:title" content="'.$sovd['value'].'"/>';
        				$meta_tags .= '<meta name="twitter:title" content="'.$sovd['value'].'"/>';
        			}

        			if($tag_name == "facebook_image")
        			{
        				$meta_tags .= '<meta name="og:image" content="'.$sovd['value'].'"/>';
        			}
        			
        			if($tag_name == "twitter_image")
        			{
        				$meta_tags .= '<meta name="twitter:image" content="'.$sovd['value'].'"/>';
        			}
        		}
        	}
        }
        $meta_tags .= '<meta name="og:url" content="'.base_url(uri_string()).'"/>';
        $meta_tags .= '<meta name="url" content="'.base_url(uri_string()).'"/>';
        $meta_tags .= '<meta name="twitter:url" content="'.base_url(uri_string()).'"/>';
        $meta_tags .= '<meta name="identifier-URL" content="'.base_url(uri_string()).'"/>';
        
        $meta_tags .= '<meta name="copyright" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="og:site_name" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="twitter:site" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="owner" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="apple-mobile-web-app-title" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="application-name" content="'.$contact_detail['company_name'].'"/>';
        $meta_tags .= '<meta name="application-name" content="'.$contact_detail['company_name'].'"/>';

        $meta_tags .= '<meta name="author" content="'.$contact_detail['company_name'].",".$contact_detail['email1'].'"/>';
        
        $meta_tags .= '<meta name="reply-to" content="'.$contact_detail['email1'].'"/>';
        $meta_tags .= '<meta name="og:email" content="'.$contact_detail['email1'].'"/>';
        
        $meta_tags .= '<meta name="og:phone_number" content="'.$contact_detail['office1'].'"/>';
        $meta_tags .= '<meta name="og:street-address" content="'.$contact_detail['address1'].'"/>';
        
        $meta_tags .= '<meta name="language" content="En"/>';
        $meta_tags .= '<meta name="robots" content="archive,follow,imageindex,index,odp,snippet,translate"/>';
        
        $meta_tags .= '<meta name="target" content="all"/>';
        $meta_tags .= '<meta name="audience" content="all"/>';
        $meta_tags .= '<meta name="coverage" content="Worldwide"/>';
        $meta_tags .= '<meta name="distribution" content="Global"/>';
        
        $meta_tags .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $meta_tags .= '<meta property="og:type" content="website">';
        $meta_tags .= '<meta property="twitter:card" content="summary">';
        $meta_tags .= '<meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,minimal-ui"/>';

        $data['meta_tags'] = $meta_tags;
        /*------------------------------------*/

		return $data;
	}
	
}
