<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */
class ProductsController extends AppController {

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter(){
        parent::beforeFilter();
        $this->loadModel('Criteria');
        $this->loadModel('CriteriaValuesProduct');
        $this->loadModel('Image');
        $this->loadModel('CriteriaValue');
        $this->loadModel('Discount');
    }

	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('products', $this->Product->read(null, $id));
        $this->set('criteria_names', $this->Criteria->find('list',array('conditions'=>array('product'=>1))));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$requestdata = $this->request->data;
			$this->Product->create();
			if ($this->Product->save($requestdata)){
				$product_id = $this->Product->id;
				$temp_array;
				foreach ($requestdata['CriteriaValuesProduct']['criteria_value_id'] as $key => $cv_id) {
					$temp_array['CriteriaValuesProduct'][] = array('criteria_value_id' => $cv_id, 'product_id' => $product_id);
				}
				$this->CriteriaValuesProduct->create();
				$this->CriteriaValuesProduct->saveAll($temp_array);
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('controller'=>'image','action' => 'add','product',$product_id,1));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$criterias = $this->Criteria->find('all',array('conditions'=>array('product'=>1)));
		$discounts = $this->Discount->find('list');
		$this->set(compact('discounts','criterias'));
		$this->Session->setFlash('Image adding is done in Step 2');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Product->save($this->request->data)) {
				$rqData = $this->request->data;
				$product_id = $rqData['Product']['id'];

				#MODIFY CRITERIA VALUES
				if(isset($rqData['CriteriaValuesProduct']['criteria_value_id'])){
					$criteriaValuesInput = $rqData['CriteriaValuesProduct']['criteria_value_id'];
					$criteriaValues = $this->CriteriaValuesProduct->find('list',array('conditions'=>array('product_id'=>$product_id),'fields'=>'criteria_value_id'));

					#ASSOCIATE NEWLY SELECTED CRITERIA VALUE
					$insertArray = array_diff($criteriaValuesInput, $criteriaValues);
					$temp_array = array();
					foreach ($insertArray as $key => $value) {
						$temp_array[] = array('criteria_value_id'=>$value,'product_id'=>$product_id);
					}
					$this->CriteriaValuesProduct->saveAll($temp_array);
					
					#DISSOCIATE UNSELECTED CRITERIA VALUE
					$deleteArray = array_diff($criteriaValues, $criteriaValuesInput);
					foreach ($deleteArray as $key => $value) {
						$this->CriteriaValuesProduct->delete($key);
					}
				} else {
					#DELETE ALL CRITERIA VALUES IF NONE SELECTED IN THE EDIT PAGE
					$this->CriteriaValuesProduct->deleteAll(array('product_id'=>$product_id));
				}

				#DELETE SELECTED IMAGES
				if (isset($rqData['Image'])){
                    $this->Image->deleteAll(array('Image.id'=>$rqData['Image']['id']));
                }

				$this->Session->setFlash(__('The product has been updated'));
				$this->redirect(array('action' => 'view',$product_id));

			} else {
				$this->Session->setFlash(__('The product could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		$images = $this->Image->find('list',array('conditions'=>array('product_id'=>$id)));
		$discounts = $this->Product->Discount->find('list',array('fields'=>'value'));
		$criterias = $this->Criteria->findAllByProduct('1');
        $checked = $this->CriteriaValuesProduct->find('list',array('fields'=>'criteria_value_id','conditions'=>array('product_id'=>$id)));
        $this->set(compact('criterias','checked','discounts','images'));
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
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		} else {
			$this->Image->deleteAll(array('product_id'=>$id));
			$this->CriteriaValuesProduct->deleteAll(array('product_id'=>$id));
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function fill_missing_criteria(){
        if($this->request->is('post')){
            $saveData = $this->request->data['criteriaValuesProduct'];
            $saveArray = array();
            foreach ($saveData as $p_id => $cv_val) {
                foreach ($cv_val as $c_key => $cv_id) {
                    $row = array('product_id'=>$p_id, 'criteria_value_id'=>$cv_id);
                    array_push($saveArray, $row);
                }
            }
            if($this->CriteriaValuesProduct->saveAll($saveArray)){
                $this->Session->setFlash('Criteria Values have been associated with Products(s)');
            }

        }
            $missing = array();
            $products = $this->Product->find('list');
            $criterias = $this->Criteria->find('list',array('conditions'=>array('product'=>1)));
            $criteriasArray = array();
            foreach ($products as $p_id => $p_name) {
                $temp_array = array();
                $prodCriteriaValues   = $this->CriteriaValuesProduct->find('list',array('conditions'=>array('product_id'=>$p_id),'fields'=>array('id','criteria_value_id')));
                foreach ($criterias as $c_id => $c_name) {
                    $criteriaValues  = $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id),'fields'=>array('id')));
                    $criteriasArray[$c_id]= $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id)));
                    $array_intersect = array_intersect($criteriaValues, $prodCriteriaValues);
                    if(count($array_intersect) == 0){
                        $temp_array[$c_id] = $c_name;
                    }
                }
                $missing[$p_id] = $temp_array;
            }
            $criterias = $criteriasArray;
            $this->Product->recursive = 0;
            $products  = $this->Product->find('list');
            $images = $this->Image->find('list',array('fields'=>array('product_id','name')));
            $this->set(compact('products','missing','criterias','images'));
        
        
    }
}
