<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="https://raw.githubusercontent.com/karacas/imgLiquid/master/js/imgLiquid.js"></script>
<script>
	$(document).ready(function() {
	$(".imgLiquidFill").imgLiquid();
});
</script>
<div class="landing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="pull-left" style="color:#3f51b5;font-size:50px;">
							<?php echo lang('users slider header text');?> <br>with <?php echo $this->settings->site_name; ?>

						</h1>
						
					</div>
				</div> 
				<div class="row hidden-xs hidden-sm">
					<div class="col-md-4 padding-20 pull-left" style="color:#3f51b5;">
						<h2 class="text-center"><strong>10000+</strong></h2>
						<h3 class="text-center"><?php echo lang('users slider worker text');?></h3>
					</div>
					<div class="col-md-4 padding-20 pull-left" style="color:#3f51b5;">
						<h2 class="text-center"><strong>4000+</strong></h2>
						<h3 class="text-center"><?php echo lang('users slider services text');?></h3>
					</div>
					<div class="col-md-4 padding-20 pull-left" style="color:#3f51b5;">
						<h2 class="text-center"><strong>140+</strong></h2>
						<h3 class="text-center"><?php echo lang('users slider onlinenow text');?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-20 pull-left">
						<a href="<?php echo base_url('welcome/landingPage'); ?>" class="btn btn-info btn-lg text-center">Browser Services</a> <?php echo lang('core main or'); ?> <a href="<?php echo base_url('user/register'); ?>" class="btn btn-primary btn-lg text-center">Register | Signup</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-title">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center"><?php echo lang('core main simple'); ?></h2>
					<h4 class="text-center"><?php echo lang('core main fast'); ?></h4>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
			  <h3><?php echo lang('users recommended category services');?></h3>

				<div class="row margin-top-35">
					<?php foreach($getAllCategory as $category){ ?>
					<div class="col-md-4 imgLiquidFill imgLiquid" onclick="window.location.href='<?php echo base_url();?>welcome/landingPage'">
						<img class="center-block" style="width:280px; height:172px;" src="<?php echo base_url().'uploads/admin/'.$category['img'];?>">
						<h4 class="text-center"><?php echo $category['title']; ?></h4>
						<!-- <p class="text-center"><?php //echo lang('core main transfer_text'); ?></p> -->
					</div>
					<?php } ?>
			 </div>

		</div>
