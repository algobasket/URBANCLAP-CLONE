<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <div class="row">
      <div class="col-md-6">
         <h4 class="title"><?php echo lang('users history id_trans'); ?> <?php echo $transactions['id'] ?></h4>
      </div>
      <div class="col-md-6 hidden-xs">
        <?php if($transactions['type']==3){?>
        <?php if($user['username']==$transactions['sender']){?>
          <?php if($dispute_mode == 1){?>
            <a href="#" data-toggle="modal" data-target="#dispute" class="btn btn-danger margin-left-10 pull-right"><?php echo lang('users history open_dispute'); ?></a>
          <?php }else{ ?>
          <?php } ?>
        <?php }else{ ?>
        <?php } ?>
        <?php }else{ ?>
        <?php } ?>
        <?php if($transactions['sender']=="Bitcoin" & $transactions['type']=="1"){?>
        <a href="/account/btc_order/<?php echo $transactions['user_comment']; ?>" class="btn btn-success margin-left-10 pull-right"><i class="fa fa-qrcode" aria-hidden="true"></i> <?php echo lang('users merchants pay'); ?></a>
        <?php }else{ ?>
        <?php } ?>
        <button onclick="window.print()" class="btn btn-primary margin-left-10 pull-right"><i class="icon-printer icons"></i> <?php echo lang('users history print'); ?></button>
      </div>
      <?php if($transactions['sender']=="Bitcoin"){?>
      <div class='col-md-12'>
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong><?php echo lang('users error warning'); ?></strong> <?php echo lang('users error btc_network'); ?>
        </div>
      </div>
      <?php }else{ ?>
      <?php } ?>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="form-group">
              <label><?php echo lang('users trans date'); ?></label>
              <p class="form-control-static"><?php echo $transactions['time'] ?></p>
            </div>

            <div class="form-group">
              <label><?php echo lang('users trans amount'); ?></label>
              <p class="form-control-static"><?php echo $transactions['amount'] ?> <?php if($transactions['currency']=='debit_base'){?>
                      <?php echo $this->currencys->display->base_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra1'){?>
                      <?php echo $this->currencys->display->extra1_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra2'){?>
                      <?php echo $this->currencys->display->extra2_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra3'){?>
                      <?php echo $this->currencys->display->extra3_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra4'){?>
                      <?php echo $this->currencys->display->extra4_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra5'){?>
                      <?php echo $this->currencys->display->extra5_code ?>
                  <?php }else{ ?>
                  <?php } ?></p>
            </div>

            <div class="form-group">
              <label><?php echo lang('users trans sender'); ?></label>
              <p class="form-control-static"><?php echo $transactions['sender'] ?></p>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="form-group">
              <label><?php echo lang('users trans type'); ?></label>
              <p class="form-control-static"><?php if($transactions['type']==1){?>
                      <?php echo lang('users trans deposit'); ?>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['type']==2){?>
                      <?php echo lang('users trans withdrawal'); ?>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['type']==3){?>
                      <?php echo lang('users trans transfer'); ?>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['type']==4){?>
                      <?php echo lang('users trans exchange'); ?>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['type']==5){?>
                      <?php echo lang('users trans external'); ?>
                 <?php }else{ ?>
                 <?php } ?></p>
            </div>
            <div class="form-group">
              <label><?php echo lang('users trans fee'); ?></label>
              <p class="form-control-static">

                <?php if($transactions['type']==3 && $transactions['sender']!=$user['username']){?>
                0.00 <?php if($transactions['currency']=='debit_base'){?>
                      <?php echo $this->currencys->display->base_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra1'){?>
                      <?php echo $this->currencys->display->extra1_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra2'){?>
                      <?php echo $this->currencys->display->extra2_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra3'){?>
                      <?php echo $this->currencys->display->extra3_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra4'){?>
                      <?php echo $this->currencys->display->extra4_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra5'){?>
                      <?php echo $this->currencys->display->extra5_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                <?php }else{ ?>
                <?php echo $transactions['fee'] ?> <?php if($transactions['currency']=='debit_base'){?>
                      <?php echo $this->currencys->display->base_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra1'){?>
                      <?php echo $this->currencys->display->extra1_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra2'){?>
                      <?php echo $this->currencys->display->extra2_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra3'){?>
                      <?php echo $this->currencys->display->extra3_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra4'){?>
                      <?php echo $this->currencys->display->extra4_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra5'){?>
                      <?php echo $this->currencys->display->extra5_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                <?php } ?>

                </p>
            </div>

            <div class="form-group">
              <label><?php echo lang('users trans receiver'); ?></label>
              <p class="form-control-static"><?php echo $transactions['receiver'] ?></p>
            </div>

          </div>
          <div class="col-md-4 col-xs-6">
            <div class="form-group">
              <label><?php echo lang('users trans status'); ?></label>
              <p class="form-control-static"><?php if($transactions['status']==1){?>
                <span class="label label-primary"> <?php echo lang('users trans pending'); ?> </span>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['status']==2){?>
                <span class="label label-success"> <?php echo lang('users trans success'); ?> </span>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['status']==3){?>
                <span class="label label-info"> <?php echo lang('users trans refund'); ?> </span>
                 <?php }else{ ?>
                 <?php } ?>
                <?php if($transactions['status']==4){?>
                <span class="label label-danger"> <?php echo lang('users trans dispute'); ?> </span>
                 <?php }else{ ?>
                 <?php } ?>
                 <?php if($transactions['status']==5){?>
                <span class="label label-warning"> <?php echo lang('users trans blocked'); ?> </span>
                 <?php }else{ ?>
                 <?php } ?></p>
            </div>
            <div class="form-group">
              <label><?php echo lang('users trans sum'); ?></label>
              <p class="form-control-static">

                <?php if($transactions['type']==3 && $transactions['sender']!=$user['username']){?>
                <?php echo $transactions['amount'] ?> <?php if($transactions['currency']=='debit_base'){?>
                <?php echo $this->currencys->display->base_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra1'){?>
                      <?php echo $this->currencys->display->extra1_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra2'){?>
                      <?php echo $this->currencys->display->extra2_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra3'){?>
                      <?php echo $this->currencys->display->extra3_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra4'){?>
                      <?php echo $this->currencys->display->extra4_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra5'){?>
                      <?php echo $this->currencys->display->extra5_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                <?php }else{ ?>
                <?php echo $transactions['sum'] ?> <?php if($transactions['currency']=='debit_base'){?>
                <?php echo $this->currencys->display->base_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra1'){?>
                      <?php echo $this->currencys->display->extra1_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra2'){?>
                      <?php echo $this->currencys->display->extra2_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra3'){?>
                      <?php echo $this->currencys->display->extra3_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra4'){?>
                      <?php echo $this->currencys->display->extra4_code ?>
                  <?php }else{ ?>
                  <?php } ?>
                  <?php if($transactions['currency']=='debit_extra5'){?>
                      <?php echo $this->currencys->display->extra5_code ?>
                  <?php }else{ ?>
                  <?php } ?>

                <?php } ?></p>
            </div>

            <div class="form-group">
              <label><?php echo lang('users trans comment'); ?></label>
              <p class="form-control-static"><?php echo $transactions['user_comment'] ?></p>
            </div>


          </div>
          <div class="col-md-12 col-xs-12">
            <div class="form-group pull-right hidden-print">
              <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php if($user['username']==$transactions['sender']){?>
<!--Start dispute -->
<div class="modal fade" id="dispute" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo lang('users history open_dispute'); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo form_open(site_url("account/start_dispute/" . $transactions['id']), array("" => "")) ?>
        <div class="form-group">
          <label><?php echo lang('users history dispute_title'); ?></label>
          <select class="form-control" name="title">
            <option value="1"><?php echo lang('users history not_received'); ?></option>
            <option value="2"><?php echo lang('users history not_desk'); ?></option>
          </select>
        </div>
        <div class="form-group">
          <label><?php echo lang('users history reason'); ?></label>
          <textarea class="form-control" rows="12" name="message"></textarea>
          <span class="help-block"><?php echo lang('users history help'); ?></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('core button cancel'); ?></button>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo lang('users history start'); ?></button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php }else{ ?>
<?php } ?>
