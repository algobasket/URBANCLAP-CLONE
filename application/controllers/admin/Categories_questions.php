<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_questions extends Admin_Controller {
    /**
      * Constructor
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
		    $this->load->model('categories_model');
    }

    function index(){
      $this->set_title("Categories Questions");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
      );
      $content_data['categories_questions'] = $this->categories_model->getAllCategoryQuestions();
      $data['content'] = $this->load->view('admin/categories-questions/index',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }


    function create(){
      $this->set_title("Create Categories Questions");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      if($this->input->post('createBtn')){
        $this->categories_model->createCategoryQuestions(array(
          'category_id' => $this->input->post('categoryId'),
          'parent_id'   => $this->input->post('parentId'),
          'title'       => $this->input->post('title'),
          'name'        => $this->input->post('name'),
          'json'        => $this->input->post('json'),
          'created'     => date('d-m-Y h:i:s'),
          'updated'     => date('d-m-Y h:i:s')
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category Created Successfully</div>');
      }
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $data['content'] = $this->load->view('admin/categories-questions/create',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }


    function update(){
      $this->set_title("Update Categories Questions");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      if($this->input->post('updateBtn')){
        $this->categories_model->updateCategoryQuestions($this->uri->segment(4),array(
          'title'   => $this->input->post('title'),
          'name'    => $this->input->post('name'),
          'json'        => $this->input->post('json'),
          'updated' => date('d-m-Y h:i:s')
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category updated Successfully</div>');
      }
      $content_data['getCategory'] = $this->categories_model->getCategoryQuestions($this->uri->segment(4));
      $data['content'] = $this->load->view('admin/categories-questions/update',$content_data,TRUE);
      $this->load->view($this->template, $data);
    } 

    function delete(){
        $this->categories_model->deleteCategory($this->uri->segment(4));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category deleted Successfully</div>');
        redirect('admin/categories');
    }

}
?>
