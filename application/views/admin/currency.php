<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php echo form_open(site_url("admin/currency/update"), array("" => "")) ?>
<div class="row">
  <div class="col-md-12">
    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
      <div class="card-header bordered">
        <div class="header-block">
          <h3 class="title"><?php echo lang('admin disputes all_dispute'); ?></h3>
        </div>
     </div>
     <div class="card-block">
              <div class="row">
        <?php // Base currency ?>
        <div class="form-group col-sm-8">
            <label>Name base currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="base_name" name="base_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->base_name ?>"> 
        </div>
        <div class="form-group col-sm-4">
            <label>Code base currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="base_code" name="base_code" placeholder="USD Wallet" value="<?php echo $this->currencys->display->base_code ?>"> 
        </div>
    </div>

    <div class="row">
        <?php //Extra currency 1?>
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra1_check" value="1" <?php if($this->currencys->display->extra1_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 1 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra1_name" name="extra1_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra1_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 1 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra1_code" name="extra1_code" placeholder="USD" value="<?php echo $this->currencys->display->extra1_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 1 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra1_rate" name="extra1_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra1_rate ?>"> 
        </div>
        
    </div>

    <div class="row">
        <?php //Extra currency 2?>
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra2_check" value="1" <?php if($this->currencys->display->extra2_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 2 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra1_name" name="extra2_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra2_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 2 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra2_code" name="extra2_code" placeholder="USD" value="<?php echo $this->currencys->display->extra2_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 2 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra2_rate" name="extra2_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra2_rate ?>"> 
        </div>
        
    </div>

    <div class="row">
        <?php //Extra currency 3?>
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra3_check" value="1" <?php if($this->currencys->display->extra3_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 3 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra3_name" name="extra3_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra3_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 3 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra3_code" name="extra3_code" placeholder="USD" value="<?php echo $this->currencys->display->extra3_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 3 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra3_rate" name="extra3_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra3_rate ?>"> 
        </div>
        
    </div>

    <div class="row">
        <?php //Extra currency 4?>
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra4_check" value="1" <?php if($this->currencys->display->extra4_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 4 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra4_name" name="extra4_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra4_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 4 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra4_code" name="extra4_code" placeholder="USD" value="<?php echo $this->currencys->display->extra4_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 4 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra4_rate" name="extra4_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra4_rate ?>"> 
        </div>
        
    </div>

    <div class="row">
        <?php //Extra currency 5?>
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra5_check" value="1" <?php if($this->currencys->display->extra5_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 5 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra5_name" name="extra5_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra5_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 4 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra5_code" name="extra5_code" placeholder="USD" value="<?php echo $this->currencys->display->extra5_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 4 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra5_rate" name="extra5_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra5_rate ?>"> 
        </div>  
    </div>

       <div class="row">
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra6_check" 
            value="1" <?php if($this->currencys->display->extra6_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 6 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra6_name" 
            name="extra6_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra6_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 6 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra6_code" 
            name="extra6_code" placeholder="USD" value="<?php echo $this->currencys->display->extra6_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 6 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra6_rate" name="extra6_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra6_rate ?>"> 
        </div>  
       </div>


        <div class="row">
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra7_check" 
            value="1" <?php if($this->currencys->display->extra7_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 7 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra7_name" 
            name="extra7_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra7_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 7 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra7_code" 
            name="extra7_code" placeholder="USD" value="<?php echo $this->currencys->display->extra7_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 7 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra7_rate" name="extra7_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra7_rate ?>"> 
        </div>  
       </div>



       <div class="row">
        <div class="form-group col-sm-1">
            <label>Activate</label>
            </br>
            <input type="checkbox" class="js-switch primary" name="extra8_check" 
            value="1" <?php if($this->currencys->display->extra8_check) echo "checked" ?>/>
        </div>
        <div class="form-group col-sm-5">
            <label>Name Extra 8 currency</label>
            <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra8_name" 
            name="extra8_name" placeholder="USD Wallet" value="<?php echo $this->currencys->display->extra8_name ?>"> 
        </div>
        <div class="form-group col-sm-3">
            <label>Code Extra 8 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra7_code" 
            name="extra8_code" placeholder="USD" value="<?php echo $this->currencys->display->extra8_code ?>"> 
        </div>
         <div class="form-group col-sm-3">
            <label>Rate Extra 8 currency</label>
          <span class="required">*</span>
            <input type="text" class="form-control underlined" id="extra8_rate" name="extra8_rate" placeholder="50.00" value="<?php echo $this->currencys->display->extra8_rate ?>"> 
        </div>  
       </div>



















     </div>



<div class="card-footer" style="text-align:right"> 
                                             <a class="btn btn-secondary btn-sm" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
                                                    <button type="submit"  class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-save"></span> <?php echo lang('core button save'); ?></button>
                                        </div>
   </div>
 </div>
</div>


<?php echo form_close(); ?>
