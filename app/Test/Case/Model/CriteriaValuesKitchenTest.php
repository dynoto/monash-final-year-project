<?php
App::uses('CriteriaValuesKitchen', 'Model');

/**
 * CriteriaValuesKitchen Test Case
 *
 */
class CriteriaValuesKitchenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.criteria_values_kitchen',
		'app.criteria_value',
		'app.criteria',
		'app.kitchen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CriteriaValuesKitchen = ClassRegistry::init('CriteriaValuesKitchen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CriteriaValuesKitchen);

		parent::tearDown();
	}

}
