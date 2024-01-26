<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Gjonpageseo extends CI_Controller {

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
		if(!$this->session->userdata('isLoggedIn'))
		{
			redirect(base_url().'/login');
		}
		$this->load->model('Seo_onpage_model'); # <- add this
		$this->load->model('Seo_onpage_value_model'); # <- add this
		$this->load->model('Page_slug_model'); # <- add this
		$this->load->helper('form');
		$this->load->helper('text');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['page_slug'] = $this->Page_slug_model->get_page_slug();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/seo_onpage/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function step2()
	{
		$page_slug_id = $this->input->post('page_slug_id');
		$data['page_slug_id'] = $page_slug_id;
		$data['seo_onpage'] = $this->Seo_onpage_model->get_seo_onpage();
		$data['seo_onpage_value'] = $this->Seo_onpage_value_model->get_seo_onpage_value($data['page_slug_id']);
		$seo = array();
		$i = 0;
		foreach($data['seo_onpage'] as $so)
		{
			$seo[$i]['page_slug_id'] = $page_slug_id;
			$seo[$i]['seo_onpage_id'] = $so['seo_onpage_id'];
			$seo[$i]['name'] = $so['name'];
			$seo[$i]['type'] = $so['type'];

				
			foreach($data['seo_onpage_value'] as $sov)
			{
				if($so['seo_onpage_id'] == $sov['seo_onpage_id'])
				{
					$seo[$i]['value'] = $sov['value'];
				}
			}
			$i++;
		}
		$data['seo'] = $seo;
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/seo_onpage/step2', $data);
		$this->load->view('admin/templates/footer');
	}
	public function save()
	{
		$seo_onpage_id_value = $this->input->post('seo_onpage_id');
		$page_slug_id = $this->input->post('page_slug_id');
		foreach($seo_onpage_id_value as $seo_onpage_id=>$value)
		{
			if(!empty($value))
			{
				$this->Seo_onpage_value_model->create($page_slug_id,$seo_onpage_id,$value);	
			}
			else
			{
				$this->Seo_onpage_value_model->delete($page_slug_id,$seo_onpage_id);	
			}
		}
		redirect('gjonpageseo/view/'.$page_slug_id);
	}
	public function view($page_slug_id)
	{
		$data['page_slug_id'] = $page_slug_id;
		$data['page_slug'] = $this->Page_slug_model->get_page_name($page_slug_id);
		$data['seo_onpage'] = $this->Seo_onpage_model->get_seo_onpage();
		$data['seo_onpage_value'] = $this->Seo_onpage_value_model->get_seo_onpage_value($data['page_slug_id']);
		$seo = array();
		$i = 0;
		foreach($data['seo_onpage'] as $so)
		{
			foreach($data['seo_onpage_value'] as $sov)
			{
				if($so['seo_onpage_id'] == $sov['seo_onpage_id'])
				{
						$seo[$i]['page_slug_id'] = $page_slug_id;
						$seo[$i]['seo_onpage_id'] = $so['seo_onpage_id'];
						$seo[$i]['name'] = $so['name'];
						$seo[$i]['type'] = $so['type'];
						$seo[$i]['value'] = $sov['value'];
				}
			}
			$i++;
		}
		$data['seo'] = $seo;

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/seo_onpage/view', $data);
		$this->load->view('admin/templates/footer');
	}
	public function generateslug()
	{
		$data = $this->Page_slug_model->generateslug();
		echo "Page slug generated";
	}
}
