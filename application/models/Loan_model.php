<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Loan_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->_db = 'loan';
    }

    function list(){
      $query = $this->db->query("SELECT loan.*,loan.id as loan_id,users.*,status.* FROM loan LEFT JOIN status  ON status.id = loan.status LEFT JOIN users ON users.id = loan.user_id");
      return $query->result_array();
    }

    function loanDetail($id){
      $query = $this->db->query("SELECT loan.*,loan.id as loan_id,users.*,status.*,loan.status as loan_status_id FROM loan LEFT JOIN status  ON status.id = loan.status LEFT JOIN users ON users.id = loan.user_id WHERE loan.id = ?",array($id));
      return $query->result_array();
    }

    function create($data){
       $this->db->insert('loan',$data);
       return true;
    }

    function update($id,$data){
      $this->db->where('id',$id);
      $this->db->update('loan',$data);
      return true;
    }

    function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('loan');
      return true;
    }

    function userList(){
       $query = $this->db->query("SELECT users.*,users.id as user_id,role.* FROM users LEFT JOIN role ON role.id = users.role_id WHERE users.role_id in (6) ");
       return $query->result_array();
    }

    function getUserAmount($uid){
       $query = $this->db->query("SELECT debit_base FROM users WHERE id = ?",array($uid));
       return $query->result_array()[0]['debit_base'];
    }

    function releaseLoanAmount($uid,$data){
      $data['debit_base'] = $this->getUserAmount($uid) + $data['debit_base']; 
      $this->db->where('id',$uid);
      $this->db->update('users',$data);
      return true;
    }

    function updateUserLoanStatus($loanId,$data){
      $this->db->where('id',$loanId);
      $this->db->update('loan',$data);
      return true;
    }



  }
  ?>
