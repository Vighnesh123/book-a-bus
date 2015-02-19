<?php
App::uses('AppModel', 'Model');
/**
 * Seat Model
 *
 * @property Bus $Bus
 */
class Seat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'seat';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'code';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bus_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bus' => array(
			'className' => 'Bus',
			'foreignKey' => 'bus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
