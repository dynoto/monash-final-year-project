<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Image $Image
 * @property CriteriaValue $CriteriaValue
 * @property Dimension $Dimension
 * @property Finish $Finish
 */
class Product extends AppModel {


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
		'StandardDimension' => array(
			'className' => 'StandardDimension',
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
		'Finish' => array(
			'className' => 'Finish',
			'joinTable' => 'finishes_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'finish_id',
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
