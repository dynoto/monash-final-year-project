<?php
App::uses('AppModel', 'Model');
/**
 * KitchensSubcriteria Model
 *
 * @property Subcriteria $Subcriteria
 * @property Kitchen $Kitchen
 */
class KitchensSubcriteria extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'subcriteria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'kitchen_id' => array(
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
		'Subcriteria' => array(
			'className' => 'Subcriteria',
			'foreignKey' => 'subcriteria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Kitchen' => array(
			'className' => 'Kitchen',
			'foreignKey' => 'kitchen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
