<?php
App::uses('AppController', 'Controller');
/**
 * Kitchens Controller
 *
 * @property Kitchen $Kitchen
 */
class KitchensController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kitchen->recursive = 0;
		$this->set('kitchens', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Kitchen->id = $id;
		if (!$this->Kitchen->exists()) {
			throw new NotFoundException(__('Invalid kitchen'));
		}
		$this->set('kitchen', $this->Kitchen->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kitchen->create();
			if ($this->Kitchen->save($this->request->data)) {
				$this->Session->setFlash(__('The kitchen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitchen could not be saved. Please, try again.'));
			}
		}
		$subcriterias = $this->Kitchen->Subcriterium->find('list');
		$this->set(compact('subcriterias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Kitchen->id = $id;
		if (!$this->Kitchen->exists()) {
			throw new NotFoundException(__('Invalid kitchen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Kitchen->save($this->request->data)) {
				$this->Session->setFlash(__('The kitchen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitchen could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Kitchen->read(null, $id);
		}
		$subcriterias = $this->Kitchen->Subcriterium->find('list');
		$this->set(compact('subcriterias'));
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
		$this->Kitchen->id = $id;
		if (!$this->Kitchen->exists()) {
			throw new NotFoundException(__('Invalid kitchen'));
		}
		if ($this->Kitchen->delete()) {
			$this->Session->setFlash(__('Kitchen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kitchen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
