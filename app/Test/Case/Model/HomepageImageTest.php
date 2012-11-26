<?php
App::uses('HomepageImage', 'Model');

/**
 * HomepageImage Test Case
 *
 */
class HomepageImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.homepage_image',
		'app.images'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HomepageImage = ClassRegistry::init('HomepageImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HomepageImage);

		parent::tearDown();
	}

}
