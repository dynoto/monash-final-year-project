<?php
App::uses('KitchensSubcriterium', 'Model');

/**
 * KitchensSubcriterium Test Case
 *
 */
class KitchensSubcriteriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KitchensSubcriterium = ClassRegistry::init('KitchensSubcriterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KitchensSubcriterium);

		parent::tearDown();
	}

}
