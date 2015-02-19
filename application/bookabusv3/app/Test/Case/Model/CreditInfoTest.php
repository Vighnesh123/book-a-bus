<?php
App::uses('CreditInfo', 'Model');

/**
 * CreditInfo Test Case
 *
 */
class CreditInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.credit_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CreditInfo = ClassRegistry::init('CreditInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CreditInfo);

		parent::tearDown();
	}

}
