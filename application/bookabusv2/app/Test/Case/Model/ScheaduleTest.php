<?php
App::uses('Scheadule', 'Model');

/**
 * Scheadule Test Case
 *
 */
class ScheaduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scheadule',
		'app.bus',
		'app.booking',
		'app.customer',
		'app.credit_info',
		'app.loginfo',
		'app.reward',
		'app.seat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Scheadule = ClassRegistry::init('Scheadule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Scheadule);

		parent::tearDown();
	}

}
