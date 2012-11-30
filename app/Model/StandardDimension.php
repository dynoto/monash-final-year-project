<?php
App::uses('AppModel', 'Model');
/**
 * StandardDimension Model
 *
 * @property Products $Products
 */
class StandardDimension extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Products' => array(
			'className' => 'Products',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
