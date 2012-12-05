<?php
App::uses('AppController', 'Controller');
/**
 * RangeValues Controller
 *
 * @property RangeValue $RangeValue
 */
class RangeValuesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RangeValue->recursive = 0;
		$this->set('rangeValues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RangeValue->id = $id;
		if (!$this->RangeValue->exists()) {
			throw new NotFoundException(__('Invalid range value'));
		}
		$this->set('rangeValue', $this->RangeValue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
            $value = $this->request->data['RangeValue']['name'];
			$this->RangeValue->create();
			if ($this->RangeValue->save($this->request->data)) {
				$this->Session->setFlash(__('The range value has been saved'));
				$this->redirect(array('action' => 'add',$id));
			} else {
				$this->Session->setFlash(__('The range value could not be saved. Please, try again.'));
			}
		}
		$rangeType_id = $id;
		$rangeTypes = $this->RangeValue->RangeType->find('list');
		$this->set(compact('rangeTypes','rangeType_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RangeValue->id = $id;
		if (!$this->RangeValue->exists()) {
			throw new NotFoundException(__('Invalid range value'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$range_type_id = $this->request->data['RangeValue']['range_type_id'];
			if ($this->RangeValue->save($this->request->data)) {
				$this->Session->setFlash(__('The range value has been saved'));
				$this->redirect(array('controller'=>'rangetypes','action' => 'view',$range_type_id));
			} else {
				$this->Session->setFlash(__('The range value could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RangeValue->read(null, $id);
		}
		$rangeTypes = $this->RangeValue->RangeType->find('list');
		$this->set(compact('rangeTypes', 'orderItems', 'products'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$range_type_id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->RangeValue->id = $id;
		if (!$this->RangeValue->exists()) {
			throw new NotFoundException(__('Invalid range value'));
		}
		if ($this->RangeValue->delete()) {
			$this->Session->setFlash(__('Range value deleted'));
			$this->redirect(array('controller'=>'rangetypes','action' => 'view',$range_type_id));
		}
		$this->Session->setFlash(__('Range value was not deleted'));
		$this->redirect(array('controller'=>'rangetypes','action' => 'view',$range_type_id));
	}
}
