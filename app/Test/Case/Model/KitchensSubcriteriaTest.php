<?php
App::uses('KitchensSubcriteria', 'Model');

/**
 * KitchensSubcriteria Test Case
 *
 */
class KitchensSubcriteriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kitchens_subcriteria',
		'app.subcriteria',
		'app.kitchen',
		'app.image',
		'app.testimonial'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KitchensSubcriteria = ClassRegistry::init('KitchensSubcriteria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KitchensSubcriteria);

		parent::tearDown();
	}

}
