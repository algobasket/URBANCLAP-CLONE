<div class="row">
  <?php $account = json_decode($getMyWesternUnionAndMoneyGram['json']) ?>
  <?php echo form_open('account/westernUnionAndMoneyGram');?>
  <table class="table">
    <tr><td colspan="2">
      <a href="<?php echo base_url();?>account/payment_settings/bankDetail" class="btn btn-primary">Bank Detail</a>
      <a href="<?php echo base_url();?>account/payment_settings/cardDetail" class="btn btn-primary">Add CreditCard</a>
      <a href="<?php echo base_url();?>account/payment_settings/qrDetail" class="btn btn-primary">QR Payment Code</a>
      <a href="<?php echo base_url();?>account/westernUnionAndMoneyGram" class="btn btn-primary">Western Union & MoneyGram</a>
    </td></tr>
   <tr>
    <td>My Western Union Id</td>
    <td><input type="text" name="westernUnionId" class="form-control" value="<?php echo $account->westernUnionId;?>" /></td>
   </tr>
   <tr>
    <td>My Western Union Email</td>
    <td><input type="text" name="westernUnionEmail" class="form-control" value="<?php echo $account->westernUnionEmail;?>"/></td>
   </tr>
   <tr>
    <td>My MoneyGram Id</td>
    <td><input type="text" name="moneyGramId" class="form-control" value="<?php echo $account->moneyGramId ;?>"/></td>
   </tr>
   <tr>
    <td>My MoneyGram Email</td>
    <td><input type="text" name="moneyGramEmail" class="form-control" value="<?php echo $account->moneyGramEmail;?>"/></td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="update" class="btn btn-primary" /></td>
   </tr>
  </table>
  <?php echo form_close();?>
</div>
