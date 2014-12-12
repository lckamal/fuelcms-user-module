<div class="row">
<div class="col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h1 class="panel-title">Already a member?</h1>
        <p><?php echo lang('login_subheading');?></p>
        </div>
        <div class="panel-body">

<!-- <div id="infoMessage"><?php echo $message;?></div> -->

<?php echo form_open("user/login", 'role="form"');?>
  <div class="form-group">
    <lable class="control-level"><?php echo lang('login_identity_'.$login_identity);?></lable>
    <?php echo form_input(array_merge($identity, array('class' => 'form-control input-sm')));?>
  </div>

  <div class="form-group">
    <lable class="control-level"><?php echo lang('login_password_label', 'password');?></lable>
    <?php echo form_input(array_merge($password, array('class' => 'form-control input-sm')));?>
  </div>

  <div class="form-group">
    <lable class="control-level"><?php echo lang('login_remember_label', 'remember');?></lable>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </div>

  <div class="clearfix">
  <div class="pull-left"><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"');?></div>
  <div class="pull-right"><a href="user/forgot_password"><?php echo lang('login_forgot_password');?></a></div>
  </div>
  </div>
  </div>
<?php echo form_close();?>



</div>
<div class="col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h1 class="panel-title">New to Hotfrets?</h1>
        <p>This site is here for guitarists who want to know their guitar intimately. Pull back the veil of mystery. Begin demystifying now.</p>
        </div>
        <div class="panel-body">        
        <p class="text-center"><a class="btn btn-success btn-sm" href="user/register/teacher">Sign up for a teacher account.</a></p>
        <p><span class="bold">NOTE:</span> Approval is required for all courses prior to publishing for public consumption</p>
        <hr style="margin-bottom:10px" />
        <p class="text-center">OR</p>
        <hr style="margin-top:10px" />
        <p class="text-center"><a class="btn btn-success btn-sm" href="user/register">Sign up for a student account</a></p>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>