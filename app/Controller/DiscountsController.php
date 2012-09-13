<?php
App::uses('AppController', 'Controller');
/**
 * Discounts Controller
 *
 * @property Discount $Discount
 */
class DiscountsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Discount->recursive = 0;
		$this->set('discounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		$this->set('discount', $this->Discount->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Discount->create();
			if ($this->Discount->save($this->request->data)) {
				$this->Session->setFlash(__('The discount has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Discount->save($this->request->data)) {
				$this->Session->setFlash(__('The discount has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Discount->read(null, $id);
		}
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
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		if ($this->Discount->delete()) {
			$this->Session->setFlash(__('Discount deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Discount was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
