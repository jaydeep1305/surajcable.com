<?php
	require 'application/libraries/mailgun/autoload.php';
	use Mailgun\Mailgun;

	class Gjmail extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('text');
			$this->load->model('mail_model');
			$this->load->model('mail_sent_model');
			$this->load->model('image_gallery_model');
			$this->load->model('Business_email_model');
			$this->load->model('Setting_model');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('string');
			$this->load->library("pagination");
		}

		public function index(){
			$data['title'] = 'Inbox';
			
			/*-------------Pagination--------------*/
			$config = $this->greatjoin->pagination($this->mail_model,0,'gjmail/index');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data["mailbox"] = $this->mail_model->mailbox($config["per_page"], $page, 0);
	        $data["links"] = $this->pagination->create_links();
	        /*------------------------------------*/

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function sent(){
			$data['title'] = 'Sent';

			/*-------------Pagination--------------*/
			$config = $this->greatjoin->pagination($this->mail_sent_model,0,'gjmail/sent');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data["mailbox"] = $this->mail_sent_model->mailbox($config["per_page"], $page, 0);
	        $data["links"] = $this->pagination->create_links();
	        /*------------------------------------*/
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/sent', $data);
			$this->load->view('admin/templates/footer');
		}

		public function trash(){
			$data['title'] = 'Trash - Inbox';
	    	
	    	/*-------------Pagination--------------*/
			$config = $this->greatjoin->pagination($this->mail_model,-1,'gjmail/trash');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data["mailbox"] = $this->mail_model->mailbox($config["per_page"], $page, -1);
	        $data["links"] = $this->pagination->create_links();
	        /*------------------------------------*/

	    	$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/index', $data);
			$this->load->view('admin/templates/footer');
		}
		public function trashsent(){
			$data['title'] = 'Trash - Sent';
	    	
	    	/*-------------Pagination--------------*/
			$config = $this->greatjoin->pagination($this->mail_sent_model,-1,'gjmail/trashsent');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data["mailbox"] = $this->mail_sent_model->mailbox($config["per_page"], $page, -1);
	        $data["links"] = $this->pagination->create_links();
	        /*------------------------------------*/

	    	$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/sent', $data);
			$this->load->view('admin/templates/footer');
		}

		public function sent_view($id)
		{
			$data['title'] = 'Sent';
			$data['mail_sent'] = $this->mail_sent_model->view($id);
			$attachments = $this->mail_sent_model->get_attachments_db($id);
			if(is_array($attachments))
			{
				$data['attachments'] = $attachments;
			}

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/sent_view', $data);
			$this->load->view('admin/templates/footer');		
		}

		public function view($id){
			$data['title'] = 'Inbox';
			$data['mail'] = $this->mail_model->view($id);
			$data['attachments'] = $this->mail_model->get_attachments_db($id);
			
			$data['image_gallery'] = $this->image_gallery_model->get_image();
			$data['business_email'] = $this->Business_email_model->get_business_email();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/view', $data);
			$this->load->view('admin/templates/footer');
		}

		public function compose()
		{
			$data['title'] = 'Compose';
			
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/compose', $data);
			$this->load->view('admin/templates/footer');
		}
		public function composeplain()
		{
			$data['title'] = 'Compose';
			$data['image_gallery'] = $this->image_gallery_model->get_image();
			$data['business_email'] = $this->Business_email_model->get_business_email();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/mail/composeplain', $data);
			$this->load->view('admin/templates/footer');
		}

		public function sent_mail(){
			set_time_limit(0);
			$j = 0;
			$attachments = array();

			if(isset($_FILES['attachments']))
			{
				$config['upload_path']   = 'assets/mail/gallery'; 
				$config['allowed_types'] = 'psd|dll|pdf|ai|eps|xls|ppt|pptx|gz|gzip|swf|tar|tgz|zip|rar|7z|mp2|mp3|wav|bmp|gif|jpeg|jpg|jpe|jp2|j2k|jpf|jpg2|jpx|jpm|png|tiff|tif|css|html|txt|text|log|rtx|rtf|xml|xsl|mpeg|mpg|mpe|mov|avi|doc|docx|xlsx|word|json|pem|crt|crl|mp4|m4a|f4v|flv|xspf|wmv|7zip|cdr|wma|svg|jar|ico|webp|csv';
				$config['max_size']      = 0;
		      	$this->load->library('upload', $config);
			    $files = $_FILES;

			    $cpt = count($_FILES['attachments']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			    	$ext = pathinfo($files['attachments']['name'][$i], PATHINFO_EXTENSION);
			    	$attachments_original_name = $files['attachments']['name'][$i];

			        $_FILES['attachments']['name']= preg_replace("/[^0-9a-z.A-Z]+/","_",random_string('alnum', 15).".".$ext);

			        $attachments_name = $_FILES['attachments']['name'];

			        $_FILES['attachments']['type']= $files['attachments']['type'][$i];
			        $_FILES['attachments']['tmp_name']= $files['attachments']['tmp_name'][$i];
			        $_FILES['attachments']['error']= $files['attachments']['error'][$i];
			        $_FILES['attachments']['size']= $files['attachments']['size'][$i];    

			        if($this->upload->do_upload('attachments'))
			        {
			        	$attachments[$i]['filename'] = $attachments_original_name;
			        	$attachments[$i]['filePath'] = FCPATH.'assets/mail/gallery/'.$attachments_name;
			        }
			        else
			        {
			        	echo $this->upload->display_errors();
			        }
			    }
			}
			else
			{
				$images = $this->input->post("image");			
				$i = 0;
				
				if(is_array($images))
				{
					foreach($images as $ig)
					{
						$images_data = $this->image_gallery_model->get_image($ig);
						$attachments[$i]['filePath'] = FCPATH.'assets/images/gallery/'.$images_data['image_name'];
						$attachments[$i]['filename'] = $images_data['image_original_name'];
						$i++;
					}				
				}
			}
			
			$setting_detail = $this->Setting_model->get_setting_detail();
			$api_key = $setting_detail['api_key'];
			$domain = $setting_detail['domain'];
			$mgClient = Mailgun::create($api_key);
			
			$from_email = $this->input->post('from_email');
			$to_email = $this->input->post('to_email');
			$cc_email = $this->input->post('cc_email');
			$bcc_email = $this->input->post('bcc_email');
			$subject = $this->input->post('subject');
			$mail_description = $this->input->post('mail_description');

			$send_data = array();

			if(!empty($from_email))
				$send_data['from'] = $from_email;
			if(!empty($to_email))
				$send_data['to'] = $to_email;
			if(!empty($cc_email))
				$send_data['cc'] = $cc_email;
			if(!empty($bcc_email))
				$send_data['bcc'] = $bcc_email;
			if(!empty($subject))
				$send_data['subject'] = $subject;
			if(!empty($mail_description))
				$send_data['text'] = $mail_description;
			if(!empty($attachments))
				$send_data['attachment'] = $attachments;

			$result = $mgClient->messages()->send($domain, $send_data);
			$this->mail_sent_model->create_mail($attachments);
			redirect('gjmail/sent');
		}

		public function reply_mail(){
			set_time_limit(0);
			$j = 0;
			$attachments = array();

			if(isset($_FILES['attachments']))
			{
				$config['upload_path']   = 'assets/mail/gallery'; 
				$config['allowed_types'] = 'psd|dll|pdf|ai|eps|xls|ppt|pptx|gz|gzip|swf|tar|tgz|zip|rar|7z|mp2|mp3|wav|bmp|gif|jpeg|jpg|jpe|jp2|j2k|jpf|jpg2|jpx|jpm|png|tiff|tif|css|html|txt|text|log|rtx|rtf|xml|xsl|mpeg|mpg|mpe|mov|avi|doc|docx|xlsx|word|json|pem|crt|crl|mp4|m4a|f4v|flv|xspf|wmv|7zip|cdr|wma|svg|jar|ico|webp|csv';
				$config['max_size']      = 0;
		      	$this->load->library('upload', $config);
			    $files = $_FILES;

			    $cpt = count($_FILES['attachments']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			    	$ext = pathinfo($files['attachments']['name'][$i], PATHINFO_EXTENSION);
			    	$attachments_original_name = $files['attachments']['name'][$i];

			        $_FILES['attachments']['name']= preg_replace("/[^0-9a-z.A-Z]+/","_",random_string('alnum', 15).".".$ext);

			        $attachments_name = $_FILES['attachments']['name'];

			        $_FILES['attachments']['type']= $files['attachments']['type'][$i];
			        $_FILES['attachments']['tmp_name']= $files['attachments']['tmp_name'][$i];
			        $_FILES['attachments']['error']= $files['attachments']['error'][$i];
			        $_FILES['attachments']['size']= $files['attachments']['size'][$i];    

			        if($this->upload->do_upload('attachments'))
			        {
			        	$attachments[$i]['filename'] = $attachments_original_name;
			        	$attachments[$i]['filePath'] = FCPATH.'assets/mail/gallery/'.$attachments_name;
			        }
			        else
			        {
			        	echo $this->upload->display_errors();
			        }
			    }
			}
			else
			{
				$images = $this->input->post("image");			
				$i = 0;
				
				if(is_array($images))
				{
					foreach($images as $ig)
					{
						$images_data = $this->image_gallery_model->get_image($ig);
						$attachments[$i]['filePath'] = FCPATH.'assets/images/gallery/'.$images_data['image_name'];
						$attachments[$i]['filename'] = $images_data['image_original_name'];
						$i++;
					}				
				}
			}
			
			$setting_detail = $this->Setting_model->get_setting_detail();
			$api_key = $setting_detail['api_key'];
			$domain = $setting_detail['domain'];
			$mgClient = Mailgun::create($api_key);
			
			$from_email = $this->input->post('from_email');
			$to_email = $this->input->post('to_email');
			$cc_email = $this->input->post('cc_email');
			$bcc_email = $this->input->post('bcc_email');
			$subject = $this->input->post('subject');
			$mail_description = $this->input->post('mail_description');

			$send_data = array();

			if(!empty($from_email))
				$send_data['from'] = $from_email;
			if(!empty($to_email))
				$send_data['to'] = $to_email;
			if(!empty($cc_email))
				$send_data['cc'] = $cc_email;
			if(!empty($bcc_email))
				$send_data['bcc'] = $bcc_email;
			if(!empty($subject))
				$send_data['subject'] = $subject;
			if(!empty($mail_description))
				$send_data['text'] = $mail_description;
			if(!empty($attachments))
				$send_data['attachment'] = $attachments;

			$result = $mgClient->messages()->send($domain, $send_data);
			$this->mail_sent_model->create_mail($attachments);
			redirect('gjmail/sent');
		}

		
		public function deletemail($id)
		{
			$ids = explode("-",$id);
			foreach($ids as $id)
			{
				$this->mail_model->deletemail($id);
			}
			redirect("gjmail/trash");
		}
		public function deletesentmail($id)
		{
			$ids = explode("-",$id);
			foreach($ids as $id)
			{
				$this->mail_sent_model->deletemail($id);
			}
			redirect("gjmail/trash_sent");
		}

	} 
?>