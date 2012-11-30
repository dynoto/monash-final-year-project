<?php
App::uses('FinishType', 'Model');

/**
 * FinishType Test Case
 *
 */
class FinishTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finish_type',
		'app.finish',
		'app.product',
		'app.image',
		'app.kitchen',
		'app.testimonial',
		'app.criteria_value',
		'app.criteria',
		'app.criteria_values_kitchen',
		'app.criteria_values_product',
		'app.finishes_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinishType = ClassRegistry::init('FinishType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinishType);

		parent::tearDown();
	}

}
