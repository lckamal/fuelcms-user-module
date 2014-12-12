<h1><?php echo lang('forgot_password_heading');?></h1>
<p>Please provide you <?php echo $identity_label;?> to reset your password.</p>
<?php if($message): ?>
<div class="alert alert-danger"><?php echo $message;?></div>
<?php endif; ?>

<?php echo form_open("user/forgot_password", 'role="form" class="form-horizontal"');?>
    <div class="form-group">
        <label class="control-label col-sm-2"><?php echo $identity_label;?></label>
        <div class="col-sm-6">
            <?php echo form_input(array_merge($email, array('class' => 'form-control input-sm')));?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
          <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"');?>
          <a href="<?php echo site_url('user'); ?>" class="btn btn-default">Cancel</a>
        </div>
    </div>
<?php echo form_close();?>