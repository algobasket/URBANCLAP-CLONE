<?php echo $this->session->flashdata('alert');?>
<div class="row">
 <?php echo form_open('admin/commission');?>
 <?php foreach($lists as $list){} ?>
  <table class="table">
    <tr>
       <td>Western Union Fees</td>
       <td><input type="text" name="westernunion_fees" class="form-control" value="<?php echo $list['westernunion_fees'];?>" /></td>
    </tr>
    <tr>
       <td>Western Union Check</td>
       <td><input type="text" name="westernunion_check" class="form-control" value="<?php echo $list['westernunion_check'];?>"/></td>
    </tr>
    <tr>
       <td>Mastercard Fees</td>
       <td><input type="text" name="mastercard_fees" class="form-control" value="<?php echo $list['mastercard_fees'];?>"/></td>
    </tr>
    <tr>
       <td>Mastercard Check</td>
       <td><input type="text" name="mastercard_check" class="form-control" value="<?php echo $list['mastercard_check'];?>"/></td>
    </tr>
    <tr>
       <td>Moneygram Fees</td>  
       <td><input type="text" name="moneygram_fee" class="form-control" value="<?php echo $list['moneygram_fee'];?>"/></td>
    </tr>
    <tr>
       <td>Moneygram Check</td>
       <td><input type="text" name="moneygram_check" class="form-control" value="<?php echo $list['moneygram_check'];?>"/></td>
    </tr>
    <tr>
       <td></td>
       <td><input type="submit" name="updateCommissionFees" class="form-control" value="Commission Update" /></td>
    </tr>
  </table>
  <?php echo form_close();?>
</div>
