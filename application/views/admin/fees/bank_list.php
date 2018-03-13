<?php echo $this->session->flashdata('alert');?>
<?php echo anchor('admin/fees/putBankList','Add Bank','class="btn btn-primary"');?>
<div class="row">
  <table class="table">
    <tr>
      <td colspan="3"><h3>Bank List</h3></td>
    </tr>
   <tr>
     <td>
       No
     </td>
     <td>
      Bank Name
     </td>
     <td>
       Status
     </td>
   </tr>
   <?php $i = 1; foreach($getBankList as $list){ ?>
     <tr>
       <td>
         <?php echo $i;?>
       </td>
       <td>
        <?php echo $list['bank_name'];?>
       </td>
       <td>
        <?php echo $list['status'];?>
       </td>
     </tr>
   <?php $i++ ; } ?>

  </table>
  <hr>

</div>
