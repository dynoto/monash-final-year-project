<?php
App::uses('StandardDimension', 'Model');

/**
 * StandardDimension Test Case
 *
 */
class StandardDimensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.standard_dimension',
		'app.products'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StandardDimension = ClassRegistry::init('StandardDimension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StandardDimension);

		parent::tearDown();
	}

}
