<div class="row">

  <h3><?php echo anchor('account/projects/projectsCreated','Projects Created','class="btn btn-success"');?>
   <?php echo anchor('account/projects/assignedProjects','Projects Assigned','class="btn btn-success"');?>
  </h3>

  <?php echo $this->session->flashdata('alert');?>
   <table class="table">
     <tr class="alert-info">
       <td>#</td>
       <td>User</td>
       <td>ServiceId</td>
       <td>CategoryId</td>
       <td>AssignedUser</td>
       <td>Response</td>
       <td>created<br>updated</td>
       <td>status</td>
       <td></td>
     </tr>

       <?php foreach($assignedProjects as $job){ ?>  
         <tr>
           <td>#</td>
           <td><?php echo $job['fullName'];?></td>
           <td><?php echo $job['serviceName'];?></td>
           <td><?php echo $job['categoryName'];?></td>
           <td><?php echo $job['assignedUser'];?><br></td>
           <td>
             <?php
               $json =  json_decode($job['json'],true);
               foreach($json['radio'] as $r){
                 $q = $r[0];
                 echo $q;
                 echo '<br>';
               }
             ?>
           </td>
           <td><?php echo $job['created'];?><br><?php echo $job['updated'];?></td>
           <td><?php echo $job['statusName'];?></td>
           <td>
             <a href="javascript:void(0)" class="btn btn-success btn-sm" data-categoryId="<?php echo $job['category_id'];?>" data-serviceId="<?php echo $job['service_id'];?>" data-jobId="<?php echo $job['id'];?>" onclick="assignedUser(this)">Assign User/Worker</a>
             <?php echo anchor('admin/projects/update/'.$job['id'],'Update');?><br>
             <?php echo anchor('admin/projects/delete/'.$job['id'],'Delete');?>
           </td>
         </tr>
       <?php } ?>

   </table>


</div>
