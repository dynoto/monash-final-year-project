<?php

App::uses('AppController', 'Controller');

/**
 * Criterias Controller
 *
 * @property Criteria $Criteria
 */
class CriteriasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->loadModel('RangeType');
        $this->Criteria->recursive = 0;
        $this->set('criterias', $this->paginate());
        $this->set('rangetypes',$this->RangeType->find('list'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Criteria->id = $id;
        if (!$this->Criteria->exists()) {
            throw new NotFoundException(__('Invalid criteria'));
        }
        $this->set('criteria', $this->Criteria->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $rqData = $this->request->data;
            if($rqData['Criteria']['for'] == 'kitchen'){
                $rqData['Criteria']['kitchen'] = 1;
            } else if ($rqData['Criteria']['for'] == 'product') {
                $rqData['Criteria']['product'] = 1;
            }
            $this->Criteria->create();
            if ($this->Criteria->save($rqData)) {
                $this->Session->setFlash(__('The criteria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The criteria could not be saved. Please, try again.'));
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
        $this->Criteria->id = $id;
        if (!$this->Criteria->exists()) {
            throw new NotFoundException(__('Invalid criteria'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $rqData = $this->request->data;
            if($rqData['Criteria']['for'] == 'kitchen'){
                $rqData['Criteria']['kitchen'] = 1;
                $rqData['Criteria']['product'] = 0;
            } else if ($rqData['Criteria']['for'] == 'product') {
                $rqData['Criteria']['product'] = 1;
                $rqData['Criteria']['kitchen'] = 0;
            }
            if ($this->Criteria->save($rqData)) {
                $this->Session->setFlash(__('The criteria has been updated'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The criteria could not be updated. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Criteria->read(null, $id);
        }
        $this->set('criteria', $this->Criteria->read(null, $id));
        $this->set('criteria_id',$id);
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
        $this->loadModel('CriteriaValue');
        
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Criteria->id = $id;
        if (!$this->Criteria->exists()) {
            throw new NotFoundException(__('Invalid criteria'));
        } else {
            $this->CriteriaValue->deleteAll(array('CriteriaValue.criteria_id'=>$id));
            $this->Criteria->delete();
            $this->Session->setFlash(__('Criteria deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Criteria was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
