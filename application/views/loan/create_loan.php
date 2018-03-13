<?php echo $this->session->flashdata('alert');?>

<div class="row">
  <h3>Apply For Loan   <?php echo anchor('account/loan','Loan Record','class="btn btn-primary pull-right"');?></h3>
  <?php echo form_open('account/loan_apply');?>
  <table class="table">

   <tr>
     <th>Loan Amount</th>
     <th>
      <input type="number" name="loan_amount" class="form-control" />
     </th>
   </tr>
   <tr>
     <th>Interest Rate</th>
     <th><input type="number" name="interestRate" class="form-control" /></th>
   </tr>
   <tr>
     <th>Loan Tenure</th>
     <th><input type="number" name="loanTenure" class="form-control" /></th>
   </tr>
   <tr>
     <th>Interest Rate</th>
     <th><input type="submit" name="loanApplyBtn" value="Click to Apply" class="btn btn-primary" /></th>
   </tr>
  </table>
  <?php echo form_close();?>
</div>
