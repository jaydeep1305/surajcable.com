<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gjcontact extends CI_Controller {

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
		$this->load->model('Contact_model'); # <- add this
		$this->load->helper('form');
		$this->load->helper('text');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['contact'] = $this->Contact_model->get_contact();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/contact/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function update()
	{
		$this->Contact_model->update_contact();
		redirect('gjcontact/index');
	}

}
