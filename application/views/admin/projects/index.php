<div class="row">
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

       <?php foreach($jobs as $job){ ?>
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
<script>
  function assignedUser(obj){
    $('#myModal').modal('show');
    var data = {
      'jobId' : $(obj).attr('data-jobId'),
      'serviceId' : $(obj).attr('data-serviceId')
    }
    $.ajax({
      type:'POST',
      url:'<?php echo base_url();?>admin/projects/workerByServiceAjax',
      data:data,
      success:function(html){
        $('.assignUserList').html(html).show();
      }
    });
  }
</script>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Available Workers List</h4>
      </div>
      <div class="modal-body">
        <table class="table assignUserList" >
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
