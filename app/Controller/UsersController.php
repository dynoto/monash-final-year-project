<?php
App::uses('AppController', 'Controller');

Class UsersController extends AppController{
    public $helper = array('controller','form','html');        
    
    public function index(){
    }
    
    public function gallery($page=1){
        $this->set('page',$page);
    }
    
    public function products($page=1){
        $this->set('page',$page);
    }
    
    public function testimonials(){
        
    }
    
    public function about_us(){
        
    }
    
    public function contact_us(){
        
    }
}