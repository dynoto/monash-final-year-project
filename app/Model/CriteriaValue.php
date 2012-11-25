<?php
App::uses('AppModel', 'Model');
/**
 * CriteriaValue Model
 *
 * @property Criteria $Criteria
 * @property Kitchen $Kitchen
 */
class CriteriaValue extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'criteria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'rule'=>'isUnique',
			'message'=>'Criteria Value exists, please choose another product name'
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Criteria' => array(
			'className' => 'Criteria',
			'foreignKey' => 'criteria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Kitchen' => array(
			'className' => 'Kitchen',
			'joinTable' => 'criteria_values_kitchens',
			'foreignKey' => 'criteria_value_id',
			'associationForeignKey' => 'kitchen_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'criteria_values_products',
			'foreignKey' => 'criteria_value_id',
			'associationForeignKey' => 'product_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
