<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Mobile number -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/phoneNumber.css">

<br></br>
<div class="container theme-showcase" role="main">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
       <div class="panel-body">
        <?php echo form_open('', array('role'=>'form')); ?>


        <?php if($this->uri->segment(3)=='recruiter'){ ?>
         <div class="row">
            <div class="form-group col-sm-12"><br>
             <label class="label label-danger">Join as Recruiter</label> 
            </div>
        </div>
        <input type="hidden" name="recruit_seeker_both" value="recruiter" />
    
       <div class="row">
            <?php // first name ?>
            <div class="form-group col-sm-6<?php echo form_error('first_name') ? ' has-error' : ''; ?>">
                <?php echo form_label(lang('users input first_name'), 'first_name', array('class'=>'control-label')); ?>
                <span class="required">*</span>
                <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
            </div>

            <?php // last name ?>
            <div class="form-group col-sm-6<?php echo form_error('last_name') ? ' has-error' : ''; ?>">
                <?php echo form_label(lang('users input last_name'), 'last_name', array('class'=>'control-label')); ?>
                <span class="required">*</span>
                <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
            </div>
        </div>


        <div class="row">
            <?php // email ?>
            <div class="form-group col-sm-12<?php echo form_error('email') ? ' has-error' : ''; ?>">
                <?php echo form_label(lang('users input email'), 'email', array('class'=>'control-label')); ?>
                <span class="required">*</span>
                <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
            </div>

             <?php // phone ?>

        </div>


		<div class="row">

			<div class="form-group col-sm-12<?php echo form_error('phone') ? ' has-error' : ''; ?>">
					<?php echo form_label(lang('users input phone'), 'phone', array('class'=>'control-label')); ?>
					<span class="required">*</span><br>
					<?php echo form_input(array('name'=>'phone', 'value'=>set_value('phone', (isset($user['phone']) ? $user['phone'] : '')), 'class'=>'form-control', 'type'=>'tel','id'=>'mobile')); ?>
			</div>
		</div>

		<div class="row">

			<div class="form-group col-sm-12<?php echo form_error('age') ? ' has-error' : ''; ?>">
					Age (Atleast 18+ age to use this site)
					<select name="age" class="form-control">
						<?php for($i = 18;$i<100;$i++){ ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php } ?>

					</select>
			</div>
		</div>


    <div class="row">
        <?php // language ?>
        <div class="form-group col-sm-12<?php echo form_error('language') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input language'), 'language', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_dropdown('language', $this->languages, (isset($user['language']) ? $user['language'] : $this->config->item('language')), 'id="language" class="form-control"'); ?>
        </div>
    </div>

    <div class="row">
        <?php // password ?>
        <div class="form-group col-sm-6<?php echo form_error('password') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password'), 'password', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>

        <?php // password repeat ?>
        <div class="form-group col-sm-6<?php echo form_error('password_repeat') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password_repeat'), 'password_repeat', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>
        <?php if ( ! $password_required) : ?>
            <span class="help-block"><br /><?php echo lang('users help passwords'); ?></span>
        <?php endif; ?>
    </div>
        <?php // buttons ?>
      		<div class="pull-right">
            <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
            <?php if ($this->session->userdata('logged_in')) : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('core button save'); ?></button>
            <?php else : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('users button register'); ?></button>
            <?php endif; ?>
					</div>


      <?php }elseif($this->uri->segment(3)=='seeker'){ ?>
                <input type="hidden" name="recruit_seeker_both" value="seeker" />
               <input type="hidden" name="services" value="" class="hideSkills" />
                
                <div class="row">
                    <div class="form-group col-sm-12"><br>
                     <label class="label label-danger">Join as Seeker</label> 
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12"><br>
                     <label class="control-label">What Service Will You Provide ?</label>
                     <a href="javascript:void(0)" onclick="$('#myModal').modal('show')" class="btn btn-default">Add Service/Skills</a><span class="addedSkills"></span>
                     <br>
                    
                    </div>
                </div>
                <div class="row">
                    <?php // first name ?>
                    <div class="form-group col-sm-12 <?php echo form_error('education_detail') ? ' has-error' : ''; ?>">
                        <label class="control-label">Add Education Detail*</label>
                        <span class="required">*</span>
                        <textarea class="form-control" name="education_detail"></textarea>
                    </div>
                </div>
                <div class="row">
                    <?php // first name ?>
                    <div class="form-group col-sm-12<?php echo form_error('experience_detail') ? ' has-error' : ''; ?>">
                        <label class="control-label">Add Experience Detail</label>
                        <span class="required">*</span>
                        <textarea class="form-control" name="experience_detail"></textarea> 
                    </div>
                </div>
               <div class="row">
                    <?php // first name ?>
                    <div class="form-group col-sm-6<?php echo form_error('first_name') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input first_name'), 'first_name', array('class'=>'control-label')); ?>
                        <span class="required">*</span>
                        <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
                    </div>

                    <?php // last name ?>
                    <div class="form-group col-sm-6<?php echo form_error('last_name') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input last_name'), 'last_name', array('class'=>'control-label')); ?>
                        <span class="required">*</span>
                        <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
                    </div>
                </div>
                <div class="row">
                    <?php // email ?>
                    <div class="form-group col-sm-12<?php echo form_error('email') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input email'), 'email', array('class'=>'control-label')); ?>
                        <span class="required">*</span>
                        <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12<?php echo form_error('phone') ? ' has-error' : ''; ?>">
                            <?php echo form_label(lang('users input phone'), 'phone', array('class'=>'control-label')); ?>
                            <span class="required">*</span><br>
                            <?php echo form_input(array('name'=>'phone', 'value'=>set_value('phone', (isset($user['phone']) ? $user['phone'] : '')), 'class'=>'form-control', 'type'=>'tel','id'=>'mobile')); ?>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-sm-12<?php echo form_error('age') ? ' has-error' : ''; ?>">
                            Age (Atleast 18+ age to use this site)
                            <select name="age" class="form-control">
                                <?php for($i = 18;$i<100;$i++){ ?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php } ?>

                            </select>
                    </div>
                </div>
                <div class="row">
                    <?php // language ?>
                    <div class="form-group col-sm-12<?php echo form_error('language') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input language'), 'language', array('class'=>'control-label')); ?>
                        <span class="required">*</span>
                        <?php echo form_dropdown('language', $this->languages, (isset($user['language']) ? $user['language'] : $this->config->item('language')), 'id="language" class="form-control"'); ?>
                    </div>
                </div>
                <div class="row">
                    <?php // password ?>
                    <div class="form-group col-sm-6<?php echo form_error('password') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input password'), 'password', array('class'=>'control-label')); ?>
                        <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
                        <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
                    </div>

                    <?php // password repeat ?>
                    <div class="form-group col-sm-6<?php echo form_error('password_repeat') ? ' has-error' : ''; ?>">
                        <?php echo form_label(lang('users input password_repeat'), 'password_repeat', array('class'=>'control-label')); ?>
                        <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
                        <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
                    </div>
                    <?php if ( ! $password_required) : ?>
                        <span class="help-block"><br /><?php echo lang('users help passwords'); ?></span>
                    <?php endif; ?>
                </div>
                <?php // buttons ?>
            <div class="pull-right">
            <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
            <?php if ($this->session->userdata('logged_in')) : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('core button save'); ?></button>
            <?php else : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('users button register'); ?></button>
            <?php endif; ?>
                    </div>


      <?php }elseif($this->uri->segment(3)=='recruiter-seeker'){ ?>
      <input type="hidden" name="services" value="" class="hideSkills" />
     <div class="row">
        <div class="form-group col-sm-12"><br>
         <label class="label label-danger">Join as Both Recruiter and Seeker</label> 
        </div>
    </div>
     <div class="row">
                    <div class="form-group col-sm-12"><br>
                     <label class="control-label">What Service Will You Provide ?</label>
                     <a href="javascript:void(0)" onclick="$('#myModal').modal('show')" class="btn btn-default">Add Service/Skills</a><span class="addedSkills"></span>
                     <br>
                    
                    </div>
     </div>
    <div class="row">
        <?php // first name ?>
        <div class="form-group col-sm-12 <?php echo form_error('education_detail') ? ' has-error' : ''; ?>">
            <label class="control-label">Add Education Detail*</label>
            <span class="required">*</span>
            <textarea class="form-control" name="education_detail"></textarea>
        </div>
    </div>

    <div class="row">
        <?php // first name ?>
        <div class="form-group col-sm-12<?php echo form_error('experience_detail') ? ' has-error' : ''; ?>">
            <label class="control-label">Add Experience Detail</label>
            <span class="required">*</span>
            <textarea class="form-control" name="experience_detail"></textarea> 
        </div>
    </div>
    
    
   <div class="row">
        <?php // first name ?>
        <div class="form-group col-sm-6<?php echo form_error('first_name') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input first_name'), 'first_name', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
        </div>

        <?php // last name ?>
        <div class="form-group col-sm-6<?php echo form_error('last_name') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input last_name'), 'last_name', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
        </div>
    </div>


    <div class="row">
        <?php // email ?>
        <div class="form-group col-sm-12<?php echo form_error('email') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input email'), 'email', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
        </div>
      
         <?php // phone ?>

    </div>


        <div class="row">

            <div class="form-group col-sm-12<?php echo form_error('phone') ? ' has-error' : ''; ?>">
                    <?php echo form_label(lang('users input phone'), 'phone', array('class'=>'control-label')); ?>
                    <span class="required">*</span><br>
                    <?php echo form_input(array('name'=>'phone', 'value'=>set_value('phone', (isset($user['phone']) ? $user['phone'] : '')), 'class'=>'form-control', 'type'=>'tel','id'=>'mobile')); ?>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-sm-12<?php echo form_error('age') ? ' has-error' : ''; ?>">
                    Age (Atleast 18+ age to use this site)
                    <select name="age" class="form-control">
                        <?php for($i = 18;$i<100;$i++){ ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php } ?>

                    </select>
            </div>
        </div>


    <div class="row">
        <?php // language ?>
        <div class="form-group col-sm-12<?php echo form_error('language') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input language'), 'language', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_dropdown('language', $this->languages, (isset($user['language']) ? $user['language'] : $this->config->item('language')), 'id="language" class="form-control"'); ?>
        </div>
    </div>

    <div class="row">
        <?php // password ?>
        <div class="form-group col-sm-6<?php echo form_error('password') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password'), 'password', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>

        <?php // password repeat ?>
        <div class="form-group col-sm-6<?php echo form_error('password_repeat') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password_repeat'), 'password_repeat', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>
        <?php if ( ! $password_required) : ?>
            <span class="help-block"><br /><?php echo lang('users help passwords'); ?></span>
        <?php endif; ?>
    </div>
    <input type="hidden" name="recruit_seeker_both" value="recruiter-seeker" /> 
        <?php // buttons ?>
            <div class="pull-right">
            <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
            <?php if ($this->session->userdata('logged_in')) : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('core button save'); ?></button>
            <?php else : ?>
                <button type="submit" name="submit" class="btn btn-success"></span> <?php echo lang('users button register'); ?></button>
            <?php endif; ?>
            </div>
          

      <?php }else{ ?>
        
        <div class="row">
            <div class="form-group col-sm-12"><center>
        <h3>Join as a Recruiter,Seeker or Both</h3><br>
        <a href="<?php echo base_url();?>user/register/recruiter" class="btn btn-default btn-lg">Recruiter</a> 
        <a href="<?php echo base_url();?>user/register/seeker" class="btn btn-default btn-lg">Seeker</a> 
        <a href="<?php echo base_url();?>user/register/recruiter-seeker" class="btn btn-default btn-lg">Both</a>
            </center>
            <center>OR<br>
              <a href="<?php echo base_url();?>user/offerPage" class="btn btn-info btn-lg">Offer Page Access</a> 
            </center>
            </div>
       </div>
        

      <?php } ?>                            




<?php echo form_close(); ?>
     



        </div>
      </div>
     </div>
  </div>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select your Skills/Services</h4>
      </div>
      <div class="modal-body">
        <p>
          <table cellpadding="10">
            <?php foreach($services as $service){ ?>
              <tr>
                  <td><input type="checkbox" name="skills" class="skills" value="<?php echo $service['id'];?>"/></td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $service['title'];?></b></td>
              </tr>
              <?php } ?>
          </table>
        </p>
      </div>
      <div class="modal-footer">
        <button onclick="getAllCheckedSkills()" type="button" class="btn btn-info" data-dismiss="modal">Add</button>
      </div>
    </div>

  </div>
</div>
<script>
    function getAllCheckedSkills(){
      var a = [];
        $(".skills:checked").each(function() {
            a.push(this.value);
        });
      $('.hideSkills').val(a);
      $('.addedSkills').html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class='label label-success'>Added</label>").show();
    }
</script>
