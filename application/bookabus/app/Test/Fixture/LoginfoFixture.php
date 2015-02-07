<?php
/**
 * LoginfoFixture
 *
 */
class LoginfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'loginfo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'fk_loginfo_user1_idx' => array('column' => 'customer_id', 'unique' => 0)
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
			'customer_id' => 1,
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
