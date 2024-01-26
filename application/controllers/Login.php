<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model'); # <- add this
		$this->load->helper('form');
		$this->load->helper('text');
		//$this->load->library('form_validation');
		$this->load->helper('form');
	}*/

		public function login_validation()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()){
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$this->load->model('Login_model');

				if($this->Login_model->get_login($username, $password)){
					$session_data = array ('username' => $username);
					$this->session->set_userdata($session_data);
					$this->session->set_userdata('isLoggedIn', TRUE);
					redirect(base_url().'gjdashboard/');
				}
				else{
					$this->session->set_flashdata('error', 'Invalid Username Or Password');
					$this->session->set_userdata('isLoggedIn', FALSE);
					redirect(base_url().'login');
				}
			}
			else{
				$this->index();
			}
		}

		public function enter()
		{
			if($this->session->userdata('username')=="")
			{
				$this->session->userdata('username');
			}	
			else {
				redirect(base_url().'login');
			}
		}
		
		public function logout()
		{
			$this->session->unset_userdata('username');
			$this->session->set_userdata('isLoggedIn', FALSE);
			redirect(base_url().'login');		
		}

		public function index()
		{
			$data['title'] = 'Admin Login';
			$this->load->view('admin/pages/login');
		}
	}