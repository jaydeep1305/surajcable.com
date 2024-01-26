<?php
	require_once("application/libraries/xmlapi.php");
	class Gjbusinessemail extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('isLoggedIn'))
			{
				redirect(base_url().'/login');
			}
			$this->load->model('Setting_model');
			$this->load->helper('form');
			$this->load->helper('text');
		}

		public function index(){

			$data['title'] = 'Business Email';
			$Setting_model = $this->Setting_model->get_setting_detail();

			$ip = 'lucria.site';
			$account = $Setting_model['cpanel_username'];
			$xmlapi = new xmlapi($ip);
			$xmlapi->password_auth("lucriasi","nopassword1305");

			$xmlapi->set_output('json');
			$xmlapi->set_debug(1);
			$json_data = $xmlapi->api2_query($account, "Email", "listpopswithdisk" ); 
			$data['json_data'] = json_decode($json_data);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/businessemail/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			$data['title'] = "Create Business Email";
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/businessemail/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$Setting_model = $this->Setting_model->get_setting_detail();

				$ip = 'lucria.site';
				$account = $Setting_model['cpanel_username'];
				$email_user = $this->input->post('email');
				$email_password = $this->input->post('password');
				$email_domain = $Setting_model['domain'];
				$email_quota = '10000';
				$xmlapi = new xmlapi($ip);
				$xmlapi->password_auth("lucriasi","nopassword1305");

				$xmlapi->set_output('json');
				$xmlapi->set_debug(1);
				$json_data = $xmlapi->api1_query($account, "Email", "addpop", array($email_user, $email_password, $email_quota, $email_domain) );
				$json_array = json_decode($json_data);
				
				$result = $json_array->event;
				$result = $result->result;

				$result_error = $json_array->data;
				$result_error = $result_error->result;

				$data['error'] = $result_error;
				if($result)
				{
					//success
					redirect('gjbusinessemail');
				}
				else
				{
					$this->load->view('admin/templates/header');
					$this->load->view('admin/templates/sidebar');
					$this->load->view('admin/businessemail/create', $data);
					$this->load->view('admin/templates/footer');
				}				
			}
		}
		
		public function edit($email){
			$data['title'] = "Edit : ".$email;
			$data['email'] = $email;
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/businessemail/edit', $data);
				$this->load->view('admin/templates/footer');
			} else {
				$Setting_model = $this->Setting_model->get_setting_detail();

				$ip = 'lucria.site';
				$account = $Setting_model['cpanel_username'];
				$new_password = $this->input->post('password');
				$email_domain = $Setting_model['domain'];
				$email_quota = '10000';
				$xmlapi = new xmlapi($ip);
				$xmlapi->password_auth("lucriasi","nopassword1305");

				$xmlapi->set_output('json');
				$xmlapi->set_debug(1);

				$args = array(
				  'domain'=>$email_domain, 
				  'email'=>$email,
				  'password'=>$new_password
				);
				$json_data = $xmlapi->api1_query($account, "Email", "passwdpop", array($email, $new_password, 0, $email_domain));

				$json_array = json_decode($json_data);
				$result = $json_array->event;
				$result = $result->result;

				$result_error = $json_array->data;
				$result_error = $result_error->result;

				$data['error'] = $result_error;
				if($result)
				{
					//success
					redirect('gjbusinessemail');
				}
				else
				{
					$this->load->view('admin/templates/header');
					$this->load->view('admin/templates/sidebar');
					$this->load->view('admin/businessemail/edit', $data);
					$this->load->view('admin/templates/footer');
				}				
			}
		}

		public function delete($email){
			echo "NO PERMISSION FOR SECURITY RESON";
			die();
			$Setting_model = $this->Setting_model->get_setting_detail();

			$ip = 'lucria.site';
			$account = $Setting_model['cpanel_username'];
			$email_domain = $Setting_model['domain'];
			$xmlapi = new xmlapi($ip);
			$xmlapi->password_auth("lucriasi","nopassword1305");

			$xmlapi->set_output('json');
			$xmlapi->set_debug(1);

			$args = array( 
			    'domain' => $email_domain, 
			    'email' => $email, 
			);   

			$xmlapi->api2_query($account, 'Email', 'delpop', $args); 

			redirect('gjbusinessemail');
		}
	} 
?>