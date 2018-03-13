<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Admin_Controller {

	/**
     * @var string
     */
    private $_redirect_url;

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
    		// load the logs model
        $this->load->model('tickets_model');
    		$this->load->model('users_model');
        $this->load->model('categories_model');
        // set constants
        define('REFERRER', "referrer");
        define('THIS_URL', base_url('admin/users'));
        define('DEFAULT_LIMIT', $this->settings->per_page_limit);
        define('DEFAULT_OFFSET', 0);
        define('DEFAULT_SORT', "last_name");
        define('DEFAULT_DIR', "asc");
    }


    function index(){
      $content_data['page_title'] = "Project | Jobs";
      $content_data['page_header'] = "Project | Jobs";
      $data = $this->includes;
      // get parameters
      $limit  = $this->input->get('limit')  ? $this->input->get('limit', TRUE)  : DEFAULT_LIMIT;
      $offset = $this->input->get('offset') ? $this->input->get('offset', TRUE) : DEFAULT_OFFSET;
      $sort   = $this->input->get('sort')   ? $this->input->get('sort', TRUE)   : DEFAULT_SORT;
      $dir    = $this->input->get('dir')    ? $this->input->get('dir', TRUE)    : DEFAULT_DIR;
      // get filters
      $filters = array();
      // load views
      $content_data['usersList'] = $this->users_model->getAllUserByRoleByServiceByAvailability($roleId=6,$serviceId=2,$status=1,$isAvailable=1);
      // load views
      $content_data['jobs'] = $this->categories_model->projectJobs();
      $data['content'] = $this->load->view('admin/projects/index', $content_data, TRUE);
      $this->load->view($this->template, $data);
    }


    function create(){

    }


    function update(){
      $content_data['page_title'] = "Project | Jobs";
      $content_data['page_header'] = "Project | Jobs";
      $data = $this->includes;
      if($this->input->post('btnUpdateJobs')){
        $this->categories_model->updateProjectJob($this->uri->segment(4),array(
          'jobs' => $this->input->post('json')
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Record updated</div>');
        redirect('admin/projects');
      }
      $content_data['jobs'] = $this->categories_model->getProjectJobsFromId($this->uri->segment(4));
      $data['content'] = $this->load->view('admin/projects/update', $content_data, TRUE);
      $this->load->view($this->template, $data);
    }


    function delete(){
       $this->categories_model->deleteProjectJob($this->uri->segment(4));
       $this->session->set_flashdata('alert','<div class="alert alert-danger">Record deleted</div>');
       redirect('admin/projects');
    }

    function completed(){ 
      $this->users_model->projectStatusUpdate($this->uri->segment(4),array(
        'status' => 9
      ));
      $this->session->set_flashdata('alert','<div class="alert alert-success">Thanks for completing this project</div>');
      redirect('admin/projects');
    }

    function workerByServiceAjax(){
       $roleId = 6;
       $serviceId = $this->input->post('serviceId');
       $jobId = $this->input->post('jobId');
       $content_data['jobId'] = $jobId;
       $content_data['usersList'] = $this->users_model->getAllUserByRoleByServiceByAvailability($roleId=6,$serviceId,$status=1,$isAvailable=1);
       echo $this->load->view('admin/projects/ajax',$content_data,true);
    }

    function assignJobWorker(){
      $this->users_model->assignJobWorker($this->uri->segment(4),array(
        'assigned_user_id' => $this->uri->segment(5)
      ));
      $this->session->set_flashdata('alert','<div class="alert alert-success">Worker Assigned</div>');
      redirect('admin/projects');
    }


}
?>
