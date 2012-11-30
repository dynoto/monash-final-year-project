<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
		'app.image',
		'app.kitchen',
		'app.testimonial',
		'app.criteria_value',
		'app.criteria',
		'app.criteria_values_kitchen',
		'app.criteria_values_product',
		'app.dimension',
		'app.dimension_type',
		'app.dimensions_product',
		'app.finish',
		'app.finish_type',
		'app.finishes_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
