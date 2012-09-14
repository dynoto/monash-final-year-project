<?php
App::uses('CriteriaValue', 'Model');

/**
 * CriteriaValue Test Case
 *
 */
class CriteriaValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.criteria_value',
		'app.criteria',
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
		$this->CriteriaValue = ClassRegistry::init('CriteriaValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CriteriaValue);

		parent::tearDown();
	}

}
