<?php
App::uses('AppModel', 'Model');
/**
 * ProductsRangeValue Model
 *
 * @property Product $Product
 * @property RangeValue $RangeValue
 */
class ProductsRangeValue extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RangeValue' => array(
			'className' => 'RangeValue',
			'foreignKey' => 'range_value_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
