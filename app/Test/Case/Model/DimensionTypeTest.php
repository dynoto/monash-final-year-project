<?php
App::uses('DimensionType', 'Model');

/**
 * DimensionType Test Case
 *
 */
class DimensionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dimension_type',
		'app.dimension'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimensionType = ClassRegistry::init('DimensionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimensionType);

		parent::tearDown();
	}

}
