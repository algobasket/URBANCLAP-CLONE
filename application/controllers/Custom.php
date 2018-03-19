<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Custom extends Public_Controller{ 
   
   protected $upsAccessKey = "";
   protected $upsUser = "";
   protected $upsPass = "";

   protected $stripeKey    = "";
   protected $paypalApiKey = "";

   function __construct(){
      parent::__construct();
      error_reporting(-1);
   }
   
   function createCoupon(){ die("gggg");
     // if($this->input->post('createCoupon')){
     //    $this->custom_model->createCoupon(array(
     //      'couponName' => $this->input->post('couponName'),
     //      'couponType' => $this->input->post('couponType'),
     //      'couponStartDate' => $this->input->post('couponStartDate'),
     //      'couponExpiryDate' => $this->input->post('couponExpiryDate'),
     //      'couponAmount' => $this->input->post('couponAmount') 
     //    ));
     //    $this->session->set_flashdata('alert','Coupon Created successfully');
     //    redirect('custom/coupons');
     // }
     // $data['isCreateCoupon'] = true;
     // $this->load->view('customView');
   }

   // function updateCoupon(){
   //   if($this->input->post('updateCoupon')){
   //      $this->custom_model->updateCoupon($this->uri->segment(3),array(
   //        'couponName' => $this->input->post('couponName'),
   //        'couponType' => $this->input->post('couponType'),
   //        'couponStartDate' => $this->input->post('couponStartDate'),
   //        'couponExpiryDate' => $this->input->post('couponExpiryDate'),
   //        'couponAmount' => $this->input->post('couponAmount') 
   //      ));
   //      $this->session->set_flashdata('alert','Coupon Updated successfully');
   //      redirect('custom/coupons');
   //   }
   //   $data['singleCoupon'] = $this->custom_model->singleCoupon($this->uri->segment(3));
   //   $data['isUpdateCoupon'] = true;
   //   $this->load->view('customView',$data);  
   // }

   // function singleCoupon(){
   //   $data['allCoupon'] = $this->custom_model->singleCoupon($this->uri->segment(3));
   //   $data['isSingleCoupon'] = true;
   //   $this->load->view('customView',$data);
   // }

   // function allCoupon(){
   // 	 $status = $this->uri->segment(3);
   //   $data['allCoupon'] = $this->custom_model->allCoupon($status);
   //   $data['isAllCoupon'] = true;
   //   $this->load->view('customView',$data);
   // }

   

   // function upsShippingCalculator(){ 
   //    require APPPATH.'libraries/php-ups-api-master/src/ups.php'
   // }

   // function paypal(){

   // }

   // function paypalCallBack(){
    
   // }

   // function stripe(){
   
   // }

   // function stripeCallBack(){

   // }


 }
?>