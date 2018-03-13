<style>
tr >td : first-child{
  padding:8px !important;
  line-height:3px !important
}
</style>
<div class="row">
  <h3><?php echo anchor('account/projects/projectsCreated','Projects Created','class="btn btn-success"');?>
   <?php echo anchor('account/projects/assignedProjects','Projects Assigned','class="btn btn-success"');?>
  </h3>

  <?php echo $this->session->flashdata('alert');?>
   <table class="table table-hover">
     <tr>
       <td>ServiceId</td>
       <td>CategoryId</td>
       <td>AssignedUser</td>
       <td>created | updated</td>
       <td>status</td>
       <td></td>
     </tr>

       <?php foreach($projectsCreated as $job){ ?>
         <tr>
           <td><?php echo $job['serviceName'];?></td>
           <td><?php echo $job['categoryName'];?></td>
           <td><?php echo $job['assignedUser'];?><br></td>
           <td><?php echo $job['created'];?><br><?php echo $job['updated'];?></td>
           <td><?php echo $job['statusName'];?></td>
           <td>
              <br>
             <?php echo anchor('admin/projects/description/'.$job['id'],'Read Detail','class="btn btn-success btn-xs"');?><br>
             <?php echo anchor('admin/projects/delete/'.$job['id'],'Delete');?>
           </td>
         </tr>
       <?php } ?>

   </table>


</div>
