<?php
/**
 * HomepageImageFixture
 *
 */
class HomepageImageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'images_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'position' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_homepage_images_images1_idx' => array('column' => 'images_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'images_id' => 1,
			'position' => 1
		),
	);

}
