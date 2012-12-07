<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function beforeFilter(){
		parent::beforeFilter();
		$models = array('Criteria',
        				'CriteriaValuesProduct',
        				'Image',
        				'CriteriaValue',
        				'DimensionType',
        				'Dimension',
        				'DimensionsProduct',
        				'StandardDimension',
        				'RangeValue',
        				'RangeType',
        				'ProductsRangeValue',
        				'OrderItemsRangeValue',
        				'Order',
        				'OrderItem',
        				'Product'
        				);
        foreach ($models as $key => $value) {
        	$this->loadModel($value);
        }
	}



	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null,$customer_id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->Order->recursive = 2;
		$products = $this->Product->find('list');
		$range_types = $this->RangeType->find('list');
		$this->set(compact('products','range_types','customer_id'));
		$this->set('order', $this->Order->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Order->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Order->read(null, $id);
		}
		$customers = $this->Order->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$customer_id = nul) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$order_items = $this->OrderItem->find('list',array('conditions'=>array('order_id'=>$id)));
		foreach ($order_items as $value) {
			$this->OrderItemsRangeValue->deleteAll(array('OrderItemsRangeValue.order_item_id'=>$value));
		}
		$this->OrderItem->deleteAll(array('OrderItem.order_id'=>$id));
		if ($this->Order->delete()):
			$this->Session->setFlash(__('Order deleted'));
			if($customer_id != null):
				$this->redirect(array('controller'=>'customers','action' => 'view',$customer_id));
			else:
				$this->redirect(array('action' => 'index'));
			endif;
		endif;
		$this->Session->setFlash(__('Order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
