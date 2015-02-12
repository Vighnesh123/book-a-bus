<?php
/**
 * ScheaduleFixture
 *
 */
class ScheaduleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'scheadule';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'bus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'destination' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'station' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'departure' => array('type' => 'time', 'null' => false, 'default' => null),
		'ETA' => array('type' => 'time', 'null' => false, 'default' => null),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'fare' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '4,2', 'unsigned' => false),
		'trip_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_scheadule_bus1_idx' => array('column' => 'bus_id', 'unique' => 0)
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
			'id' => 1,
			'bus_id' => 1,
			'destination' => 'Lorem ipsum dolor sit amet',
			'station' => 'Lorem ipsum dolor sit amet',
			'departure' => '10:09:34',
			'ETA' => '10:09:34',
			'date' => '2015-02-12',
			'fare' => '',
			'trip_status' => 'Lorem ipsum dolor sit amet'
		),
	);

}
