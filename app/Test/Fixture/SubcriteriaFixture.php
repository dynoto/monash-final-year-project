<?php
/**
 * SubcriteriaFixture
 *
 */
class SubcriteriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'subcriteria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_substyles_styles_idx' => array('column' => 'subcriteria_id', 'unique' => 0)
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
			'subcriteria_id' => 1,
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
