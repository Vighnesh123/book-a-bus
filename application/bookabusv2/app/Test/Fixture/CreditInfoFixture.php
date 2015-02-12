<?php
/**
 * CreditInfoFixture
 *
 */
class CreditInfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'credit_info';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'card_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'credit_provider' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'expiration_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('customer_id', 'card_number'), 'unique' => 1),
			'fk_credit_info_customer1_idx' => array('column' => 'customer_id', 'unique' => 0)
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
			'customer_id' => 1,
			'card_number' => 'Lorem ipsum dolor sit amet',
			'credit_provider' => 'Lorem ipsum dolor sit amet',
			'expiration_date' => '2015-02-12'
		),
	);

}
