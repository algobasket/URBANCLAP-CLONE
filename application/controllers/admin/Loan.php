<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends Admin_Controller {

    function __construct()
    {
       parent::__construct();
       $this->load->model('loan_model');
    }

    function index(){
      $data['page_title'] = "Loan Management";
      $data['page_header'] = "Loan Management";
      $content['lists'] = $this->loan_model->list();
      $data['content'] = $this->load->view('admin/loan/index',$content, TRUE);
      $this->load->view($this->template,$data);
    }

    function create(){
      if($this->input->post('create_loan'))
      {
         $interest_amount = $this->input->post('loan_amount') * $this->input->post('interest')/100;
         $total_amount = $this->input->post('loan_amount') + $interest_amount ;
         $this->loan_model->create(array(
           'user_id' => $this->input->post('user'),
           'loanExternalID' => strtoupper(uniqid()),
           'loan_amount' => $this->input->post('loan_amount'),
           'interest' => $this->input->post('interest'),
           'interest_amount' =>  $interest_amount,
           'time' => $this->input->post('time_period'),
           'total_amount' => $total_amount,
           'created' => date('d-m-Y h:i:s'),
           'updated' => date('d-m-Y h:i:s'),
           'status' => $this->input->post('status')
         ));
         $this->session->set_flashdata('alert','<div class="alert alert-success">Loan Created Successfully</div>');
      }
      $data['page_title'] = "Loan Management";
      $data['page_header'] = "Create Loan";
      $content['content'] = $this->loan_model->userList();
      $data['content'] = $this->load->view('admin/loan/create',$content , TRUE);
      $this->load->view($this->template,$data);
    }

    function update(){
      if($this->input->post('update_loan'))
      {
         $this->loan_model->update($this->uri->segment(4),array(
           'user_id'     => $this->input->post('user'),
           'loan_amount' => $this->input->post('loan_amount'),
           'interest'    => $this->input->post('interest'),
           'time'        => $this->input->post('time_period'),
           'updated'     => date('d-m-Y h:i:s'),
           'status'      => $this->input->post('status')
         ));
         $this->session->set_flashdata('alert','<div class="alert alert-success">Loan Updated Successfully</div>');
      }
      $data['page_title'] = "Loan Management";
      $data['page_header'] = "Update Loan";
      $content['userList'] = $this->loan_model->userList();
      $content['loanDetail'] = $this->loan_model->loanDetail($this->uri->segment(4));
      $data['content'] = $this->load->view('admin/loan/update',$content,TRUE);
      $this->load->view($this->template,$data);
    }

    function delete(){
        $this->loan_model->delete($this->uri->segment(4));
        redirect('admin/loan');
    }

    function releaseFund(){
      // include APPPATH.'/libraries/Hosted_Checkout/api_lib.php';
      // include APPPATH.'/libraries/Hosted_Checkout/configuration.php';
      // include APPPATH.'/libraries/Hosted_Checkout/connection.php';
      $this->load->model('users_model');
      $this->load->model('payment_model');
      $this->set_title("Payment Page");
      $data = $this->includes;
      $user = $this->users_model->get_user($this->user['id']);

      $data['page_title'] = "Release Loan Fund";
      $data['page_header'] = "Release Loan";
      if($this->input->post('release_amount'))
      {
         $this->loan_model->releaseLoanAmount($this->input->post('loan_amount_receiver'),array(
           'debit_base' => $this->input->post('loan_amount')
         ));
         $this->loan_model->updateUserLoanStatus($this->uri->segment(4),array(
           'started_on' => date('d-m-Y h:i:s'),
           'status' => 1
         ));
         $this->session->set_flashdata('alert','<div class="alert alert-success">Loan Amount Released</div>');
      }
      $content_data['loanDetail'] = $this->loan_model->loanDetail($this->uri->segment(4));
      $data['content'] = $this->load->view('admin/loan/releaseFund',$content_data,TRUE);
      $this->load->view($this->template,$data);
    }

    function cancelFund(){
       $this->loan_model->delete($this->uri->segment(4));
       $this->session->set_flashdata('alert','<div class="alert alert-danger">Loan Cancelled</div>');
       redirect('admin/loan');
    }



  }
?>
