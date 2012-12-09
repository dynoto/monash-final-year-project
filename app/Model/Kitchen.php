<?php
App::uses('AppModel', 'Model');
/**
 * Kitchen Model
 *
 * @property Image $Image
 * @property Testimonial $Testimonial
 * @property CriteriaValue $CriteriaValue
 */
class Kitchen extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $validate = array(
		'name' => array('rule'=>'/^[\w\s\(\)]+$/','message'=>'Alphanumeric, Spaces and Parentheses only'),
		'priority' => array('rule'=>'decimal','message'=>'Decimals only','allowEmpty'=>true)
	);

	public $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'kitchen_id',
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
		'Testimonial' => array(
			'className' => 'Testimonial',
			'foreignKey' => 'kitchen_id',
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
			'joinTable' => 'criteria_values_kitchens',
			'foreignKey' => 'kitchen_id',
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
		)
	);

}
