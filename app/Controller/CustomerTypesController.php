<?php
App::uses('AppController', 'Controller');
/**
 * CustomerTypes Controller
 *
 * @property CustomerType $CustomerType
 */
class CustomerTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerType->recursive = 0;
		$this->set('customerTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerType->id = $id;
		if (!$this->CustomerType->exists()) {
			throw new NotFoundException(__('Invalid customer type'));
		}
		$this->set('customerType', $this->CustomerType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerType->create();
			if ($this->CustomerType->save($this->request->data)) {
				$this->Session->setFlash(__('The customer type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer type could not be saved. Please, try again.'));
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
		$this->CustomerType->id = $id;
		if (!$this->CustomerType->exists()) {
			throw new NotFoundException(__('Invalid customer type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerType->save($this->request->data)) {
				$this->Session->setFlash(__('The customer type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerType->read(null, $id);
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
		$this->CustomerType->id = $id;
		if (!$this->CustomerType->exists()) {
			throw new NotFoundException(__('Invalid customer type'));
		}
		if ($this->CustomerType->delete()) {
			$this->Session->setFlash(__('Customer type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
