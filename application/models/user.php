<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends DataMapper {

	public function __construct($id = null)
	{
		parent::__construct($id);
	}

	public $validation = array(
		'email' => array(
			'label' => 'Email',
			'rules' => array('required')
		),'first_name' => array(
			'label' => 'First Name',
			'rules' => array('required')
		),
		'last_name' => array(
			'label' => 'Last Name',
			'rules' => array('required')
		),
		'password' => array(
			'label' => 'Password',
			'rules' => array('required')
		)
	);

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */