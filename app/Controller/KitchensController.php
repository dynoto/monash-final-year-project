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
        $this->loadModel('CriteriaValue');
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
        $this->Kitchen->id = $id;
        if (!$this->Kitchen->exists()) {
            throw new NotFoundException(__('Invalid kitchen'));
        }
        $this->set('kitchen', $this->Kitchen->read(null, $id));
        $this->set('criteria_names', $this->Criteria->find('list',array('conditions'=>array('kitchen'=>1))));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
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
        $this->set('criteria_data', $this->Criteria->find('all',array('conditions'=>array('kitchen'=>1))));
        $criteriaValues = $this->Kitchen->CriteriaValue->find('list');
        pr($criteriaValues);
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
                if (isset($request_data['Testimonial'])){
                    $this->Testimonial->updateAll(
                        array('description'=>'"'.$request_data['Testimonial']['description'].'"'),
                        array('kitchen_id'=>$id)
                    );
                }
                if (isset($request_data['Image'])){
                    $this->Image->deleteAll(array('Image.id'=>$request_data['Image']['id']));
                }
                $this->Session->setFlash(__('The kitchen has been saved'));
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('The kitchen could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Kitchen->read(null, $id);
        }
        $images = $this->Image->find('list',array('conditions'=>array('kitchen_id'=>$id)));
        $criterias = $this->Criteria->findAllByKitchen('1');
        $checked = $this->CriteriaValuesKitchen->find('list',array('fields'=>'criteria_value_id','conditions'=>array('kitchen_id'=>$id)));
        $this->set(compact('criterias','checked','images'));
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

    public function fill_missing_criteria(){
        if($this->request->is('post')){
            $saveData = $this->request->data['criteriaValuesKitchen'];
            $saveArray = array();
            foreach ($saveData as $k_id => $cv_val) {
                foreach ($cv_val as $c_key => $cv_id) {
                    $row = array('kitchen_id'=>$k_id, 'criteria_value_id'=>$cv_id);
                    array_push($saveArray, $row);
                }
            }
            if($this->CriteriaValuesKitchen->saveAll($saveArray)){
                $this->Session->setFlash('Criteria Values have been associated with Kitchen(s)');
            }

        }
            $missing = array();
            $kitchens = $this->Kitchen->find('list');
            $criterias = $this->Criteria->find('list',array('conditions'=>array('kitchen'=>1)));
            $criteriasArray = array();
            foreach ($kitchens as $k_id => $k_name) {
                $temp_array = array();
                $kitCriteriaValues   = $this->CriteriaValuesKitchen->find('list',array('conditions'=>array('kitchen_id'=>$k_id),'fields'=>array('id','criteria_value_id')));
                foreach ($criterias as $c_id => $c_name) {
                    $criteriaValues  = $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id),'fields'=>array('id')));
                    $criteriasArray[$c_id]= $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id)));
                    $array_intersect = array_intersect($criteriaValues, $kitCriteriaValues);
                    if(count($array_intersect) == 0){
                        $temp_array[$c_id] = $c_name;
                    }
                }
                $missing[$k_id] = $temp_array;
            }
            $criterias = $criteriasArray;
            $this->Kitchen->recursive = 0;
            $kitchens  = $this->Kitchen->find('list');
            $images = $this->Image->find('list',array('fields'=>array('kitchen_id','name')));
            $this->set(compact('kitchens','missing','criterias','images'));
        
        
    }
}
