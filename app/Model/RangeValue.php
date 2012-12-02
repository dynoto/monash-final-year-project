<?php
App::uses('AppModel', 'Model');
/**
 * RangeValue Model
 *
 * @property RangeType $RangeType
 * @property OrderItem $OrderItem
 * @property Product $Product
 */
class RangeValue extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RangeType' => array(
			'className' => 'RangeType',
			'foreignKey' => 'range_type_id',
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
		'OrderItem' => array(
			'className' => 'OrderItem',
			'joinTable' => 'order_items_range_values',
			'foreignKey' => 'range_value_id',
			'associationForeignKey' => 'order_item_id',
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
			'joinTable' => 'products_range_values',
			'foreignKey' => 'range_value_id',
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
