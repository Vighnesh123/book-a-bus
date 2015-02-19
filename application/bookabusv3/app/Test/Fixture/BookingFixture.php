<?php
/**
 * BookingFixture
 *
 */
class BookingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'booking';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'schedule_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'seat_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'booking_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_booking_customer1_idx' => array('column' => 'customer_id', 'unique' => 0),
			'fk_booking_schedule1_idx' => array('column' => 'schedule_id', 'unique' => 0),
			'fk_booking_seat1_idx' => array('column' => array('seat_code', 'bus_id'), 'unique' => 0)
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
			'customer_id' => 1,
			'schedule_id' => 1,
			'seat_code' => 'Lo',
			'bus_id' => 1,
			'booking_status' => 'Lorem ip'
		),
	);

}
