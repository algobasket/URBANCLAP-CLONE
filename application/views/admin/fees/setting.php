<?php echo $this->session->flashdata('alert');?>
<?php echo anchor('admin/fees/getBankList','Get Bank List','class="btn btn-primary"');?>
<div class="row">
  <?php echo form_open('admin/fees/setting') ;?>
  <table class="table">
    <tr>
      <td colspan="3"><h3>Master Card API</h3></td>
    </tr>
   <tr>
     <td>
      JSON DATA
     </td>
     <td>
     <textarea name="mastercardApiJson" class="form-control"><?php echo @$mastercardApiJson;?></textarea>
     </td>
     <td>
     <input name="mastercardUpdate" type="submit" class="btn btn-primary" value="Update" />
     </td>
   </tr>
  </table>
  <?php echo form_close();?>
  <hr>

  <?php echo form_open('admin/fees/setting') ;?>
  <table class="table">
    <tr>
      <td colspan="3"><h3>CyberSecure API</h3></td>
    </tr>
   <tr>
     <td>
      JSON DATA
     </td>
     <td>
     <textarea name="cybersecureApiJson" class="form-control"><?php echo $cybersecureApiJson;?></textarea>
     </td>
     <td>
     <input name="cybersecureUpdate" type="submit" class="btn btn-primary" value="Update" />
     </td>
   </tr>
  </table>
  <?php echo form_close();?>
</div>
