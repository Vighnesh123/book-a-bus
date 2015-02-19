<?php
/**
 * SeatFixture
 *
 */
class SeatFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'seat';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('code', 'bus_id'), 'unique' => 1),
			'fk_seat_bus1_idx' => array('column' => 'bus_id', 'unique' => 0)
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
			'code' => 'Lo',
			'bus_id' => 1
		),
	);

}
