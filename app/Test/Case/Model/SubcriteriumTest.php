<?php
App::uses('Subcriterium', 'Model');

/**
 * Subcriterium Test Case
 *
 */
class SubcriteriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcriterium = ClassRegistry::init('Subcriterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcriterium);

		parent::tearDown();
	}

}
