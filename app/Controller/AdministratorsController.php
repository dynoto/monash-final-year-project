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
}