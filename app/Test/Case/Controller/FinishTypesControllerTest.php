<?php
App::uses('FinishTypesController', 'Controller');

/**
 * FinishTypesController Test Case
 *
 */
class FinishTypesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finish_type',
		'app.finish',
		'app.product',
		'app.image',
		'app.kitchen',
		'app.testimonial',
		'app.criteria_value',
		'app.criteria',
		'app.criteria_values_kitchen',
		'app.criteria_values_product',
		'app.finishes_product'
	);

}
