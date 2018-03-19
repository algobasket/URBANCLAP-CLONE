<center><h2></h2></center>
<center><h3><?php echo $this->session->flashdata('alert');?></h3></center>
<div class="container theme-showcase" role="main">
 
<?php if($activationStatus == false){ ?>
<center><h2><?php echo lang('users activation code email');?></h2></center>
<div class="container theme-showcase" role="main">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('User/codeActivation', array('class'=>'form-signin')); ?>
          <?php echo lang('users enter activation code');?>
          <input type="text" name="code" class="form-control" required placeholder="Required Activation Code"/>
          <br>
          <input type="submit" name="codeSubmit" class="btn btn-info" />
        <?php echo form_close(); ?>
      </div>
    </div>
    </div>
  </div>
</div> 
<?php } ?>
<?php if($activationStatus == true){ ?>
<center><h2>Login Now</h2></center>
<div class="container theme-showcase" role="main">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <center><a href="<?php echo base_url();?>login" class="btn btn-danger btn-lg">Login</a></center>
      </div>
    </div>
    </div>
  </div>
</div> 
<?php } ?>
</div>