<?php
App::uses('EcSetting', 'Model');

/**
 * EcSetting Test Case
 *
 */
class EcSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ec_setting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EcSetting = ClassRegistry::init('EcSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EcSetting);

		parent::tearDown();
	}

}
