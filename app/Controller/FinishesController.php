<?php
App::uses('AppController', 'Controller');
/**
 * Finishes Controller
 *
 * @property Finish $Finish
 */
class FinishesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Finish->recursive = 0;
		$this->set('finishes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Finish->id = $id;
		if (!$this->Finish->exists()) {
			throw new NotFoundException(__('Invalid finish'));
		}
		$this->set('finish', $this->Finish->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Finish->create();
			if ($this->Finish->save($this->request->data)) {
				$this->Session->setFlash(__('The finish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finish could not be saved. Please, try again.'));
			}
		}
		$products = $this->Finish->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Finish->id = $id;
		if (!$this->Finish->exists()) {
			throw new NotFoundException(__('Invalid finish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Finish->save($this->request->data)) {
				$this->Session->setFlash(__('The finish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finish could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Finish->read(null, $id);
		}
		$products = $this->Finish->Product->find('list');
		$this->set(compact('products'));
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
		$this->Finish->id = $id;
		if (!$this->Finish->exists()) {
			throw new NotFoundException(__('Invalid finish'));
		}
		if ($this->Finish->delete()) {
			$this->Session->setFlash(__('Finish deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Finish was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
