<?php
App::uses('AppModel', 'Model');
/**
 * Dimension Model
 *
 * @property DimensionType $DimensionType
 * @property Product $Product
 */
class Dimension extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dimension_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'max' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'numbers only, no negative(-) numbers',
				'allowEmpty' => true,
			)
		),
		'min' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'numbers only, no negative(-) numbers',
				'allowEmpty' => true,
			)
		),
		'increment' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'numbers only, no negative(-) numbers',
				'allowEmpty' => true,
			)
		),
		'default' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'numbers only, no negative(-) numbers',
				'allowEmpty' => true,
			)
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DimensionType' => array(
			'className' => 'DimensionType',
			'foreignKey' => 'dimension_type_id',
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
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'dimensions_products',
			'foreignKey' => 'dimension_id',
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
