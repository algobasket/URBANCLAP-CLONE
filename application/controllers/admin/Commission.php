<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commission extends Admin_Controller {

    /**
    * Constructor
    */
    function __construct()
    {
        parent::__construct();
		    $this->load->model("commission_model");
    }

    function index(){
      $data['page_title'] = "Fees/Commission Management";
      $data['page_header'] = "Fees/Commission Management";
      $content['lists'] = $this->commission_model->list();
      if($this->input->post('updateCommissionFees')){
         $this->commission_model->updateCommission(array(
           'mastercard_fees'    => $this->input->post('mastercard_fees'),
           'mastercard_check'   => $this->input->post('mastercard_check'),
           'westernunion_fees'  => $this->input->post('westernunion_fees'),
           'westernunion_check' => $this->input->post('westernunion_check'),
           'moneygram_fee'     => $this->input->post('moneygram_fee'),
           'moneygram_check'    => $this->input->post('moneygram_check')
         ));
         $this->session->set_flashdata('alert','<div class="alert alert-success">Fees Updated</div>');
      }
      $data['content'] = $this->load->view('admin/commission/index',$content, TRUE);
      $this->load->view($this->template,$data);
    }

}
 ?>
