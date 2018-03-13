<?php echo $this->session->flashdata('alert');?>
<div class="row">
  <?php echo form_open('account/moneygram/');?>
  <table>
   <tr>
     <td>Deposit Via MoneyGram</td>
   </tr>
   <tr>
     <td class="alert alert-warning">
       <h3>Send payment to Our MoneyGram Account</h3>
       <h4>MoneyGram ID: GH234HFG89</h4>
       <h4>MoneyGram Email: localhost999@gmail.com</h4>
       <h4>NOTE: After you send to our MoneyGram Account please send screenshot and MTCN PIN to	no-repy@localhost99.com<br>
          We will deposit <?php echo $amount;?> to your account within 1 business day
       </h4>
     </td>
   </tr>
    <?php if($amount) : ?>
    <tr><td><h3>Amount <?php echo $amount;?> </h3><input type="hidden" name="amount" class="form-control" value="<?php echo $amount;?>" /></td></tr>
    <tr><td><br><input type="submit" name="request_fund_moneygram" value="Send Request" class="btn btn-primary" /></td></tr>
  <?php endif ;?>
  </table>
  <?php echo form_close();?>
</div>
