<?php echo $this->session->flashdata('alert');?>

<div class="row">
  <h3>Loan Record   <?php echo anchor('account/loan_apply','Apply For Loan','class="btn btn-primary pull-right"');?></h3>

  <table class="table">

   <tr>
     <th>Loan ID</th>
     <th>Loan Amount</th>
     <th>Interest Rate(%)</th>
     <th>Loan Tenure(Years)</th>
     <th>Status</th>
   </tr>
   <?php if(is_array($getAllUserLoan)){
         foreach($getAllUserLoan as $list){ ?>
           <tr>
             <td><?php echo $list['loanExternalID'];?></td>
             <td><?php echo $list['loan_amount'];?></td>
             <td><?php echo $list['interest'];?></td>
             <td><?php echo $list['time'];?></td>
             <td><?php echo $list['name'];?></td>
           </tr>
   <?php
     }
   }else{ ?>
     <tr>
       <th colspan="5">No Loan Data to display</th>
     </tr>
   <?php
     }
   ?>
  </table>
</div>
