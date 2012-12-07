<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Image $Image
 * @property OrderItem $OrderItem
 * @property CriteriaValue $CriteriaValue
 * @property Dimension $Dimension
 * @property RangeValue $RangeValue
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $validate = array(
		'name' => array('rule'=>'/^[\w\s\(\)]+$/','message'=>'Alphanumeric, Spaces and Parentheses only'),
		'priority' => array('rule'=>'numeric','message'=>'Numbers only','allowEmpty'=>true)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'OrderItem' => array(
			'className' => 'OrderItem',
			'foreignKey' => 'product_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'CriteriaValue' => array(
			'className' => 'CriteriaValue',
			'joinTable' => 'criteria_values_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'criteria_value_id',
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
		'Dimension' => array(
			'className' => 'Dimension',
			'joinTable' => 'dimensions_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'dimension_id',
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
		'RangeValue' => array(
			'className' => 'RangeValue',
			'joinTable' => 'products_range_values',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'range_value_id',
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
