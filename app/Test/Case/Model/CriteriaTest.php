<?php
App::uses('Criteria', 'Model');

/**
 * Criteria Test Case
 *
 */
class CriteriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.criteria',
		'app.criteria_value',
		'app.kitchen',
		'app.criteria_values_kitchen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Criteria = ClassRegistry::init('Criteria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Criteria);

		parent::tearDown();
	}

}
