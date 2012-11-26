<?php 
App::uses('AppController', 'Controller');
            
Class AdministratorsController extends AppController{
    
    public $helpers = array('Html','Form','Session');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();

        $this->loadModel('Kitchen');
        $this->loadModel('Image');
        $this->loadModel('HomepageImage');

	}

    public function index(){
        $helper = array('html','form');
    }

    public function homepage_manage(){
        if($this->request->is('post')){
            $rqData = $this->request->data;
            pr($rqData);
            sort($rqData['HomepageImage']['position']);
            $count = 1;
            foreach ($rqData['HomepageImage']['position'] as $key => $value) {
                $positionArray['HomepageImage'][] = array('id'=>$key,'position'=>$count);
                $count +=1 ;
            }
            $this->HomepageImage->updateAll(array('HomepageImage.position'=>null));
            pr($positionArray);
            if($this->HomepageImage->saveAll($positionArray)){
                $this->Session->setFlash('Update success!');
            }else{
                $this->Session->setFlash('Update failed, have you inputted a duplicate order number?');
            }
        }
        $homepageImages = $this->HomepageImage->find('all');
        $kitchens = $this->Kitchen->find('list');
        $count = $this->HomepageImage->find('count');
        $count = array_combine(range(1,$count), range(1,$count));
        $this->set(compact('homepageImages','kitchens','count'));
    }

    public function homepage_manage_add(){
        if($this->request->is('post')){
            $rqData = $this->request->data;
            pr($rqData);
        }


        $imageIds = $this->HomepageImage->find('list',array('fields'=>array('image_id')));
        $kitchens = $this->Kitchen->find('all');
        $this->set(compact('kitchens','imageIds'));
    }
}