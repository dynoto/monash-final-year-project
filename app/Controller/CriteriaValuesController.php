<?php
App::uses('AppController', 'Controller');
/**
 * CriteriaValues Controller
 *
 * @property CriteriaValue $CriteriaValue
 */
class CriteriaValuesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CriteriaValue->recursive = 0;
		$this->set('criteriaValues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CriteriaValue->id = $id;
		if (!$this->CriteriaValue->exists()) {
			throw new NotFoundException(__('Invalid criteria value'));
		}
		$this->set('criteriaValue', $this->CriteriaValue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
            $value = $this->request->data['CriteriaValue']['name'];
			$this->CriteriaValue->create();
			if ($this->CriteriaValue->save($this->request->data)) {
				$this->Session->setFlash(__('The criteria value has been saved'));
				$this->redirect(array('action' => 'add',$id));
			} else {
				$this->Session->setFlash(__('The criteria value could not be saved. Please, try again.'));
			}
		}
		$criteria_id = $id;
		$criterias = $this->CriteriaValue->Criteria->find('list');
		$this->set(compact('criterias','criteria_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CriteriaValue->id = $id;
		if (!$this->CriteriaValue->exists()) {
			throw new NotFoundException(__('Invalid criteria value'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$criteria_id = $this->request->data['CriteriaValue']['criteria_id'];
			if ($this->CriteriaValue->save($this->request->data)) {
				$this->Session->setFlash(__('The criteria value has been saved'));
				$this->redirect(array('controller'=>'criterias','action' => 'view',$criteria_id));
			} else {
				$this->Session->setFlash(__('The criteria value could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CriteriaValue->read(null, $id);
		}
		$criterias = $this->CriteriaValue->Criteria->find('list');
		$this->set(compact('criterias', 'kitchens'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$criteria_id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CriteriaValue->id = $id;
		if (!$this->CriteriaValue->exists()) {
			throw new NotFoundException(__('Invalid criteria value'));
		}
		if ($this->CriteriaValue->delete()) {
			$this->Session->setFlash(__('Criteria value deleted'));
			$this->redirect(array('controller'=>'criterias','action' => 'view',$criteria_id));
		} else {
		$this->Session->setFlash(__('Criteria value was not deleted'));
		$this->redirect(array('controller'=>'criterias','action' => 'view',$criteria_id));
		}
	}
}
