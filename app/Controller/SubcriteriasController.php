<?php
App::uses('AppController', 'Controller');
/**
 * Subcriterias Controller
 *
 * @property Subcriteria $Subcriteria
 */
class SubcriteriasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subcriteria->recursive = 0;
		$this->set('subcriterias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subcriteria->id = $id;
		if (!$this->Subcriteria->exists()) {
			throw new NotFoundException(__('Invalid subcriteria'));
		}
		$this->set('subcriteria', $this->Subcriteria->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subcriteria->create();
			if ($this->Subcriteria->save($this->request->data)) {
				$this->Session->setFlash(__('The subcriteria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcriteria could not be saved. Please, try again.'));
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
		$this->Subcriteria->id = $id;
		if (!$this->Subcriteria->exists()) {
			throw new NotFoundException(__('Invalid subcriteria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subcriteria->save($this->request->data)) {
				$this->Session->setFlash(__('The subcriteria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcriteria could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subcriteria->read(null, $id);
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
		$this->Subcriteria->id = $id;
		if (!$this->Subcriteria->exists()) {
			throw new NotFoundException(__('Invalid subcriteria'));
		}
		if ($this->Subcriteria->delete()) {
			$this->Session->setFlash(__('Subcriteria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subcriteria was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
