<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller {

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
      $this->set_title("Categories");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $data['content'] = $this->load->view('admin/categories/index',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }

    function create(){
      $this->set_title("Categories");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
       //start of file upload code
        $config['upload_path'] = './uploads/admin/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time().rand(1,9999999);
        $this->load->library('upload',$config);
        

      if($this->input->post('createBtn')){
        if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $this->categories_model->createCategory(array(
                'parent_id'   => $this->input->post('categoryId'),
                'title'   => $this->input->post('title'),
                'name'    => $this->input->post('name'),
                'img'     => $uploadData['file_name'],
                'created' => date('d-m-Y h:i:s'),
                'updated' => date('d-m-Y h:i:s')
            ));
           $this->session->set_flashdata('alert','<div class="alert alert-success">Category Created Successfully</div>');
        }
      }
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $data['content'] = $this->load->view('admin/categories/create',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }

    function update(){
      $this->set_title("Categories");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);
      $content_data = array(
       'user'     => $user
     );
      if($this->input->post('updateBtn')){
        $this->categories_model->updateCategory($this->uri->segment(4),array(
          'parent_id'   => $this->input->post('categoryId'),
          'title'   => $this->input->post('title'),
          'name'    => $this->input->post('name'),
          'updated' => date('d-m-Y h:i:s')
        ));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category updated Successfully</div>');
      }
      $content_data['categories'] = $this->categories_model->getAllCategory();
      $content_data['getCategory'] = $this->categories_model->getCategory($this->uri->segment(4));
      $data['content'] = $this->load->view('admin/categories/update',$content_data,TRUE);
      $this->load->view($this->template, $data);
    }

    function delete(){
        $this->categories_model->deleteCategory($this->uri->segment(4));
        $this->session->set_flashdata('alert','<div class="alert alert-success">Category deleted Successfully</div>');
        redirect('admin/categories');
    }



}
?>
