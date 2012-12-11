<?php
App::uses('AppModel', 'Model');
/**
 * Enquiry Model
 *
 */
class Enquiry extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Cannot be empty',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'regex' => array(
				'rule'=>'/^[\w\s\.]+$/',
				'message'=>'Alphanumeric, Period(.) and Spaces only'
			)
		),
		'email' => array(
			'regex' => array(
				'rule' => '/^[\w\.\_\-]+[\@][\w]+[\.][\w\.]+$/',
				'message' => 'Alphanumeric, Period( . ), Dash( - ), Underscore( _ ), At Sign( @ ) only',
				'allowEmpty' => true
 			)
		),
		'telephone' => array(
			'regex' => array(
				'rule' => '/^[\d\s\-\(\)\+]+$/',
				'message' => 'Numbers, Spaces, Dashes(-) and Curly Brackets only',
				'allowEmpty' => true
 			)
		)
	);
}
