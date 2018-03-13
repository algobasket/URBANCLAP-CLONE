<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="header-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-6 col-xs-7">
						<h3><?php echo lang('users link forgot_password'); ?></h3>
					</div>
				</div>
			</div>
</div>

<div class="container theme-showcase" role="main">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('', array('role'=>'form')); ?>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users input email'); ?></label>
            <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
          </div>

          <?php echo form_submit(array('name'=>'submit', 'class'=>'btn btn-success pull-right'), lang('core button login')); ?>

        <?php echo form_close(); ?>
      </div>
    </div>
    </div>
  </div>

</div>
