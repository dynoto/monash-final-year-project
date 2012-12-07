<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property CustomerType $CustomerType
 * @property Discount $Discount
 * @property Users $Users
 * @property Order $Order
 */
class Customer extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'rule' => '/^[\w\s\.]+$/',
			'message'=>'Alphanumeric, Period(.) and Spaces only',
			'allowEmpty'=>false
		),
		'email' => array(
			'rule' => array('email',true),
			'message' => 'Please input a valid email',
			'allowEmpty' => false
		),
		'phone' => array(
			'regex' => array(
				'rule' => '/^[\d\s\-\(\)\+]+$/',
				'message' => 'Numbers, Spaces, Dashes(-), Plus Sign(+) and Curly Brackets only',
				'allowEmpty' => true,
 			)
		),
		// 'address' => array(
		// 	'regex' => array(
		// 		'message' => 'Please input your address',
		// 		'allowEmpty' => false
		// 	)
		// )

	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CustomerType' => array(
			'className' => 'CustomerType',
			'foreignKey' => 'customer_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'customer_id',
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

}
