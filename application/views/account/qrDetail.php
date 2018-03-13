<?php echo $this->session->flashdata('alert');?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Load Facebook SDK for JavaScript -->

<?php echo form_open('account/payment_settings/qrDetail');?>
<div class="row">
   <div class="col-md-12">
      <table class="table">
        <tr><td colspan="2">
          <a href="<?php echo base_url();?>account/payment_settings/bankDetail" class="btn btn-primary">Bank Detail</a>
          <a href="<?php echo base_url();?>account/payment_settings/cardDetail" class="btn btn-primary">Add CreditCard</a>
          <a href="<?php echo base_url();?>account/payment_settings/qrDetail" class="btn btn-primary">QR Payment Code</a>
          <a href="<?php echo base_url();?>account/westernUnionAndMoneyGram" class="btn btn-primary">Western Union & MoneyGram</a>
        </td></tr>
        <?php if($qrCodeFile){ ?>
        <tr>
            <th><h3>Share this code</h3> </th>
            <th>
             <div class="thumbnail">
               <img src="<?php echo base_url();?>/QR_CODES/<?php echo $qrCodeFile;?>" />
             </div>
            </th>
        </tr>
        <tr>
            <th>Share to Social Network</th>
            <th>

              <!-- Your share button code -->
              <div class="fb-share-button"
               data-href="<?php echo base_url();?>wallet/<?php echo $user['id'];?>"
               data-layout="button_count">
              </div>
            </th>
        </tr>
      <?php }else{ "No QR Code Please Generate A New Code" ;} ?>
        <tr>
            <th></th>
           <th><input type="submit" name="updateQRDetail" class="btn btn-primary" value="Delete & Create New" /></th>
        </tr>
      </table>
   </div>
</div>
<?php echo form_close();?>
