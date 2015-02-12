<?php
App::uses('Loginfo', 'Model');

/**
 * Loginfo Test Case
 *
 */
class LoginfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loginfo',
		'app.customer',
		'app.booking',
		'app.scheadule',
		'app.seat',
		'app.credit_info',
		'app.reward'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loginfo = ClassRegistry::init('Loginfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loginfo);

		parent::tearDown();
	}

}
