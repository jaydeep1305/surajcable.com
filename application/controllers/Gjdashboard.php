<?php
include 'application/libraries/gapi.class.php';
include 'application/libraries/vendor/autoload.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Gjdashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn'))
		{
			redirect(base_url().'/login');
		}
		$this->load->model('Setting_model');
		$this->load->model('Inquiry_model');
		$this->load->model('Product_model');
		$this->load->model('Subscriber_model');
	}
	
	public function index()
	{
		/*------Analytics Value-----*/
		$setting = $this->Setting_model->get_setting();
		$analytics_id = 0;
		foreach($setting as $s)
		{
			if($s['name'] == 'analytics_id')
			{
				$analytics_id = $s['value'];
				break;
			}
		}
		/*------ RealTime -----*/
		$client = new Google_Client();
		$client->useApplicationDefaultCredentials();
		$client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
		$client->setAuthConfig("application/greatjoin.json");
		$GA_VIEW_ID = 'ga:'.$analytics_id;
		$service = new \Google_Service_Analytics($client);
		try {
			$result = $service->data_realtime->get(
				$GA_VIEW_ID,
				'rt:activeVisitors'
			);
			$data['realtime'] = $result->totalsForAllResults['rt:activeVisitors'];
		} catch(Exception $e) {
		}
		
		/*------ Analytics -----*/
		$ga = new gapi("greatjoin@ultra-airway-592.iam.gserviceaccount.com", "application/greatjoin.p12");
		define('ga_profile_id',$analytics_id);
		$start_date = null;
		$end_date = null;
		
		if(isset($_GET['start_date']))
			$start_date = $_GET['start_date'];
				
		if(isset($_GET['end_date']))
			$end_date = $_GET['end_date'];
		
		$filter = '';
		$ga->requestReportData(ga_profile_id,array('browser'),array('pageviews','visits','users','newUsers','avgSessionDuration'),'-visits',$filter,$start_date,$end_date);
		$results = $ga->getResults();
		$data['ga'] = $ga;
		$data['results'] = $results;
		
		$ga2 = new gapi("greatjoin@ultra-airway-592.iam.gserviceaccount.com", "application/greatjoin.p12");
		$ga2->requestReportData(ga_profile_id,array('operatingSystem'),array('pageviews','visits'),'-visits',$filter,$start_date,$end_date);
		$results2 = $ga2->getResults();
		$data['ga2'] = $ga2;
		$data['results2'] = $results2;
		
		$ga3 = new gapi("greatjoin@ultra-airway-592.iam.gserviceaccount.com", "application/greatjoin.p12");
		$ga3->requestReportData(ga_profile_id,array('country'),array('pageviews','visits'),'-visits',$filter,$start_date,$end_date);
		$results3 = $ga3->getResults();
		$data['ga3'] = $ga3;
		$data['results3'] = $results3;
		
		$ga4 = new gapi("greatjoin@ultra-airway-592.iam.gserviceaccount.com", "application/greatjoin.p12");
		$ga4->requestReportData(ga_profile_id,array('pagePath'),array('pageviews','visits','avgTimeOnPage'),'-visits',$filter,$start_date,$end_date);
		$results4 = $ga4->getResults();
		$data['ga4'] = $ga4;
		$data['results4'] = $results4;
		
		$data['start_date'] = $start_date;
		$data['end_date'] = $end_date;
		/*----------------------------------------*/
		/*----COUNTING---*/
		$data['total_inquires'] = $this->Inquiry_model->count_inquiry();
		$data['total_products'] = $this->Product_model->count_inquiry();
		$data['total_subscriber'] = $this->Subscriber_model->count_inquiry();


		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/pages/index',$data);
		$this->load->view('admin/templates/footer');
	}
	public function realtime()
	{
		/*------Analytics Value-----*/
		$setting = $this->Setting_model->get_setting();
		$analytics_id = 0;
		foreach($setting as $s)
		{
			if($s['name'] == 'analytics_id')
			{
				$analytics_id = $s['value'];
				break;
			}
		}
		/*------ RealTime -----*/
		$client = new Google_Client();
		$client->useApplicationDefaultCredentials();
		$client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
		$client->setAuthConfig("application/greatjoin.json");
		$GA_VIEW_ID = 'ga:'.$analytics_id;
		$service = new \Google_Service_Analytics($client);
		try {
			$result = $service->data_realtime->get(
				$GA_VIEW_ID,
				'rt:activeVisitors'
			);
			$realtime = $result->totalsForAllResults['rt:activeVisitors'];
		} catch(Exception $e) {
		}
		echo $realtime;
	}
}
