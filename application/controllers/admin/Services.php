<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Admin_Controller {

    /**
    * Constructor
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
		    $this->load->model('services_model');
        $this->load->model('categories_model');
    }


    function index(){
      $this->set_title("Services List");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
      );
      $content_data['services'] = $this->services_model->getAllServices();
      $data['content'] = $this->load->view('admin/services/index',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }


    function create(){
      $this->set_title("Create Services");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      if($this->input->post('createBtn')){
        $this->services_model->createServices(array(
          'category_id' => $this->input->post('categoryId'),
          'parent_id' => $this->input->post('parentId'),
          'title'      => $this->input->post('title'),
          'name'       => $this->input->post('name'),
          'pricing_detail'       => $this->input->post('price_detail'),
          'created'    => date('d-m-Y h:i:s'),
          'updated'    => date('d-m-Y h:i:s'),
          'status'    => 1
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category Created Successfully</div>');
      }
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $data['content'] = $this->load->view('admin/services/create',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }


    function update(){
      $this->set_title("Update Services");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      if($this->input->post('updateBtn')){
        $this->services_model->updateServices($this->uri->segment(4),array(
          'title'     => $this->input->post('title'),
          'name'      => $this->input->post('name'),
          'parent_id' => $this->input->post('parentId'),
          'pricing_detail'       => $this->input->post('price_detail'),
          'updated'   => date('d-m-Y h:i:s'),
          'status'    => 1
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category updated Successfully</div>');
      }
      $content_data['services'] = $this->services_model->getServices($this->uri->segment(4));
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $data['content'] = $this->load->view('admin/services/update',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }


    function delete(){
        $this->services_model->deleteServices($this->uri->segment(4));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category deleted Successfully</div>');
        redirect('admin/services');
    }



}
?>
