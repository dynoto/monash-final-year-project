<?php 
App::uses('AppController', 'Controller');
            
Class AdministratorsController extends AppController{
    
    public $helpers = array('Html','Form','Session');

	public function beforeFilter(){
		parent::beforeFilter();

        $this->loadModel('Kitchen');
        $this->loadModel('Image');
        $this->loadModel('HomepageImage');
        $this->loadModel('Enquiry');
	}

    public function index(){
        $helper = array('html','form');
        $this->Enquiry->recursive = 0;
        $this->paginate = array(
            'order'=> array('Enquiry.id' => 'desc')
        );
        $this->set('enquiries', $this->paginate('Enquiry'));
    }
}