<?php
/**
 * DimensionFixture
 *
 */
class DimensionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dimension_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'min' => array('type' => 'integer', 'null' => true, 'default' => null),
		'max' => array('type' => 'integer', 'null' => true, 'default' => null),
		'increment' => array('type' => 'integer', 'null' => true, 'default' => null),
		'default' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_dimension_dimension_type1_idx' => array('column' => 'dimension_type_id', 'unique' => 0)
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
			'dimension_type_id' => 1,
			'min' => 1,
			'max' => 1,
			'increment' => 1,
			'default' => 1
		),
	);

}
