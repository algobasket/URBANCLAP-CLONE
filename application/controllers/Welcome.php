<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {


    /**
     ** Constructor
    */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('site');
        // load the language file
        $this->lang->load('welcome');
        $this->load->model('categories_model');
        $this->load->model('users_model');
        $this->load->model('services_model');
        $this->load->model('jobs_model');
        $this->lang->load('users');
    }


    /**
	   ** Default
    */
	function index()
	{
        // setup page header data
        $this->set_title(sprintf(lang('welcome title'), $this->settings->site_name));
        $data = $this->includes;
        // set content data
        $content_data = array(
          'getAllCategory' => $this->categories_model->getAllCategory()
        );
        // load views
        $data['content'] = $this->load->view('welcome', $content_data, TRUE);
				$this->load->view($this->template, $data);
	}

   /**
     ** wallet
   */
  function wallet(){
    $user_id = $this->uri->segment(2);
    $this->load->model('payment_model');
    $data['qrCodeImage'] = $this->payment_model->getUserQRCode($user_id);
    $this->load->view('shareQRCode',$data);
  }


  /**
   ** landingPage
  */
  function landingPage(){
    $data = $this->includes;
    if($this->input->post('searchBtn')){ 
       
       $this->session->set_userdata('setCountryId',$this->input->post('countryId'));
       $this->session->set_userdata('setCityId',$this->input->post('cityId'));
       $this->session->set_userdata('setServiceId',$this->input->post('serviceId'));
       
       redirect('welcome/search/'.
        $this->input->post('countryId').'/'.$this->input->post('serviceId'));
    }
    //$data['states'] = states();
    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];

    $data['currentCountryId'] = $this->users_model->getCountryIdFromName($country);
    $data['currentCityId']    = $this->users_model->getCityIdFromName($city);
    
    $data['cities']           = $this->users_model->getAllCitiesFromCountryId($data['currentCountryId']);

    $data['countries']        = $this->users_model->getAllCountries();
    $data['getAllCategory'] = $this->categories_model->getAllCategory();
    $data['getAllCategoryAndServices'] = $this->categories_model->getAllCategoryAndServices();
    $this->load->view('landingPage',$data);
   }


   /**
    **landingPage
   */
  function search(){

    $data = $this->includes; 
    $data['user']            = $this->users_model->get_user($this->user['id']);
    $data['states']          = states();
    $data['setCountryId']    = $this->session->userdata('setCountryId');
    $data['setServiceId']    = $this->session->userdata('setServiceId');
    $data['setCityId']       = $this->session->userdata('setCityId'); 
    
    //print_r($data);die;
    if($this->input->post('searchBtn')){ 
       $this->session->set_userdata('setCountryId',$this->input->post('countryId'));
       $this->session->set_userdata('setCityId',$this->input->post('cityId'));
       $this->session->set_userdata('setServiceId',$this->input->post('serviceId'));

       redirect('welcome/search/'.
        $this->input->post('countryId').'/'.$this->input->post('serviceId'));  
    }

   

    $data['getCountryNameFromId'] = $this->users_model->getCountryNameFromId($data['setCountryId']);
    $data['getCityNameFromId']    = $this->users_model->getCityNameFromId($data['setCityId']);
    $data['getServiceNameFromId'] = $this->services_model->getServiceNameFromId($data['setServiceId']);
    $data['cities']               = $this->users_model->getAllCitiesFromCountryId($data['setCountryId']);
    $data['countries'] = $this->users_model->getAllCountries();
    $data['getAllServices']  = $this->services_model->getAllServices(); 
    $data['getCategoryQuestionsFromServiceId'] = $this->categories_model->getCategoryQuestionsFromServiceId($this->session->userdata('setServiceId'));
    //print_r($data['getCategoryQuestionsFromServiceId']);die; 
    //$data['getCategoryQuestionsFromCategoryNameServiceName'] = $this->categories_model->getCategoryQuestionsFromCategoryNameServiceName($this->uri->segment(4),$this->uri->segment(5));
    $this->load->view('searchPage',$data); 
  }
  
  function postCustomJob(){

  }

  /**
    **searchPost
  */
   function searchPost(){
    $data = $this->includes;
    $user = $this->users_model->get_user($this->user['id']);
    // set content data
    $content_data = array(
       'user' => $user,
    );
    if($this->input->post('postQuestions')){
       $questionsAnswers = array(
         'radio' => $this->input->post('questions_radio'),
         'text'  => array($this->input->post('questions_text'),$this->input->post('questions_text_answer'))
       );
       $categoryId = $this->categories_model->getCategoryIdFromServiceId($this->session->userdata('setServiceId'));
       $this->categories_model->postUserQuestionsAnswers(array(
         'user_id' => $this->user['id'],
         'service_id' => $this->session->userdata('setServiceId'),
         'category_id' => $categoryId,
         'json'    => json_encode($questionsAnswers,true),
         'created' => date('d-m-Y h:i:s'),
         'updated' => date('d-m-Y h:i:s'),
         'status' => 7
       ));
       $this->session->set_flashdata('alert','<div class="alert alert-success">'.lang('postQuestionsSuccess').'</div>');
      
    }
     if($this->input->post('postJobSubmit')){
      
        $config['upload_path'] = './uploads/jobs-documents/';
        $config['allowed_types'] = 'docx|png|jpg|pdf|txt';
        $config['max_size']     = '50000';
        $config['file_name']    = time().'-'.uniqid();
        $this->load->library('upload', $config);

        if($this->upload->do_upload('jobDocument')){
          $file = $this->upload->data('file_name');
        }
         $payment_method = $this->input->post('payment_method');
         $custom_json = array(
          'is_custom_job'    => 1,
          'title'            => $this->input->post('jobTitle'),
          'employerName'     => $this->input->post('employerName'),
          'employerCode'     => $this->input->post('employerCode'),
          'serviceId'        => $this->input->post('serviceId'),
          'workPlace'        => $this->input->post('workPlace'),
          'noOfEmployees'    => $this->input->post('noOfEmployees'),
          'budget'           => $this->input->post('budget'),
          'currencyTypeInput' => $this->input->post('currencyTypeInput'),
          'jobTypeInput'     => $this->input->post('jobTypeInput'),
          'executionDate'    => $this->input->post('executionDate'),
          'announcementDate' => $this->input->post('announcementDate'),
          'jobDescription'   => $this->input->post('jobDescription'),
          'jobMarker'        => json_encode($this->input->post('jobMarker'),true),
          'executionDate'    => $this->input->post('executionDate'),
          'documentFile'     => $file ? $file : NULL
        );
         $checkAccessCode = $this->users_model->checkAccessCode($this->input->post('employerCode'));

         if(is_array($checkAccessCode) && count($checkAccessCode) == 1)
         {
             $array = array(
             'user_id' => $checkAccessCode[0]['id'],
             'service_id' => $this->input->post('serviceId'),
             'category_id' => $this->categories_model->getCategoryIdFromServiceId($this->input->post('serviceId')),
             'is_custom_job' => 1,
             'custom_json' => json_encode($custom_json,true),
             'payment_method' => $payment_method,
             'created' => date('d-m-Y h:i:s'),
             'updated' => date('d-m-Y h:i:s'),
             'status' => 7
             );
            //print_r($array);
            $successMessage = '<div class="alert alert-success" role="alert">
                                 <h4 class="alert-heading">Thank You!</h4>
                                   <p>For using our plateform, you successfully created your job post. We will get back to your soon. <br>In case if you havent got any response from us please contact us below</p>
                                   <p class="mb-0">'.
                                   $this->settings->site_name.
                                   ' LLC<br> '.$this->settings->site_email.'<br>'.$this->settings->site_phone.'</p>
                                 <a href="'.base_url().'login" class="btn btn-primary">Login</a>
                                 <a href="'.base_url().'user/offerPage" class="btn btn-primary">Access Page</a>
                               </div>';
            $this->session->set_flashdata('alert',$successMessage);
            $this->jobs_model->postCustomJob($array);
         }else{
           $this->session->set_flashdata('alert','<div class="alert alert-danger">Invalid AccessCode</div>');
           redirect('welcome/search');  
         }
         
    }
     $this->load->view('searchPageSubmit');
  }




}
?>
