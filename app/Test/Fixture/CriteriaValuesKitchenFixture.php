<?php
/**
 * CriteriaValuesKitchenFixture
 *
 */
class CriteriaValuesKitchenFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'criteria_value_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'kitchen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_kitchens_subcriterias_subcriterias1_idx' => array('column' => 'criteria_value_id', 'unique' => 0),
			'fk_kitchens_subcriterias_kitchens1_idx' => array('column' => 'kitchen_id', 'unique' => 0)
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
			'id' => 'Lorem ipsum dolor sit amet',
			'criteria_value_id' => 1,
			'kitchen_id' => 1
		),
	);

}
