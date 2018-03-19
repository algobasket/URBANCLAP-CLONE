<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
.dropdown-menu{
  background-color: #fff !important;
}
</style>
<?php echo $this->session->flashdata('alert');?>
<div class="container theme-showcase" role="main">
  <?php if($this->session->userdata('accessCode')){ ?>
  <div class="row">
    <br><br>
     <h4><strong>Welcome</strong> <?php echo $this->session->userdata('accessCode');?></h4>
     <div class="container">
  <div class="row">
    <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for Jobs" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <?php echo form_open('user/offerPage','class="form-horizontal" role="form"');?>
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Jobs</option>
                                        <option value="featured">Featured</option>
                                        <option value="popular">Most popular</option>
                                        <option value="rated">Top rated</option>
                                        <option value="urgent"></option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Worker</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                <?php echo form_close();?>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>
</div>

     <h3>
       <a href="<?php echo base_url();?>user/offerPage/jobsCreated" class="btn btn-primary">My Jobs Created</a>
       <a href="<?php echo base_url();?>user/offerPage/jobOffers" class="btn btn-primary">Jobs Offers</a>
      <a href="<?php echo base_url();?>user/offerPage/logout" class="btn btn-primary pull-right">Close</a>
    </h3>

      <ul class="list-group">

         <?php if($this->uri->segment(3) == "jobsCreated"){ ?>
         <h3>You have <?php echo count($jobsCreated);?> job created </h3>
         



         <?php foreach($jobsCreated as $jobsC){ ?>
         <?php if($jobsC['is_custom_job'] == 1){ 
                $json = json_decode($jobsC['custom_json'],true);

          ?>
               <li class="list-group-item sideColor<?php echo $jobsC['id'];?>">
          <label class="label label-success pull-right"><?php echo $jobsC['statusName'];?></label>
          <b style="font-size: 18px"><?php echo $json['title'];?><br> 
          Job for <?php echo $jobsC['serviceName'];?></b><br>
          Location <?php echo $json['workPlace'];?><br>
          <?php echo $json['budget'];?> 
          <?php echo $json['currencyTypeInput'];?> 
          <?php echo $json['jobTypeInput'];?><br>
          <span>Posted : <?php echo $jobsC['created'];?></span>
          <br>
          <label class="label label-success" onclick="$('#collapseExample<?php echo $jobsC['id'];?>').toggle();
          $('.sideColor<?php echo $jobsC['id'];?>').css({"border-left":"3px solid #000 !important"})">
          See Job Requirement</label> 
              
              <a href="#" class="label label-danger pull-right">Remove</a>
          </li>
          <li class="collapse list-group-item sideColor<?php echo $jobsC['id'];?>" style="display:none;" id="collapseExample<?php echo $jobsC['id'];?>">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <?php }else{ 
                $json = json_decode($jobsC['json'],true);
            ?> 
             <li class="list-group-item">
          <label class="label label-success pull-right"><?php echo $jobsC['categoryName'];?></label>
          <b style="font-size: 18px">Want a <?php echo $jobsC['serviceName'];?></b><br>
          Location near Cary , NC<br>
          Salary 500$<br>
          <span>Posted :<?php echo $jobsC['created'];?></span>
          <br>
          <label class="label label-success" onclick="$('#collapseExample<?php echo $jobsC['id'];?>').toggle()">
          See Job Requirement</label>
              <a href="#" class="label label-danger pull-right">Remove</a>

        </li>
        <li class="collapse list-group-item" style="display:none;" id="collapseExample<?php echo $jobsC['id'];?>">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <?php } ?>
        <?php } ?>






       <?php }elseif($this->uri->segment(3) == "jobOffers"){  ?>
        <h3>You have <?php echo count($jobOffer);?> job offers </h3>
       <?php foreach($jobOffer as $jobsC){  ?>
            <?php if($jobsC['is_custom_job'] == 1){ 
                $json = json_decode($jobsC['custom_json'],true);

          ?>
               <li class="list-group-item">
          <label class="label label-success pull-right"><?php echo $jobsC['statusName'];?></label>
          <b style="font-size: 18px"><?php echo $json['title'];?><br> 
          Job for <?php echo $jobsC['serviceName'];?></b><br>
          Location <?php echo $json['workPlace'];?><br>
          <?php echo $json['budget'];?> 
          <?php echo $json['currencyTypeInput'];?> 
          <?php echo $json['jobTypeInput'];?><br>
          <span>Posted : <?php echo $jobsC['created'];?></span>
          <br>
          <label class="label label-success">See Job Requirement</label>
              
              <a href="#" class="label label-danger pull-right">Remove</a>
          </li>
          <?php }else{ 
                $json = json_decode($jobsC['json'],true);
            ?> 
             <li class="list-group-item">
          <label class="label label-success pull-right">Available</label>
          <b style="font-size: 18px">Want a tutor for math</b><br>
          Location near Cary , NC<br>
          Salary 500$<br>
          <span>Posted : 12th March 2019</span>
          <br>
          <label class="label label-success">See Job Requirement</label>
              <a href="#" class="label label-danger pull-right">Reject</a>
              &nbsp;&nbsp;&nbsp;
              <a href="#" class="label label-info pull-right">Accept</a>

        </li>
          <?php } ?>
         <?php } ?>


       <?php }else{ ?>
       <!--Search Start-->
           <?php foreach($jobOffer as $jobsC){  ?>
            <?php if($jobsC['is_custom_job'] == 1){ 
                $json = json_decode($jobsC['custom_json'],true);

          ?>
               <li class="list-group-item">
          <label class="label label-success pull-right"><?php echo $jobsC['statusName'];?></label>
          <b style="font-size: 18px"><?php echo $json['title'];?><br> 
          Job for <?php echo $jobsC['serviceName'];?></b><br>
          Location <?php echo $json['workPlace'];?><br>
          <?php echo $json['budget'];?> 
          <?php echo $json['currencyTypeInput'];?> 
          <?php echo $json['jobTypeInput'];?><br>
          <span>Posted : <?php echo $jobsC['created'];?></span>
          <br>
          <label class="label label-success">See Job Requirement</label>
               <a href="#" class="label label-danger pull-right">Reject</a>
              &nbsp;&nbsp;&nbsp; 
              <a href="#" class="label label-danger pull-right">Remove</a>
          </li>
          <?php }else{ 
                $json = json_decode($jobsC['json'],true);
            ?> 
             <li class="list-group-item">
          <label class="label label-success pull-right">Available</label>
          <b style="font-size: 18px">Want a tutor for math</b><br>
          Location near Cary , NC<br>
          Salary 500$<br>
          <span>Posted : 12th March 2019</span>
          <br>
          <label class="label label-success">See Job Requirement</label>
              <a href="#" class="label label-danger pull-right">Reject</a>
              &nbsp;&nbsp;&nbsp;
              <a href="#" class="label label-info pull-right">Accept</a>

        </li>
          <?php } ?>
         <?php } ?>
       <!--Search Stop-->
       <?php } ?>




      </ul>
     
  </div>
  <?php }else{ ?>
  <br><br><br>
    <center><h4><?php echo lang('users enter access page header');?></h4></center>
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('user/offerPage'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users enter access code'); ?></label>
           <?php echo form_input('accessCode','','class="form-control" 
               placeholder="Enter Access Code" 
               required'); ?>
          </div>
          <?php echo form_submit(array('name'=>'accessCodeSubmit', 'class'=>'btn btn-success pull-right'), lang('core button login')); ?>
          <p><br /><a href="<?php echo base_url('user/forgot'); ?>"><?php echo lang('users link accessCode'); ?></a></p>
          <p><a href="<?php echo base_url('user/register'); ?>"><?php echo lang('users link register_account'); ?></a></p>
        <?php echo form_close(); ?>
      </div>
    </div>
    </div>
  </div>
  <?php } ?>
</div>
