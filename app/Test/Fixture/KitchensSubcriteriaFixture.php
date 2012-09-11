<?php
/**
 * KitchensSubcriteriaFixture
 *
 */
class KitchensSubcriteriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'subcriteria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'kitchen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fk_kitchens_subcriterias_subcriterias1_idx' => array('column' => 'subcriteria_id', 'unique' => 0),
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
			'subcriteria_id' => 1,
			'kitchen_id' => 1
		),
	);

}
