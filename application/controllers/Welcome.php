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
       redirect('welcome/search/'.$this->input->post('state').'/'.$this->input->post('services'));
    }
    $data['states'] = states();
    $data['getAllCategory'] = $this->categories_model->getAllCategory();
    $data['getAllCategoryAndServices'] = $this->categories_model->getAllCategoryAndServices();
    $this->load->view('landingPage',$data);
   }


   /**
    **landingPage
   */
  function search(){   
    $data = $this->includes;
    $data['user'] = $this->users_model->get_user($this->user['id']);
    $data['states'] = states();
    $data['location'] = $this->uri->segment(3);
    $data['serviceCategory'] = $this->uri->segment(4);
    $data['locality'] = $this->uri->segment(5) ? $this->uri->segment(5) : "";
    if($this->input->post('searchBtn')){
       redirect('welcome/search/'.$this->input->post('state').'/'.$this->input->post('services').'/'.$this->input->post('locality'));
    }
    $data['getServicesFromCategoryName'] = $this->categories_model->getServicesFromCategoryName($this->uri->segment(4));
    $data['getCategoryQuestionsFromCategoryNameServiceName'] = $this->categories_model->getCategoryQuestionsFromCategoryNameServiceName($this->uri->segment(4),$this->uri->segment(5));
    $this->load->view('searchPage',$data);
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
       //print_r($questions);
       $this->categories_model->postUserQuestionsAnswers(array(
         'user_id' => $this->user['id'],
         'service_id' => $this->categories_model->getServiceIdFromServiceName($this->input->post('serviceName')),
         'category_id' => $this->categories_model->getCategoryIdFromCategoryName($this->input->post('categoryName')),
         'json'    => json_encode($questionsAnswers,true),
         'created' => date('d-m-Y h:i:s'),
         'updated' => date('d-m-Y h:i:s'),
         'status' => 1
       ));
       $this->session->set_flashdata('alert','<div class="alert alert-success">'.lang('postQuestionsSuccess').'</div>');
       $this->load->view('searchPageSubmit');
    }
  }




}
?>
