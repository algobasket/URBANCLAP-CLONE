<?php
class Services_model extends CI_Model{
   function createServices($data){
     $this->db->insert('services',$data);
     return true;
   }

   function updateServices($id,$data){
     $this->db->where('id',$id);
     $this->db->update('services',$data);
     return true;
   }

   function deleteServices($id){
     $this->db->where('id',$id);
     $this->db->delete('services');
     return true;
   }

   function getServices($id){
    $query = $this->db->select('services.*,categories.title as categoryName')
                      ->from('services')
                      ->join('categories','categories.id = services.category_id','left')
                      ->where('services.id',$id)
                      ->get();
   return $query->result_array();
   }

   function getServiceNameFromId($id){
     $query = $this->db->select('title')
                       ->from('services')
                       ->where('id',$id)
                       ->get();
    return $query->result_array()[0]['title'];
   }

   function getAllServices(){
     $query = $this->db->select('services.*,categories.title as categoryName')
                       ->from('services')
                       ->join('categories','categories.id = services.category_id','left')
                       ->get();
    return $query->result_array();
   }


}
 ?>
