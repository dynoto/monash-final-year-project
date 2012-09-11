<?php
App::uses('Subcriteria', 'Model');

/**
 * Subcriteria Test Case
 *
 */
class SubcriteriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcriteria',
		'app.kitchen',
		'app.image',
		'app.testimonial',
		'app.kitchens_subcriteria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcriteria = ClassRegistry::init('Subcriteria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcriteria);

		parent::tearDown();
	}

}
