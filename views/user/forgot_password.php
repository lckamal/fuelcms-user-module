<h1><?php echo lang('forgot_password_heading');?></h1>
<p>Please provide you <?php echo $identity_label;?> to reset your password.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("user/forgot_password");?>
      <p>
      	<label for="email"><?php echo $identity_label;?></label> <br />
      	<?php echo form_input($email);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>