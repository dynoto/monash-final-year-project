<?php
App::uses('AppModel', 'Model');
/**
 * RangeType Model
 *
 * @property RangeValue $RangeValue
 */
class RangeType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RangeValue' => array(
			'className' => 'RangeValue',
			'foreignKey' => 'range_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
