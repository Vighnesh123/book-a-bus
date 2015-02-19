<?php
App::uses('Reward', 'Model');

/**
 * Reward Test Case
 *
 */
class RewardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reward',
		'app.customer',
		'app.booking',
		'app.schedule',
		'app.bus',
		'app.seat',
		'app.credit_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reward = ClassRegistry::init('Reward');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reward);

		parent::tearDown();
	}

}
