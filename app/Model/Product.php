<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Discount $Discount
 * @property Image $Image
 * @property CriteriaValue $CriteriaValue
 * @property OrderItem $OrderItem
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $validate = array(
		'price' => array(
			'rule'=>'numeric',
			'message'=>'please input numbers only'
		),
		'name' => array(
			'rule'=>'isUnique',
			'message'=>'Product name exists, please choose another product name'
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Discount' => array(
			'className' => 'Discount',
			'foreignKey' => 'discount_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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
		// 'OrderItem' => array(
		// 	'className' => 'OrderItem',
		// 	'joinTable' => 'products_order_items',
		// 	'foreignKey' => 'product_id',
		// 	'associationForeignKey' => 'order_item_id',
		// 	'unique' => 'keepExisting',
		// 	'conditions' => '',
		// 	'fields' => '',
		// 	'order' => '',
		// 	'limit' => '',
		// 	'offset' => '',
		// 	'finderQuery' => '',
		// 	'deleteQuery' => '',
		// 	'insertQuery' => ''
		// )
	);

}
