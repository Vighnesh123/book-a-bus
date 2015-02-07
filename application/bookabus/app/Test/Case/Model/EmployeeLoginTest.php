<?php
App::uses('EmployeeLogin', 'Model');

/**
 * EmployeeLogin Test Case
 *
 */
class EmployeeLoginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employee_login'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeeLogin = ClassRegistry::init('EmployeeLogin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeeLogin);

		parent::tearDown();
	}

}
