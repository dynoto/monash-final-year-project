<?php
App::uses('AppController', 'Controller');
/**
 * RangeTypes Controller
 *
 * @property RangeType $RangeType
 */
class RangeTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->RangeType->recursive = 0;
		// $this->set('rangeTypes', $this->paginate());
		$this->redirect(array('controller'=>'criterias'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RangeType->id = $id;
		if (!$this->RangeType->exists()) {
			throw new NotFoundException(__('Invalid range type'));
		}
		$this->set('rangeType', $this->RangeType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RangeType->create();
			if ($this->RangeType->save($this->request->data)) {
				$this->Session->setFlash(__('The range type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The range type could not be saved. Please, try again.'));
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
		$this->RangeType->id = $id;
		if (!$this->RangeType->exists()) {
			throw new NotFoundException(__('Invalid range type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RangeType->save($this->request->data)) {
				$this->Session->setFlash(__('The range type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The range type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RangeType->read(null, $id);
		}
		$this->set('rangeType', $this->RangeType->read(null, $id));
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
		$this->RangeType->id = $id;
		if (!$this->RangeType->exists()) {
			throw new NotFoundException(__('Invalid range type'));
		}
		if ($this->RangeType->delete()) {
			$this->Session->setFlash(__('Range type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Range type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
