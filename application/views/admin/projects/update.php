<div class="row">
  <?php echo anchor('admin/projects/completed/'.$this->uri->segment(4),'Mark As Completed','class="btn btn-success"');?> 
  <?php echo $this->session->flashdata('alert');?>
  <?php form_open('admin/projects/update/'.$this->uri->segment(4));?>
   <table class="table">
     <?php foreach($jobs as $job){ } ?>
     <tr>
       <td>Request Form Data</td>
       <td><textarea class="form-control" name="json"><?php echo json_encode(json_decode($job['json']),JSON_PRETTY_PRINT);?></textarea></td>
     </tr>
     <tr>
       <td></td>
       <td><?php echo form_submit('btnUpdateJobs','update','class="btn btn-danger"');?></td>
     </tr>


   </table>
   <?php echo form_close();?>
</div>
