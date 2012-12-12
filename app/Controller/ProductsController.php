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
        $models = array('Criteria',
        				'CriteriaValuesProduct',
        				'Image',
        				'CriteriaValue',
        				'DimensionType',
        				'Dimension',
        				'DimensionsProduct',
        				'StandardDimension',
        				'RangeValue',
        				'RangeType',
        				'ProductsRangeValue',
        				'OrderItemsRangeValue',
        				'OrderItem'
        				);
        foreach ($models as $key => $value) {
        	$this->loadModel($value);
        }
    }

	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());

		if($this->request->is('post')):
            $requestData = $this->request->data('Product');
            if($this->Product->saveAll($requestData)):
                $this->Session->setFlash('Priority is successfully updated!');
            else:
                $this->Session->setFlash('Priority could not be updated!','session_error');
            endif;
            $this->redirect(array('action'=>'index'));
        endif;

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
		$this->set('dimension_types', $this->DimensionType->find('list'));
		$products = $this->Product->read(null, $id);
		$this->set('products', $products);
		$this->set('range_types', $this->RangeType->find('list'));
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

				// SAVING CRITERIA VALUES TO THE PRODUCT
				if(isset($requestdata['CriteriaValuesProduct'])){
					$temp_array = array();
					foreach ($requestdata['CriteriaValuesProduct']['criteria_value_id'] as $key => $cv_id) {
						$temp_array['CriteriaValuesProduct'][] = array('criteria_value_id' => $cv_id, 'product_id' => $product_id);
					}
					$this->CriteriaValuesProduct->create();
					$this->CriteriaValuesProduct->saveAll($temp_array['CriteriaValuesProduct']);
				}

				// SAVING RANGE VALUES TO THE PRODUCT
				if(isset($requestdata['ProductsRangeValue'])){
					$temp_array = array();
					foreach ($requestdata['ProductsRangeValue']['range_value_id'] as $key => $cv_id) {
						$temp_array['ProductsRangeValue'][] = array('range_value_id' => $cv_id, 'product_id' => $product_id);
					}
					$this->ProductsRangeValue->create();
					$this->ProductsRangeValue->saveAll($temp_array['ProductsRangeValue']);
				}

				// SAVING PRODUCT VARIABLE DIMENSIONS
				$dimensionProducts = array();
				foreach ($requestdata['Dimension'] as $dimension_type_id => $dimension_array):
					$this->Dimension->create();
					$this->Dimension->save($dimension_array);
					$dimension_id = $this->Dimension->id;
					$dimensionsProduct[] = array('product_id'=>$product_id,'dimension_id'=>$dimension_id);
				endforeach;
				$this->DimensionsProduct->create();
				$this->DimensionsProduct->saveAll($dimensionsProduct);

				//IF STANDARD DIMENSION EXISTS - SAVE STANDARD DIMENSION INSTEAD
				// $this->StandardDimension->create();
				// if(isset($requestdata['StandardDimension'])):
				// 	$requestdata['StandardDimension']['product_id'] = $product_id;
				// 	$this->StandardDimension->save($requestdata);
				// else:
				// 	$this->StandardDimension->save(array('description'=>null));
				// endif;
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('controller'=>'images','action' => 'add','product',$product_id,1));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}

		$range_types = $this->RangeType->find('all');
		$criterias = $this->Criteria->find('all',array('conditions'=>array('product'=>1)));
		$dimension_types = $this->DimensionType->find('list');
		$this->set(compact('criterias','dimension_types','range_types'));
		$this->Session->setFlash('Image adding is done in Step 2','session_error');
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

				//////////////////////////// MODIFY CRITERIA VALUES ////////////////////////////
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

				//////////////////////////// MODIFY RANGE VALUES ////////////////////////////
				if(isset($rqData['ProductsRangeValue']['range_value_id'])){
					$rangeValuesInput = $rqData['ProductsRangeValue']['range_value_id'];
					$rangeValues = $this->ProductsRangeValue->find('list',array('conditions'=>array('product_id'=>$product_id),'fields'=>'range_value_id'));

					#ASSOCIATE NEWLY SELECTED CRITERIA VALUE
					$insertArray = array_diff($rangeValuesInput, $rangeValues);
					$temp_array = array();
					foreach ($insertArray as $key => $value) {
						$temp_array[] = array('range_value_id'=>$value,'product_id'=>$product_id);
					}
					$this->ProductsRangeValue->saveAll($temp_array);
					
					#DISSOCIATE UNSELECTED CRITERIA VALUE
					$deleteArray = array_diff($rangeValues, $rangeValuesInput);
					foreach ($deleteArray as $key => $value) {
						$this->ProductsRangeValue->delete($key);
					}
				} else {
					#DELETE ALL CRITERIA VALUES IF NONE SELECTED IN THE EDIT PAGE
					$this->ProductsRangeValue->deleteAll(array('product_id'=>$product_id));
				}

				//////////////////////////// MODIFY FINISHES ////////////////////////////
				// if(isset($rqData['Finish']['finish_id'])):
				// 	$finishesProductInput = $rqData['Finish']['finish_id'];
				// 	$finishesProduct = $this->FinishesProduct->find('list',array('conditions'=>array('product_id'=>$product_id),'fields'=>'finish_id'));
					
				// 	#ASSOCIATE NEWLY SELECTED FINISHES
				// 	$insertArray = array_diff($finishesProductInput, $finishesProduct);
				// 	$temp_array = array();
				// 	foreach ($insertArray as $key => $value):
				// 		$temp_array[] = array('finish_id'=>$value,'product_id'=>$product_id);
				// 	endforeach;
				// 	$this->FinishesProduct->saveAll($temp_array);
					
				// 	#DISSOCIATE UNSELECTED FINISHES
				// 	$deleteArray = array_diff($finishesProduct, $finishesProductInput);
				// 	foreach ($deleteArray as $key => $value):
				// 		$this->FinishesProduct->delete($key);
				// 	endforeach;
				// else:
				// 	#DELETE ALL CRITERIA VALUES IF NONE SELECTED IN THE EDIT PAGE
				// 	$this->FinishesProduct->deleteAll(array('product_id'=>$product_id));
				// endif;

				//////////////////////////// MODIFY DIMENSIONS ////////////////////////////
				if(isset($rqData['Dimension'])):
						$this->Dimension->saveAll($rqData['Dimension']);
						foreach ($rqData['Dimension'] as $k => $d_array):
							$this->DimensionsProduct->Create();
							$this->DimensionsProduct->save(array('product_id'=>$product_id,'dimension_id'=>$d_array['id']));
						endforeach;
				endif;

				if(isset($rqData['StandardDimension'])):
					$this->StandardDimension->saveAll($rqData['StandardDimension']);
				endif;
				//////////////////////////// DELETE SELECTED IMAGES ////////////////////////////
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
		$criterias = $this->Criteria->findAllByProduct('1');
		$range_types = $this->RangeType->find('all');
		$dimension_types = $this->DimensionType->find('list');
		$rangeVal_checked = $this->ProductsRangeValue->find('list',array('fields'=>'range_value_id','conditions'=>array('product_id'=>$id)));
        $criterias_checked = $this->CriteriaValuesProduct->find('list',array('fields'=>'criteria_value_id','conditions'=>array('product_id'=>$id)));
        $this->set(compact('criterias','criterias_checked','images','dimension_types','range_types','rangeVal_checked'));
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
		$this->autoRender = false;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		} else {
			$this->Image->deleteAll(array('product_id'=>$id));
			$this->CriteriaValuesProduct->deleteAll(array('product_id'=>$id));
			$dimensionIds = $this->DimensionsProduct->find('list',array('fields'=>'dimension_id','conditions'=>array('product_id'=>$id)));
			$this->ProductsRangeValue->deleteAll(array('product_id'=>$id));
			$this->DimensionsProduct->deleteAll(array('product_id'=>$id));
			$this->Dimension->deleteAll(array('Dimension.id'=>$dimensionIds));

			$orderIds = $this->OrderItem->find('list',array('conditions'=>array('product_id'=>$id)));
			foreach ($orderIds as $key => $value):
				$this->OrderItemsRangeValue->deleteAll(array('order_item_id'=>$key));
				$this->OrderItem->delete($key);
			endforeach;
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function fill_missing_criteria(){
        if($this->request->is('post') && isset($this->request->data['criteriaValuesProduct'])){
            $saveData = $this->request->data['criteriaValuesProduct'];
            $saveArray = array();
            foreach ($saveData as $p_id => $cv_arr) {
            	$cv_list = $this->CriteriaValuesProduct->find('list',array('conditions'=>array('product_id'=>$p_id),'fields'=>'criteria_value_id'));

            	//COMPARE AND RETRIEVE NOT-ASSOCIATED CRITERIA VALUES THEN SAVE IT
                $add = array_diff($cv_arr, $cv_list);
                $add_temp = array();
                foreach ($add as $cv_id) {
                    array_push($add_temp,array('product_id'=>$p_id, 'criteria_value_id'=>$cv_id));
                }
                $this->CriteriaValuesProduct->create();
                $this->CriteriaValuesProduct->saveAll($add_temp);

                //COMPARE AND RETRIEVE ASSOCIATED CRITERIA VALUES THEN DELETE THOSE UNSELECTED
                $delete = array_diff($cv_list, $cv_arr);
                foreach ($delete as $cvp_id => $cv) {
                    $this->CriteriaValuesProduct->delete($cvp_id);
                }
            $this->Session->setFlash('Criteria Values have been associated with Products(s)');

        	}
    	}
            $selected = array();
            $products = $this->Product->find('list');
            $criterias = $this->Criteria->find('list',array('conditions'=>array('product'=>1)));
            $criteriasArray = array();
            foreach ($products as $p_id => $p_name) {
                $temp_array = array();
                $prodCriteriaValues   = $this->CriteriaValuesProduct->find('list',array('conditions'=>array('product_id'=>$p_id),'fields'=>array('id','criteria_value_id')));
                $selected[$p_id] = $prodCriteriaValues;
            }
            foreach ($criterias as $c_id => $c_name) {
                $criteriaValues  = $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id),'fields'=>array('id')));
                $criteriasArray[$c_name]= $this->CriteriaValue->find('list',array('conditions'=>array('criteria_id'=>$c_id)));
            }
            $criterias = $criteriasArray;
            $this->Product->recursive = 0;
            $products  = $this->Product->find('list');
            $images = $this->Image->find('list',array('fields'=>array('product_id','name')));
            $this->set(compact('products','selected','criterias','images'));
        
        
    }
}
