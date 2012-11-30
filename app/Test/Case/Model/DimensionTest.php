<?php
App::uses('Dimension', 'Model');

/**
 * Dimension Test Case
 *
 */
class DimensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dimension',
		'app.dimension_type',
		'app.product',
		'app.image',
		'app.kitchen',
		'app.testimonial',
		'app.criteria_value',
		'app.criteria',
		'app.criteria_values_kitchen',
		'app.criteria_values_product',
		'app.dimensions_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dimension = ClassRegistry::init('Dimension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dimension);

		parent::tearDown();
	}

}
