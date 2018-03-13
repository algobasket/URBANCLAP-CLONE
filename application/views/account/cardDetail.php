<?php echo $this->session->flashdata('alert');?>
<?php echo form_open('account/payment_settings/cardDetail');?>
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
            <th>CARD NUMBER</th>
              <th><input type="number" name="cardNumber" class="form-control" value="<?php echo $getCardDetail['cardNumber'];?>"  placeholder="card number" required/></th>
        </tr>
        <tr>
            <th>NAME ON CARD</th>
              <th><input type="text" name="nameOnCard" class="form-control" value="<?php echo $getCardDetail['nameOnCard'];?>" placeholder="YOur Name on card" required/></th>
        </tr>
        <tr>
            <th>CARD TYPE</th>
            <th>
              <select name="card_type" class="form-control">
                <option value="mastercard" <?php echo ($getCardDetail['card_type'] == "mastercard") ? "selected" : "" ;?> >MASTER CARD</option>
                <option value="visacard" <?php echo ($getCardDetail['card_type'] == "visacard") ? "selected" : "" ;?> >VISA</option>
              </select>
            </th>
        </tr>
        <tr>
            <th>CREDIT | DEBIT CARD</th>
            <th>
              <select name="credit_debit" class="form-control">
                <option value="credit" <?php echo ($getCardDetail['credit_debit'] == "credit") ? "selected" : "" ;?>>Credit</option>
                <option value="debit" <?php echo ($getCardDetail['credit_debit'] == "debit") ? "selected" : "" ;?>>Debit</option>
              </select>
            </th>
        </tr>
        <tr>
           <th>CVV NUMBER</th>
           <th><input type="text" name="cvv_number" class="form-control" value="<?php echo $getCardDetail['cvv_number'];?>" placeholder="Enter CVV Number" required/></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
              <select name="status" class="form-control">
                <option value="1" <?php echo ($getCardDetail['status'] == 1) ? "selected" : "" ;?> >Active</option>
                <option value="2" <?php echo ($getCardDetail['status'] == 2) ? "selected" : "" ;?> >Pending</option>
                <option value="3" <?php echo ($getCardDetail['status'] == 3) ? "selected" : "" ;?> >Waiting</option>
                <option value="4" <?php echo ($getCardDetail['status'] == 4) ? "selected" : "" ;?> >Deactive</option>
              </select>
            </th>
        </tr>
        <tr>
            <th></th>
           <th><input type="submit" name="updateCardDetail" value="update" class="btn btn-primary" /></th>
        </tr>
      </table>
   </div>
</div>
<?php echo form_close();?>
