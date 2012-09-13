<?php
App::uses('AppModel', 'Model');
/**
 * Criteria Model
 *
 * @property CriteriaValue $CriteriaValue
 */
class Criteria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CriteriaValue' => array(
			'className' => 'CriteriaValue',
			'foreignKey' => 'criteria_id',
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
