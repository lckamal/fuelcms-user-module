<?php
$config['modules']['site_users'] = array(
	'module_name' => 'Site Users',
	'module_uri' => 'user/site_users',
	'model_name' => 'site_users_model',
	'model_location' => 'user',
	'table_headers' => array(
		'id', 
        'username',
		'email', 
		'first_name', 
        'last_name', 
        'company', 
        'phone', 
		'created_on',  
		'active'
	),
	'display_field' => 'username',
	'permission' => 'user/site_users',
	'instructions' => lang('module_instructions_default', 'Site Users Records'),
	'archivable' => TRUE,
	'configuration' => array('user' => 'user', 'user' => 'ion_auth'),
	'nav_selected' => 'user/site_users',
	'default_col' => 'username',
	'default_order' => 'asc',
);
$config['modules']['site_groups'] = array(
    'module_name' => 'Site User Groups',
    'module_uri' => 'user/site_groups',
    'model_name' => 'site_groups_model',
    'model_location' => 'user',
    'display_field' => 'name',
    'permission' => 'user/site_groups',
    'configuration' => array('user' => 'user'),
    'nav_selected' => 'user/site_groups'
);
