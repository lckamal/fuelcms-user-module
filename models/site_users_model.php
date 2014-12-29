<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/base_module_model.php');
 
class Site_users_model extends Base_module_model {

    public $record_class = 'Site Users';
	public $required = array(
		'username' => 'Please fill out the username',
		'email' => 'email cannot be empty',
        'group_id' => 'Please select a group.',
        'first_name' => 'Please fill out first name.',
        'last_name' => 'Please fill out last name.',
	);
    public $hidden_fields = array('ip_address', 'salt', 'activation_code', 'forgotten_password_code', 'forgotten_password_time', 'remember_code', 'created_on', 'last_login');
    public $foreign_keys = array(
        'group_id' => array('fuel' => 'site_groups_model')
    );
    //public $has_many = array('groups' => array('model' => array(USER_FOLDER => 'site_groups_model')));
    function __construct()
    {	
        parent::__construct('site_users', USER_FOLDER);
        class_exists('site_groups_model') or $this->load->module_model(USER_FOLDER, 'site_groups_model');
    }
 

	function list_items($limit = NULL, $offset = NULL, $col = 'username', $order = 'asc')
	{
		$data = parent::list_items($limit, $offset, $col, $order);
		return $data;
	}
	
	function form_fields($values = array())
	{
		$fields = parent::form_fields($values);
        $fields['active']['type'] = 'select';
        $fields['active']['options'] = array('1' => 'Yes', '0' => 'No');
        $fields['email']['order'] = 4;

        // save reference it so we can reorder
        $pwd_field = $fields['password'];
        unset($fields['password']);
        
        $user_id = NULL;
        if (!empty($values['id']))
        {
            $user_id = $values['id'];
        }

        if (!empty($user_id))
        {
            $fields['new_password'] = array('label' => lang('form_label_new_password'), 'type' => 'password', 'size' => 20, 'order' => 5);
        }
        else
        {
            $pwd_field['type'] = 'password';
            $pwd_field['size'] = 20;
            $pwd_field['order'] = 5;
            $fields['password']= $pwd_field;
        }
        $fields['confirm_password'] = array('label' => lang('form_label_confirm_password'), 'type' => 'password', 'size' => 20, 'order' => 6);
        $fields['group_id']['order'] = 7;
        return $fields;
	}

    function on_before_save($values)
    {   
        class_exists('ion_auth_model') or $this->load->module_model(USER_FOLDER, 'ion_auth_model');
        if($values['id'] > 0)
        {
            $status = $this->ion_auth_model->update($values['id'], $values);
        }
        else
        {
            $username = strtolower($values['first_name']) . ' ' . strtolower($values['last_name']);
            $email    = strtolower($values['email']);
            $password = $values['password'];

            $additional_data = array(
                'first_name' => $values['first_name'],
                'last_name'  => $values['last_name'],
                'company'    => $values['company'],
                'phone'      => $values['phone'],
                'group_id'      => $values['group_id'],
            );
            $status = $this->ion_auth_model->register($username, $password, $email, $additional_data);
        }
        unset($values);
        return null;
    }

    /**
     * Model hook executed right before the data is cleaned
     *
     * @access  public
     * @param   array The values to be saved right the clean method is run
     * @return  array Returns the values to be cleaned
     */ 
    public function on_before_clean($values)
    {
        if (!empty($values['password']) OR !empty($values['new_password'])) 
        {
            $pwd = (!empty($values['new_password'])) ? $values['new_password'] : $values['password'];
            $values['password'] = $pwd;
        }
        return $values;
    }
    /**
     * Model hook executed right before validation is run
     *
     * @access  public
     * @param   array The values to be saved right before validation
     * @return  array Returns the values to be validated right before saving
     */ 
    public function on_before_validate($values)
    {
        $this->add_validation('email', 'valid_email', lang('error_invalid_email'));
        
        // for new 
        if (empty($values['id']))
        {
            $this->required[] = 'password';
            $this->add_validation('email', array(&$this, 'is_new_email'), lang('error_val_empty_or_already_exists', lang('form_label_email')));
            if (isset($this->normalized_save_data['confirm_password']))
            {
                $this->get_validation()->add_rule('password', 'is_equal_to', lang('error_invalid_password_match'), array($this->normalized_save_data['password'], $this->normalized_save_data['confirm_password']));
            }
        }
        
        // for editing
        else
        {
            $this->add_validation('email', array(&$this, 'is_editable_email'), lang('error_val_empty_or_already_exists', lang('form_label_email')), $values['id']);
            if (isset($this->normalized_save_data['new_password']) AND isset($this->normalized_save_data['confirm_password']))
            {
                $this->get_validation()->add_rule('password', 'is_equal_to', lang('error_invalid_password_match'), array($this->normalized_save_data['new_password'], $this->normalized_save_data['confirm_password']));
            }
        }
        return $values;
    }
	
    /**
     * Validation callback to check if a new user's email already exists
     *
     * @access  public
     * @param   string The email address
     * @return  boolean
     */ 
    public function is_new_email($email)
    {
        return $this->is_new($email, 'email');
    }
    
    // --------------------------------------------------------------------
    
    /**
     * Validation callback to check if an existing user's email address doen't already exist in the system
     *
     * @access  public
     * @param   string The email address
     * @param   string The email address
     * @return  boolean
     */ 
    public function is_editable_email($email, $id)
    {
        return $this->is_editable($email, 'email', $id);
    }
}
 
class Site_user_model extends Base_module_record {
	private $_tables;


	function on_init()
	{
		$this->_tables = $this->_CI->config->item('tables');
	}

}