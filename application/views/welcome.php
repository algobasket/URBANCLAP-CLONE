<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="landing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Welcome to <?php echo $this->settings->site_name; ?></h1>
						<h4 class="text-center">Get instant access to reliable and affordable services</h4>
					</div>
				</div>
				<div class="row hidden-xs hidden-sm">
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>10000+</strong></h2>
						<h3 class="text-center">Workers</h3>
					</div>
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>4000+</strong></h2>
						<h3 class="text-center">Services</h3>
					</div>
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>140+</strong></h2>
						<h3 class="text-center">Online Now</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-20 text-center">
						<a href="<?php echo base_url('welcome/landingPage'); ?>" class="btn btn-info btn-lg text-center">Browser All Affordable Services</a> <?php echo lang('core main or'); ?> <a href="<?php echo base_url('user/register'); ?>" class="btn btn-warning btn-lg text-center">Register | Signup</a>
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
			  <h3>Recommended Category and Services</h3>

				<div class="row margin-top-35">
					<?php foreach($getAllCategory as $category){ ?>
					<div class="col-md-4" onclick="window.location.href='<?php echo base_url();?>welcome/landingPage'">
						<img class="center-block" width="280" src="<?php echo base_url().'assets/img/'.$category['img'];?>">
						<h4 class="text-center"><?php echo $category['title']; ?></h4>
						<!-- <p class="text-center"><?php //echo lang('core main transfer_text'); ?></p> -->
					</div>
					<?php } ?>
			 </div>

		</div>
