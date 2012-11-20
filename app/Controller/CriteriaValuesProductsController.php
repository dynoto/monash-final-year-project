<?php
App::uses('AppController', 'Controller');
/**
 * CriteriaValuesProducts Controller
 *
 * @property CriteriaValuesProduct $CriteriaValuesProduct
 */
class CriteriaValuesProductsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CriteriaValuesProduct->recursive = 0;
		$this->set('criteriaValuesProducts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CriteriaValuesProduct->id = $id;
		if (!$this->CriteriaValuesProduct->exists()) {
			throw new NotFoundException(__('Invalid criteria values product'));
		}
		$this->set('criteriaValuesProduct', $this->CriteriaValuesProduct->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CriteriaValuesProduct->create();
			if ($this->CriteriaValuesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The criteria values product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criteria values product could not be saved. Please, try again.'));
			}
		}
		$products = $this->CriteriaValuesProduct->Product->find('list');
		$criteriaValues = $this->CriteriaValuesProduct->CriteriaValue->find('list');
		$this->set(compact('products', 'criteriaValues'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CriteriaValuesProduct->id = $id;
		if (!$this->CriteriaValuesProduct->exists()) {
			throw new NotFoundException(__('Invalid criteria values product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CriteriaValuesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The criteria values product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criteria values product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CriteriaValuesProduct->read(null, $id);
		}
		$products = $this->CriteriaValuesProduct->Product->find('list');
		$criteriaValues = $this->CriteriaValuesProduct->CriteriaValue->find('list');
		$this->set(compact('products', 'criteriaValues'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CriteriaValuesProduct->id = $id;
		if (!$this->CriteriaValuesProduct->exists()) {
			throw new NotFoundException(__('Invalid criteria values product'));
		}
		if ($this->CriteriaValuesProduct->delete()) {
			$this->Session->setFlash(__('Criteria values product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Criteria values product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
