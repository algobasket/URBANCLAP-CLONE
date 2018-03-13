<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

   function __construct(){

   }

   function getBankDetail($uid){
     $query = $this->db->query("SELECT * FROM payment_settings WHERE module_name ='bank_detail' AND user_id = ?",array($uid));
     return $query->result_array()[0];
   }

   function updateBankDetail($uid,$data){
      if(is_array($this->getBankDetail($id)))
      {
        $json = array('json' => json_encode($data,true));
        $this->db->where(array(
            'user_id' => $uid,
            'module_name' => "bank_detail"
          ));
        $this->db->update('payment_settings',$json);
      }else{
         $this->db->insert('payment_settings',array(
           'user_id' => $uid,
           'module_name' => "bank_detail",
           'json' => json_encode($data,true)
         ));
      }
     return true;
   }

   function getCardDetail($uid){
     $query = $this->db->query("SELECT * FROM payment_settings WHERE module_name ='card_detail' AND user_id = ?",array($uid));
     return $query->result_array()[0];
   }

   function updateCardDetail($uid,$data){
      if(is_array($this->getCardDetail($id)))
      {
        $json = array('json' => json_encode($data,true));
        $this->db->where(array(
            'user_id' => $uid,
            'module_name' => "card_detail"
          ));
        $this->db->update('payment_settings',$json);
      }else{
         $this->db->insert('payment_settings',array(
           'user_id' => $uid,
           'module_name' => "card_detail",
           'json' => json_encode($data,true)
         ));
      }
     return true;
   }

   function updateUserQRCode($uid,$filename){
        $this->db->where('id',$uid);
        $this->db->update('users',array( 'qrcode' => $filename ));
        return true;
   }

   function getUserQRCode($uid){
        $query = $this->db->query("SELECT qrcode FROM users WHERE id = ?",array($uid));
        return $query->result_array()[0]['qrcode'];
   }

   function getUserAmount($uid){
      $query = $this->db->query("SELECT debit_base FROM users WHERE id = ?",array($uid));
      return $query->result_array()[0]['debit_base'];
   }

   function addUserTransaction($data){
     $this->db->insert("transactions",$data);
     return true;
   }

   function depositAmount($user,$amount,$orderId){
     $currentAmount = $this->getUserAmount($user['id']);
     $this->addUserTransaction(array(
       'sender_user_id'   => 1,
       'receiver_user_id' => $user['id'],
       'sender'   => 'MASTERCARD',
       'receiver' => $user['username'],
       'amount'   => intval($amount),
       'status'   => 1,
       'time'     => date('Y-m-d h:i:s'),
       'currency' => 'debit_base'
     ));
     $data = array(
       'debit_base' => intval($amount) + intval($currentAmount)
     );
     $this->db->where('id',$user['id']);
     $this->db->update('users',$data);
   }

   function mastercardApi(){
     $query = $this->db->query("SELECT value FROM settings WHERE name = 'mastercard_api'");
     return json_decode($query->result_array()[0]['value'],true);
   }

   function applyLoan($data){
     $this->db->insert("loan",$data);
     return true;
   }

   function getAllUserLoan($uid){
     $query = $this->db->query("SELECT loan.*,status.* FROM loan INNER JOIN status ON status.id = loan.status WHERE loan.user_id = ?",array($uid));
     return $query->result_array();
   }


   function getMyWesternUnionAndMoneyGram($uid){
     $query = $this->db->query("SELECT json FROM payment_settings WHERE module_name ='westernU_moneygram' AND user_id = ?",array($uid));
     return $query->result_array()[0];
   }

   function updateMyWesternUnionAndMoneyGram($uid,$data){
      if(is_array($this->getMyWesternUnionAndMoneyGram($uid)))
      {
        $json = array('json' => json_encode($data,true));
        $this->db->where(array(
            'user_id' => $uid,
            'module_name' => "westernU_moneygram"
          ));
        $this->db->update('payment_settings',$json);
      }else{
         $this->db->insert('payment_settings',array(
           'user_id' => $uid,
           'module_name' => "westernU_moneygram",
           'json' => json_encode($data,true)
         ));
      }
     return true;
   }


}
 ?>
