<?php
App::uses('AppModel', 'Model');
/**
 * EmployeeLogin Model
 *
 */
class EmployeeLogin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'employee_login';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'employee_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
