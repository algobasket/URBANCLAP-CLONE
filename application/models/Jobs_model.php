<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function projectsCreatedByUser($uid){ 
    $query = $this->db->select('jobs.*,categories.title as categoryName,jobs.assigned_user_id as assignedUser,services.title as serviceName,status.name as statusName,CONCAT(users.first_name," ",users.last_name) as fullName')
                      ->from('jobs')
                      ->join('users','users.id = jobs.user_id','left')
                      ->join('categories','categories.id = jobs.category_id','left')
                      ->join('services','services.id = jobs.service_id','left')
                      ->join('status','status.id=jobs.status','left')
                      ->where('jobs.user_id',$uid)
                      ->get();
    return $query->result_array();
  }

  function assignedProjects($uid){ 
       $query = $this->db->select('jobs.*,categories.title as categoryName,jobs.assigned_user_id as assignedUser,services.title as serviceName,status.name as statusName,CONCAT(users.first_name," ",users.last_name) as fullName')
                         ->from('jobs')
                         ->join('users','users.id = jobs.user_id','left')
                         ->join('categories','categories.id = jobs.category_id','left')
                         ->join('services','services.id = jobs.service_id','left')
                         ->join('status','status.id=jobs.status','left')
                         ->where('jobs.assigned_user_id',$uid)
                         ->get();
       return $query->result_array();
  }

  function projectDetail($jobId){
    $query = $this->db->select('jobs.*,categories.title as categoryName,jobs.assigned_user_id as assignedUser,services.title as serviceName,status.name as statusName,CONCAT(users.first_name," ",users.last_name) as fullName')
                      ->from('jobs')
                      ->join('users','users.id = jobs.user_id','left')
                      ->join('categories','categories.id = jobs.category_id','left')
                      ->join('services','services.id = jobs.service_id','left')
                      ->join('status','status.id=jobs.status','left')
                      ->where('jobs.id',$jobId)
                      ->get();
    return $query->result_array();
  }

  function postCustomJob($array){
     $this->db->insert('jobs',$array);
     //echo $this->db->last_query();
     return true;
  }



}

?>
