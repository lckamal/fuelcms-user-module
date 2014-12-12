<h1>Register for a <?php echo isset($user_group->name) ? $user_group->name : 'student'; ?> account</h1>

<?php echo form_open(current_url(), 'role="form" class="form-horizontal"');?>
    <?php 
    if(isset($user_group->id))
    echo form_hidden('group_id', $user_group->id); 
    ?>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_fname_label', 'first_name');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($first_name, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_lname_label', 'last_name');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($last_name, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_company_label', 'company');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($company, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_email_label', 'email');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($email, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_password_label', 'password');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($password, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-2"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($password_confirm, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
          <?php echo form_submit('submit', 'Register', 'class="btn btn-primary"');?>
          <a href="<?php echo site_url('user'); ?>" class="btn btn-default">Cancel</a>
        </div>
    </div>

<?php echo form_close();?>
