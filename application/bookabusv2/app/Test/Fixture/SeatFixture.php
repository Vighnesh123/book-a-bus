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
		'seat_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'booking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'fk_seat_booking1_idx' => array('column' => 'booking_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
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
