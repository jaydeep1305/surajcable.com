<?php
	require 'application/libraries/mailgun/autoload.php';
	use Mailgun\Mailgun;

	class Storemail extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->model('mail_model');
			$this->load->model('Setting_model');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
			$this->load->library("pagination");
		}

		public function index(){
			set_time_limit(0);
			$setting_detail = $this->Setting_model->get_setting_detail();
			$api_key = $setting_detail['api_key'];
			$domain = $setting_detail['domain'];

			$mgClient = Mailgun::create($api_key);
			
			$folder = $this->mail_model->create_mail();

			$attachments = $this->mail_model->get_attachments();
			if(is_array($attachments))
			{
				foreach($attachments as $attachment){
					$result = $mgClient->getAttachment($attachment->url);
					
					$dirname = FCPATH."mail_data/$folder/";
					if (!is_dir($dirname))
					{
					    mkdir($dirname, 0755, true);
					}

					$fp = fopen($dirname."/".$attachment->name, 'w');
					fwrite($fp,$result->http_response_body);
					fclose($fp);
					print_r($attachment);
				}				
			}
		}

	} 
?>