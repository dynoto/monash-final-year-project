<?php
App::uses('AppController', 'Controller');
/**
 * CriteriaValuesKitchens Controller
 *
 * @property CriteriaValuesKitchen $CriteriaValuesKitchen
 */
class CriteriaValuesKitchensController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CriteriaValuesKitchen->recursive = 0;
		$this->set('criteriaValuesKitchens', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CriteriaValuesKitchen->id = $id;
		if (!$this->CriteriaValuesKitchen->exists()) {
			throw new NotFoundException(__('Invalid criteria values kitchen'));
		}
		$this->set('criteriaValuesKitchen', $this->CriteriaValuesKitchen->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
                $this->loadModel('Kitchen',$id);
                $this->loadModel('Criteria');
                $this->loadModel('CriteriaValue');
                $this->set('criteria_ids',$this->Criteria->find('list'));
                $this->set('criteria_data',$this->Criteria->find('all'));
                $this->set('kitchen_data',$this->Kitchen->read());
		if ($this->request->is('post')) {
			$this->CriteriaValuesKitchen->create();
                        $request_data = $this->request->data;
			if ($this->CriteriaValuesKitchen->save($request_data)) {
				$this->Session->setFlash(__('The criteria values kitchen has been saved'));
				$this->redirect(array('controller'=>'kitchens','action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The criteria values kitchen could not be saved. Please, try again.'));
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
		$this->CriteriaValuesKitchen->id = $id;
		if (!$this->CriteriaValuesKitchen->exists()) {
			throw new NotFoundException(__('Invalid criteria values kitchen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CriteriaValuesKitchen->save($this->request->data)) {
				$this->Session->setFlash(__('The criteria values kitchen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criteria values kitchen could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CriteriaValuesKitchen->read(null, $id);
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
	public function delete($id = null,$kitchen_id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CriteriaValuesKitchen->id = $id;
		if (!$this->CriteriaValuesKitchen->exists()) {
			throw new NotFoundException(__('Invalid criteria values kitchen'));
		}
		if ($this->CriteriaValuesKitchen->delete()) {
			$this->Session->setFlash(__('Criteria values kitchen deleted'));
			$this->redirect(array('controller'=>'kitchens','action' => 'view',$kitchen_id));
		}
		$this->Session->setFlash(__('Criteria values kitchen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
