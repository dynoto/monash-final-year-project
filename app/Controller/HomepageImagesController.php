<?php
App::uses('AppController', 'Controller');
/**
 * HomepageImages Controller
 *
 * @property HomepageImage $HomepageImage
 */
class HomepageImagesController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$models = array('Kitchen','Image');
		foreach ($models as $key => $value) {
			$this->loadModel($value);
		}
	}

	public function index(){
        if($this->request->is('post')){
            $rqData = $this->request->data;
            #FIRST, REMOVE ALL IMAGES THAT IS SELECTED
            if(isset($rqData['Homepage']['delete'])){
            	$delData = $rqData['Homepage']['delete'];
            	$this->HomepageImage->deleteAll(array('HomepageImage.id'=>$delData));
            }
            #PROCESSING RAW DATA INTO SIMPLE ARRAY = [ID => POSITION]
            $validate = array();
            foreach ($rqData['HomepageImage'] as $key => $value) {
            	$validate[$value['id']] = $value['position'];
            }
            $count_1 = count($validate); #COUNT HOW MANY IMAGE POSITION ARE THERE
            $count_2 = count(array_count_values($validate)); #ARRAY WITH DUPLICATE POSITION VALUES WILL RETURN COUNT_2 LESS THAN COUNT_1
            if($count_1 == $count_2){ #IF BOTH COUNTS ARE EQUAL MEANS THERE'S NO DUPLICATE
            	#SORT ARRAY VALUES, ARRAY KEY = ID, ARRAY VALUE = POSITION
            	#EG. POS = [1=>3, 2=>1, 3=>2]
            	#RESULT POS = [2=>1, 3=>2, 1=>3]
            	asort($validate);
            	#FIRST, CLEAR ALL POSITION VALUES TO PREVENT SQL INSERT ERROR, MANTAINING UNIQUENESS OF EACH POSITION
	            $this->HomepageImage->updateAll(array('position'=>null));

	            $pos_count = 1;
	            foreach ($validate as $i_k => $i_v) {
					#WE USE COUNT BECAUSE POSITION VALUES INSIDE ARRAY MAY BE SKIPPED, DUE TO REMOVAL OF SOME IMAGES
	            	#EG. POS = [1 ,2(DELETED) ,3,4,5,]
	            	#EXPECTED RESULT. POS = [1,2,3,4]
	            	$this->HomepageImage->save(array('id'=>$i_k,'position'=>$pos_count));
	            	$pos_count +=1;
	            }
        	}else{
        		$this->Session->setFlash('Update failed, have you inputted a duplicate order number?','session_error');
        	}
        }
        $homepageImages = $this->HomepageImage->find('all');
        $kitchens = $this->Kitchen->find('list');
        $count = $this->HomepageImage->find('count');
        $count = array_combine(range(1,$count), range(1,$count));
        #ARRAY RANGE RETURNS ARRAY = [0=>1, 1=>2, 2=3], NOT DESIRABLE
        #HENCE, USING ARRAY_COMBINE(KEY,VALUE), EXPECTED RESULT >> [1=>1, 2=>2, 3=>3]
        $this->set(compact('homepageImages','kitchens','count'));
    }

    public function add(){
        if($this->request->is('post')){
            $rqData = $this->request->data;
            $row_count = $this->HomepageImage->find('count')+1;
            foreach ($rqData['HomepageImage']['position'] as $key => $value) {
            	$this->HomepageImage->create();
            	if($this->HomepageImage->save(array('HomepageImage'=>array('position'=>$row_count,'image_id'=>$value)))){
            		$row_count += 1;
            		$this->Session->setFlash('Images Selected!');
            	}else{
            		$this->Session->setFlash('something is wrong with the image selection, please try again');
            	}
            }
            $this->redirect('action'=>'index');
        }


        $imageIds = $this->HomepageImage->find('list',array('fields'=>array('image_id')));
        $kitchens = $this->Kitchen->find('all');
        $kitchens_list = $this->Kitchen->find('list');
        $this->set(compact('kitchens','imageIds','kitchens_list'));
    }

}
