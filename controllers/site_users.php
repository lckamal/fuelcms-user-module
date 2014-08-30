<?php
require_once(FUEL_PATH.'controllers/module.php');
class Site_users extends Module {

	function __construct()
	{
		parent::__construct();
		$this->config->module_load(USER_FOLDER, USER_FOLDER);
		$this->load->module_model(USER_FOLDER,'site_users_model');
		$this->view_location = 'fuel';
		
		
		$crumbs = array('auth/site_users' => 'Site Users', 'View');
		$this->fuel->admin->set_titlebar($crumbs);
	}
	
	function items()
	{
		parent::items();
	}
	
	function view($id = NULL){
		if (empty($id))
		{
			show_404();
		}
		
		
		$this->fuel->admin->render('site_users/view', $vars, Fuel_admin::DISPLAY_NO_ACTION);
	}

}