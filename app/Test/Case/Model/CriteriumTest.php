<?php
App::uses('Criterium', 'Model');

/**
 * Criterium Test Case
 *
 */
class CriteriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Criterium = ClassRegistry::init('Criterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Criterium);

		parent::tearDown();
	}

}
