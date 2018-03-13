<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Commission_model extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->_db = 'fees';
  }

  function list(){
   $query = $this->db->query("SELECT * FROM fees");
   return $query->result_array();
  }

  function updateCommission($data){
     $this->db->where('id',1);
     $this->db->update('fees',$data);
     return true;
  }


}

?>
