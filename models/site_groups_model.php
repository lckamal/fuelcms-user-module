<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/base_module_model.php');
 
class Site_groups_model extends Base_module_model {

    public $record_class = 'Group';
	public $required = array(
		'name' => 'Please fill out the name',
		'description' => 'Please fill out the description',
	);
    // public $foreign_keys = array(
    //     'created_by' => array('fuel' => 'fuel_groups_model')
    // );
    function __construct()
    {
		
        parent::__construct('site_groups', USER_FOLDER);
        class_exists('site_users_model') or $this->load->module_model(USER_FOLDER, 'site_users_model');
    }
 

	function list_items($limit = NULL, $offset = NULL, $col = 'name', $order = 'asc')
	{
		$data = parent::list_items($limit, $offset, $col, $order);
		return $data;
	}
	
	function form_fields($values = array())
	{
		$fields = parent::form_fields($values);
		return $fields;
	}
}
 
class Site_group_model extends Base_module_record {
	private $_tables;


	function on_init()
	{
		$this->_tables = $this->_CI->config->item('tables');
	}

}