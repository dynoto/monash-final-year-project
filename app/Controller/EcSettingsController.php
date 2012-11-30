<?php
App::uses('AppController', 'Controller');
/**
 * EcSettings Controller
 *
 * @property EcSetting $EcSetting
 */
class EcSettingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EcSetting->recursive = 0;
		$this->set('ecSettings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EcSetting->id = $id;
		if (!$this->EcSetting->exists()) {
			throw new NotFoundException(__('Invalid ec setting'));
		}
		$this->set('ecSetting', $this->EcSetting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EcSetting->create();
			if ($this->EcSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The ec setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ec setting could not be saved. Please, try again.'));
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
		$this->EcSetting->id = $id;
		if (!$this->EcSetting->exists()) {
			throw new NotFoundException(__('Invalid ec setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EcSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The ec setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ec setting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EcSetting->read(null, $id);
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
		$this->EcSetting->id = $id;
		if (!$this->EcSetting->exists()) {
			throw new NotFoundException(__('Invalid ec setting'));
		}
		if ($this->EcSetting->delete()) {
			$this->Session->setFlash(__('Ec setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ec setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
