<?php
App::uses('Image', 'Model');

/**
 * Image Test Case
 *
 */
class ImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.image',
		'app.kitchen',
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
		$this->Image = ClassRegistry::init('Image');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Image);

		parent::tearDown();
	}

}
