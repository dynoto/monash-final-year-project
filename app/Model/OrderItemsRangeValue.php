<?php
App::uses('AppModel', 'Model');
/**
 * OrderItemsRangeValue Model
 *
 * @property OrderItem $OrderItem
 * @property RangeValue $RangeValue
 */
class OrderItemsRangeValue extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'OrderItem' => array(
			'className' => 'OrderItem',
			'foreignKey' => 'order_item_id',
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
