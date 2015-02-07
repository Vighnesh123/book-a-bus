<?php
/**
 * EmployeeLoginFixture
 *
 */
class EmployeeLoginFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'employee_login';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'employee_id', 'unique' => 1),
			'fk_table1_employee2_idx' => array('column' => 'employee_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'employee_id' => 1,
			'username' => 'Lorem ipsu',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
