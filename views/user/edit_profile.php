<h1>Edit Profile</h1>
<p>Please enter your information below.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url(), 'role="form" class="form-horizontal"');?>
    
    <?php echo form_hidden('id', $user->id);?>
    <?php echo form_hidden('group_id', $user->group_id);?>
    <?php echo form_hidden($csrf); ?>

    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('edit_user_fname_label', 'first_name');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($first_name, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('edit_user_lname_label', 'last_name');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($last_name, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('edit_user_company_label', 'company');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($company, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('edit_user_password_label', 'password');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($password, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></lable>
        <div class="col-sm-6">
        <?php echo form_input(array_merge($password_confirm, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <?php echo form_submit('submit', 'Save Profile', 'class="btn btn-primary"');?>
          <a href="<?php echo site_url('user'); ?>" class="btn btn-default">Cancel</a>
        </div>
    </div>
<?php echo form_close();?>