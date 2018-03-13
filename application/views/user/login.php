<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<br><br><br>
<center><h2>Login | Signin</h2></center>

<div class="container theme-showcase" role="main">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('', array('class'=>'form-signin')); ?>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users input username_email'); ?></label>
            <?php echo form_input(array('name'=>'username', 'id'=>'username', 'class'=>'form-control', 'maxlength'=>256)); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users input password'); ?></label>
             <?php echo form_password(array('name'=>'password', 'id'=>'password', 'class'=>'form-control', 'maxlength'=>72, 'autocomplete'=>'off')); ?>
          </div>
          <?php echo form_submit(array('name'=>'submit', 'class'=>'btn btn-success pull-right'), lang('core button login')); ?>
          <p><br /><a href="<?php echo base_url('user/forgot'); ?>"><?php echo lang('users link forgot_password'); ?></a></p>
          <p><a href="<?php echo base_url('user/register'); ?>"><?php echo lang('users link register_account'); ?></a></p>
        <?php echo form_close(); ?>
      </div>
    </div>
    </div>
  </div>

</div>
