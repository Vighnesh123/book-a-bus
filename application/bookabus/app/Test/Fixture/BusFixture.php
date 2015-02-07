<?php
/**
 * BusFixture
 *
 */
class BusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'bus';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'plate_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'seating_cap' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'condition' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'plate_no' => 'Lorem',
			'seating_cap' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'condition' => 'Lorem ipsum dolor sit amet'
		),
	);

}
