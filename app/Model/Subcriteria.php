<?php
App::uses('AppModel', 'Model');
/**
 * Subcriteria Model
 *
 * @property Style $Style
 * @property Kitchen $Kitchen
 */
class Subcriteria extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'style_id' => array(
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
		'Style' => array(
			'className' => 'Style',
			'foreignKey' => 'style_id',
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
			'joinTable' => 'kitchens_subcriterias',
			'foreignKey' => 'subcriteria_id',
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
		)
	);

}
