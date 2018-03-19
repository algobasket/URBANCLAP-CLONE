<?php
class Categories_model extends CI_Model{
   function createCategory($data){
     $this->db->insert('categories',$data);
     return true;
   }

   function updateCategory($id,$data){
     $this->db->where('id',$id);
     $this->db->update('categories',$data);
     return true;
   }

   function deleteCategory($id){
     $this->db->where('id',$id);
     $this->db->delete('categories');
     return true;
   }

   function getCategory($id){
     $query = $this->db->select('*')
                       ->from('categories')
                       ->where('id',$id)
                       ->get();
    return $query->result_array();
   }

   function getAllCategory(){
     $query = $this->db->select('*')
                       ->from('categories')
                       ->get();
    return $query->result_array();
   }

   function getAllCategoryQuestions(){
     $query = $this->db->select('*')
                       ->from('categories_questions')
                       ->get();
     return $query->result_array();
   }

   function getCategoryQuestions($id){
     $query = $this->db->select('*')
                       ->from('categories_questions')
                       ->where('id',$id)
                       ->get();
    return $query->result_array();
   }

   function getCategoryIdFromCategoryName($categoryName){
     $query = $this->db->select('id')
                       ->from('categories')
                       ->like('name',$categoryName,'both')
                       ->or_like('name',$categoryName,'both')
                       ->get();
     return $query->result_array()[0]['id'];
   }

   function getCategoryQuestionsFromCategoryName($categoryName){
     $id = $this->getCategoryIdFromCategoryName($categoryName);
     $query = $this->db->select('*')
                       ->from('categories_questions')
                       ->where('id',$id)
                       ->get();
    return $query->result_array();
   }

   function getServiceIdFromServiceName($serviceName){
     $query = $this->db->select('id')
                       ->from('services')
                       ->like('name',$serviceName,'both')
                       ->or_like('name',$serviceName,'both')
                       ->get();
     return $query->result_array()[0]['id'];
   }

   function getAllServicesByCategory($categoryId){
     $query = $this->db->select('*')
                       ->from('services')
                       ->where('category_id',$categoryId)
                       ->get();
     return $query->result_array();
   }

   function getCategoryQuestionsFromCategoryNameServiceName($categoryName,$serviceName){
     $id = $this->getCategoryIdFromCategoryName($categoryName);
     $ser_id = $this->getServiceIdFromServiceName($serviceName);
     $query = $this->db->select('*')
                       ->from('categories_questions')
                       ->where('category_id = '.$id.' AND FIND_IN_SET('.$ser_id.',service_id) > 0')
                       ->get();
    return $query->result_array();
   }

   function getCategoryQuestionsFromServiceId($serviceId){
     $query = $this->db->select('*')
                       ->from('categories_questions')
                       ->where('FIND_IN_SET('.$serviceId.',service_id) > 0')
                       ->get();
    return $query->result_array();
   }


   function getServicesFromCategoryName($categoryName){
     $id = $this->getCategoryIdFromCategoryName($categoryName);
     $query = $this->db->select('*')
                       ->from('services')
                       ->where('category_id',$id)
                       ->get();
    return $query->result_array();
   }


   function getCategoryIdFromServiceId($serviceId){
      $query = $this->db->select('category_id')
                       ->from('services')
                       ->where('id',$serviceId) 
                       ->get(); 
      return $query->result_array()[0]['category_id'];
   }





   function getAllCategoryAndServices(){
       foreach($this->getAllCategory() as $category){
          $categoryData[] = $category;
          $getAllServicesByCategory = $this->getAllServicesByCategory($category['id']);
          if(is_array($getAllServicesByCategory) && count($getAllServicesByCategory) > 0){
            foreach($getAllServicesByCategory as $service){
               $serviceData[] = $service;
            }
            $data[] = array(
              'categoryData' => $categoryData,
              'serviceData' => $serviceData
            );
          }
          unset($serviceData);
          unset($categoryData);
       }
       return $data;
   }

   function createCategoryQuestions($data){
     $this->db->insert('categories_questions',$data);
     return true;
   }

   function updateCategoryQuestions($id,$data){
     $this->db->where('id',$id);
     $this->db->update('categories_questions',$data);
     return true;
   }

   function deleteCategoryQuestions($id){
     $this->db->where('id',$id);
     $this->db->delete('categories_questions');
     return true;
   }

   function postUserQuestionsAnswers($data){
     $this->db->insert('jobs',$data);
     return true;
   }

   function projectJobs(){
     $query = $this->db->select('jobs.*,categories.title as categoryName,jobs.assigned_user_id as assignedUser,services.title as serviceName,status.name as statusName,CONCAT(users.first_name," ",users.last_name) as fullName')
                       ->from('jobs')
                       ->join('users','users.id = jobs.user_id','left')
                       ->join('categories','categories.id = jobs.category_id','left')
                       ->join('services','services.id = jobs.service_id','left')
                       ->join('status','status.id=jobs.status','left')
                       ->get();
     return $query->result_array();
   } 

   function getProjectJobsFromId($id){
     $query = $this->db->select('jobs.*,categories.title as categoryName,jobs.assigned_user_id as assignedUser,services.title as serviceName,status.name as statusName,CONCAT(users.first_name," ",users.last_name) as fullName')
                       ->from('jobs')
                       ->join('users','users.id = jobs.user_id','left')
                       ->join('categories','categories.id = jobs.category_id','left')
                       ->join('services','services.id = jobs.service_id','left')
                       ->join('status','status.id=jobs.status','left')
                       ->where('jobs.id',$id)
                       ->get();
     return $query->result_array();
   }

   function updateProjectJob($id,$data){
     $this->db->where('id',$id);
     $this->db->update('jobs',$data);
     return true;
   }

   function deleteProjectJob($id){
     $this->db->where('id',$id);
     $this->db->delete('jobs');
     return true;
   }

}
 ?>
