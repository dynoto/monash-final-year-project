<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property CustomerType $CustomerType
 * @property Discounts $Discounts
 */
class Customer extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CustomerType' => array(
			'className' => 'CustomerType',
			'foreignKey' => 'customer_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Discounts' => array(
			'className' => 'Discounts',
			'foreignKey' => 'discounts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
