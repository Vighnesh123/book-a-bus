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
		'seat_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'booking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'fk_seat_booking1_idx' => array('column' => 'booking_id', 'unique' => 0)
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
			'seat_code' => 'Lo',
			'booking_id' => 1
		),
	);

}
