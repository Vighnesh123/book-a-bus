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
		'scheadule_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'booking_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_booking_scheadule1_idx' => array('column' => 'scheadule_id', 'unique' => 0),
			'fk_booking_customer1_idx' => array('column' => 'customer_id', 'unique' => 0)
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
			'scheadule_id' => 1,
			'customer_id' => 1,
			'booking_status' => 'Lorem ip'
		),
	);

}
