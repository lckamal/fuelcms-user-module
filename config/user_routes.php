<?php 
$auth_models = array(
	'site_users_model',
);

$auth_controllers = array(
	'ajax',
	'site_users',
    'site_groups'
);
foreach($auth_models as $c)
{
	$route[FUEL_ROUTE.USER_FOLDER.'/'.$c] = FUEL_FOLDER.'/module';
	$route[FUEL_ROUTE.USER_FOLDER.'/'.$c.'/(.*)'] = FUEL_FOLDER.'/module/$1';
}

foreach($auth_controllers as $c)
{
	$route[FUEL_ROUTE.USER_FOLDER.'/'.$c] = USER_FOLDER.'/'.$c;
	$route[FUEL_ROUTE.USER_FOLDER.'/'.$c.'/(.*)'] = USER_FOLDER.'/'.$c.'/$1';
}
//$route['auth'] = 'auth/auth';
//$route['courses(:any)'] = 'course/course$1';

