<tr>
 <td>Name</td>
 <td>Review</td>
 <td>Action</td>
</tr>
<?php foreach($usersList as $u){ ?>
<tr>
   <td><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></td>
   <td><?php echo $u['last_name'];?></td>
   <td>
     <a href="<?php echo base_url();?>admin/projects/assignJobWorker/<?php echo $jobId;?>/<?php echo $u['id'];?>" class="btn btn-success btn-sm">Assign</a>
   </td>
</tr>
<?php } ?>
