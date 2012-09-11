<?php
App::uses('Kitchen', 'Model');

/**
 * Kitchen Test Case
 *
 */
class KitchenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kitchen',
		'app.image',
		'app.testimonial',
		'app.subcriteria',
		'app.kitchens_subcriteria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kitchen = ClassRegistry::init('Kitchen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kitchen);

		parent::tearDown();
	}

}
