<?php echo $this->session->flashdata('alert');?>
<div class="row">
  <?php echo form_open('admin/fees/putBankList') ;?>
  <table class="table">
    <tr>
      <td colspan="3"><h3>Add New Bank</h3></td>
    </tr>
   <tr>
     <td>
      Bank Name
     </td>
     <td>
     <input type="text" name="bank_name" class="form-control"/>
     </td>
     <td>
     <input name="addBank" type="submit" class="btn btn-primary" value="Add Bank" />
     </td>
   </tr>
  </table>
  <?php echo form_close();?>
  <hr>

</div>
