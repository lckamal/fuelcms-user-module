<?php 
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['site_users'] = array(
	'user/site_users' => lang('index_heading'),
    'user/site_groups' => lang('index_groups_th')
);

/*
|--------------------------------------------------------------------------
| Configurable in settings if auth_use_db_table_settings is set
|--------------------------------------------------------------------------
*/

// deterines whether to use this configuration below or the database for controlling the users behavior
$config['user_use_db_table_settings'] = TRUE;

$config['user'] = array();

$config['user']['settings']['uri'] = array('value' => 'user');
$config['user']['settings']['use_cache'] = array('type' => 'checkbox', 'value' => '1');
$config['user']['settings']['asset_upload_path'] = array('default' => 'images/user/');
$config['user']['settings']['per_page'] = array('value' => 1, 'size' => 3);


// the cache folder to hold user cache files
$config['user_cache_group'] = 'user';

/*
|--------------------------------------------------------------------------
| Programmer specific config (not exposed in settings)
|--------------------------------------------------------------------------
*/

// tables for user
$config['tables']['users']    = 'site_users';
$config['tables']['groups']   = 'site_groups';
$config['tables']['users_groups']   = 'site_users_groups';
$config['tables']['login_attempts']   = 'site_login_attempts';

