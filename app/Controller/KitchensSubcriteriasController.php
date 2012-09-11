<?php
App::uses('AppController', 'Controller');
/**
 * KitchensSubcriterias Controller
 *
 * @property KitchensSubcriteria $KitchensSubcriteria
 */
class KitchensSubcriteriasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->KitchensSubcriteria->recursive = 0;
		$this->set('kitchensSubcriterias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->KitchensSubcriteria->id = $id;
		if (!$this->KitchensSubcriteria->exists()) {
			throw new NotFoundException(__('Invalid kitchens subcriteria'));
		}
		$this->set('kitchensSubcriteria', $this->KitchensSubcriteria->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->KitchensSubcriteria->create();
			if ($this->KitchensSubcriteria->save($this->request->data)) {
				$this->Session->setFlash(__('The kitchens subcriteria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitchens subcriteria could not be saved. Please, try again.'));
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
		$this->KitchensSubcriteria->id = $id;
		if (!$this->KitchensSubcriteria->exists()) {
			throw new NotFoundException(__('Invalid kitchens subcriteria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->KitchensSubcriteria->save($this->request->data)) {
				$this->Session->setFlash(__('The kitchens subcriteria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitchens subcriteria could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->KitchensSubcriteria->read(null, $id);
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
		$this->KitchensSubcriteria->id = $id;
		if (!$this->KitchensSubcriteria->exists()) {
			throw new NotFoundException(__('Invalid kitchens subcriteria'));
		}
		if ($this->KitchensSubcriteria->delete()) {
			$this->Session->setFlash(__('Kitchens subcriteria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kitchens subcriteria was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
