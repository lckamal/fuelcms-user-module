<h1><?php echo lang('change_password_heading');?></h1>

<div class="alert alert-danger"><?php echo $message;?></div>

<?php echo form_open("user/change_password", 'role="form" class="form-horizontal"');?>
    <?php echo form_input($user_id);?>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('change_password_old_password_label', 'old_password');?></lable>
        <div class="col-sm-6">
            <?php echo form_input(array_merge($old_password, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo sprintf($this->lang->line('change_password_new_password_label'), $min_password_length);?></lable>
        <div class="col-sm-6">
            <?php echo form_input(array_merge($new_password, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <lable class="control-label col-sm-3"><?php echo lang('change_password_new_password_confirm_label', 'old_password');?></lable>
        <div class="col-sm-6">
            <?php echo form_input(array_merge($new_password_confirm, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
          <a href="<?php echo site_url('user'); ?>" class="btn btn-default">Cancel</a>
        </div>
    </div>

<?php echo form_close();?>
