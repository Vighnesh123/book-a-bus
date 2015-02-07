<?php
/**
 * InvoiceFixture
 *
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'invoice';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'billing_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'fk_table1_billing1_idx' => array('column' => 'billing_id', 'unique' => 0),
			'fk_table1_employee1_idx' => array('column' => 'employee_id', 'unique' => 0)
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
			'billing_id' => 1,
			'employee_id' => 1,
			'status' => 'Lorem ip'
		),
	);

}
