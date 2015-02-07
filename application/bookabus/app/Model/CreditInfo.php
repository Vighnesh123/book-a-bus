<?php
App::uses('AppModel', 'Model');
/**
 * CreditInfo Model
 *
 */
class CreditInfo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'credit_info';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'customer_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'card_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'credit_provider' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'expiration_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
