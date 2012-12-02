<?php
App::uses('OrderItem', 'Model');

/**
 * OrderItem Test Case
 *
 */
class OrderItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order_item',
		'app.order',
		'app.customer',
		'app.customer_type',
		'app.user',
		'app.group',
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
		'app.range_value',
		'app.range_type',
		'app.order_items_range_value',
		'app.products_range_value'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderItem = ClassRegistry::init('OrderItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderItem);

		parent::tearDown();
	}

}
