<?php 
App::uses('AppController', 'Controller');
            
Class AdministratorsController extends AppController{
    
    public $helpers = array('Html','Form','Session');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

    public function index(){
        $helper = array('html','form');
    }

    public function homepage_manage(){
    	$this->loadModel('Kitchen');
    	$this->loadModel('Image');
    }
}