<?php
/**
 * ScheduleFixture
 *
 */
class ScheduleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'schedule';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'bus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'destination' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'station' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'departure' => array('type' => 'time', 'null' => false, 'default' => null),
		'ETA' => array('type' => 'time', 'null' => false, 'default' => null),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'fare' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '4,2', 'unsigned' => false),
		'trip_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_schedule_bus1_idx' => array('column' => 'bus_id', 'unique' => 0)
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
			'bus_id' => 1,
			'destination' => 'Lorem ipsum dolor sit amet',
			'station' => 'Lorem ipsum dolor sit amet',
			'departure' => '15:12:25',
			'ETA' => '15:12:25',
			'date' => '2015-02-19',
			'fare' => '',
			'trip_status' => 'Lorem ipsum dolor sit amet'
		),
	);

}
