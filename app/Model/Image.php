<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Kitchen $Kitchen
 */
class Image extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Kitchen' => array(
			'className' => 'Kitchen',
			'foreignKey' => 'kitchen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
