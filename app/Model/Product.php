<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Discounts $Discounts
 */
class Product extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Discounts' => array(
			'className' => 'Discounts',
			'foreignKey' => 'discounts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
