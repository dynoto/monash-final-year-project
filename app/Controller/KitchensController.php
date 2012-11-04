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
    public function beforeFilter(){
        parent::beforeFilter();
        $this->loadModel('Criteria');
        $this->loadModel('Testimonial');
        $this->loadModel('CriteriaValuesKitchen');
        $this->loadModel('Image');
    }

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
        $this->loadModel('Criteria');
        $this->Kitchen->id = $id;
        if (!$this->Kitchen->exists()) {
            throw new NotFoundException(__('Invalid kitchen'));
        }
        $this->set('kitchen', $this->Kitchen->read(null, $id));
        $this->set('criteria_names', $this->Criteria->find('list'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->set('criteria_data', $this->Criteria->find('all',array('conditions'=>array('kitchen'=>1))));
        if ($this->request->is('post')) {
            $request_data = $this->request->data;
            $this->Kitchen->create();
            if ($this->Kitchen->save($this->request->data)) {
                $this->Session->setFlash(__('The kitchen has been saved'));
                $kitchen_id = $this->Kitchen->id;
                $request_data['Testimonial']['kitchen_id'] = $kitchen_id;
                
                //SAVE TESTIMONIAL
                $this->Testimonial->create();
                $this->Testimonial->save($request_data);
                
                //SAVE RELATED KITCHEN CRITERIA VALUES
                foreach ($request_data['CriteriaValuesKitchen']['CriteriaValue_id'] as $key_a => $val_a) {
                    $this->CriteriaValuesKitchen->create();
                    $temp_array['CriteriaValuesKitchen'] = array('criteria_value_id' => $val_a, 'kitchen_id' => $kitchen_id);
                    $this->CriteriaValuesKitchen->save($temp_array);
                }
                
                $this->redirect(array('controller'=>'images','action' => 'add', 'Kitchen',$kitchen_id));
            } else {
                $this->Session->setFlash(__('The kitchen could not be saved. Please, try again.'));
            }
        }
        $criteriaValues = $this->Kitchen->CriteriaValue->find('list');
        $this->set(compact('criteriaValues'));
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
        $this->set('kitchen_id', $id);
        if (!$this->Kitchen->exists()) {
            throw new NotFoundException(__('Invalid kitchen'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $request_data = $this->request->data;
            if ($this->Kitchen->save($request_data)) {
                $this->Session->setFlash(__('The kitchen has been saved'));
            } else {
                $this->Session->setFlash(__('The kitchen could not be saved. Please, try again.'));
            }
            if (isset($request_data['CriteriaValuesKitchen'])){
                $temp = null;
                foreach ($request_data['CriteriaValuesKitchen']['criteria_value_id'] as $key => $value) {
                    $temp = array('criteria_value_id'=>$value,'kitchen_id'=>$id);
                    array_push($request_data['CriteriaValuesKitchen'], $temp);
                }
                unset($request_data['CriteriaValuesKitchen']['criteria_value_id']);
                $this->CriteriaValuesKitchen->deleteAll(array('kitchen_id'=>$id));
                $this->CriteriaValuesKitchen->create();
                $this->CriteriaValuesKitchen->saveAll($request_data['CriteriaValuesKitchen']);
            }
            $this->redirect(array('action' => 'view', $id));

        } else {
            $this->request->data = $this->Kitchen->read(null, $id);
        }
        $criterias = $this->Criteria->findAllByKitchen('1');
        $checked = $this->CriteriaValuesKitchen->find('list',array('fields'=>'criteria_value_id','conditions'=>array('kitchen_id'=>$id)));
        $this->set(compact('criterias','checked'));
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
        } else {
            $this->loadModel('Testimonial');
            $this->loadModel('Image');
            $this->loadModel('CriteriaValuesKitchen');
            
            $this->Testimonial->deleteAll(array('Testimonial.kitchen_id'=>$id));
            $this->Image->deleteAll(array('Image.kitchen_id'=>$id));
            $this->CriteriaValuesKitchen->deleteAll(array('CriteriaValuesKitchen.kitchen_id'=>$id));
        }
        if ($this->Kitchen->delete()) {
            $this->Session->setFlash(__('Kitchen deleted'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('Kitchen was not deleted'));
            $this->redirect(array('action' => 'index'));
        }
    }

}
