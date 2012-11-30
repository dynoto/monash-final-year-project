<?php
App::uses('Finish', 'Model');

/**
 * Finish Test Case
 *
 */
class FinishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finish',
		'app.finish_type',
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
		$this->Finish = ClassRegistry::init('Finish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Finish);

		parent::tearDown();
	}

}
