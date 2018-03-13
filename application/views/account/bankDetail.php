<?php echo $this->session->flashdata('alert');?>
<?php echo form_open('account/payment_settings/bankDetail');?>

<div class="row">
   <div class="col-md-12">
      <table class="table">
        <tr><td colspan="2">
          <a href="<?php echo base_url();?>account/payment_settings/bankDetail" class="btn btn-primary">Bank Detail</a>
          <a href="<?php echo base_url();?>account/payment_settings/cardDetail" class="btn btn-primary">Add CreditCard</a>
          <a href="<?php echo base_url();?>account/payment_settings/qrDetail" class="btn btn-primary">QR Payment Code</a>
          <a href="<?php echo base_url();?>account/westernUnionAndMoneyGram" class="btn btn-primary">Western Union & MoneyGram</a>
        </td></tr>
        <tr>
            <th>BANK NAME</th>
            <th>
              <select name="bank_name" class="form-control">
                <?php foreach($getBankList as $list){ ?>
                   <option value="<?php echo $list['bank_internal_id'];?>"><?php echo $list['bank_name'];?></option>
                <?php } ?>
              </select>
            </th>
        </tr>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th><input type="text" name="account_number" class="form-control" value="<?php echo @$getBankDetail['account_number'] ? @$getBankDetail['account_number'] : "";?>" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>ACCOUNT HOLDER NAME</th>
            <th><input type="text" name="account_holder_name" class="form-control" value="<?php echo $getBankDetail['account_holder_name'];?>" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>SWIFT CODE</th>
          <th><input type="text" name="swiftCode" class="form-control" value="<?php echo $getBankDetail['swiftCode'];?>" placeholder="Interest Rate %" required/></th>
        </tr>
        <tr>
            <th>ROUTING NUMBER</th>
           <th><input type="number" name="routingNumber" class="form-control" value="<?php echo $getBankDetail['routingNumber'];?>" placeholder="Time Period (Year)" required/></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
              <select name="status" class="form-control">
                <option value="1" <?php echo ($getBankDetail['status'] == 1) ? "selected" : "";?> >Active</option>
                <option value="2" <?php echo ($getBankDetail['status'] == 2) ? "selected" : "";?> >Pending</option>
                <option value="3" <?php echo ($getBankDetail['status'] == 3) ? "selected" : "";?>>Waiting</option>
                <option value="4" <?php echo ($getBankDetail['status'] == 4) ? "selected" : "";?>>Deactive</option>
              </select>
            </th>
        </tr>
        <tr>
            <th></th>
           <th><input type="submit" name="updateBankDetail" value="Update" class="btn btn-primary" /></th>
        </tr>
      </table>
   </div>
</div>
<?php echo form_close();?>
