<?php
App::uses('AppController', 'Controller');

Class UsersController extends AppController{
    public $helper = array('controller','form','html');        
    
    public function index(){
    }
    
    public function gallery($page=1){
        $sidebar_data = array(  'Color'=>array('Red','Blue','Green','Black'),
                                'Style'=>array('Modern','ConTemporary','Vintage','Italian'),
                                'Material'=>array('Wood','Iron','Aluminium','Plastic'));

        $info = array ( 
            '1' => array('name'=>'Kitchen One'    ,'Color'=>'Red','Style'=>'Modern','Material'=>'Wood','images'=>array("11.jpg","12.jpg")),
            '2' => array('name'=>'Second Kitchen' ,'Color'=>'Blue','Style'=>'Italian','Material'=>'Wood','images'=>array("21.jpg")),
            '3' => array('name'=>'ThreeK'         ,'Color'=>'Green','Style'=>'Italian','Material'=>'Iron','images'=>array("31.jpg","32.jpg")),
            '4' => array('name'=>'Fourth Kitchen' ,'Color'=>'Black','Style'=>'Vintage','Material'=>'Iron','images'=>array("41.jpg","42.jpg","42.jpg")),
            '5' => array('name'=>'Fifth Kitchen'  ,'Color'=>'Red','Style'=>'Italian','Material'=>'Iron','images'=>array("41.jpg","42.jpg","42.jpg")),
            '6' => array('name'=>'Sixth Kitchen'  ,'Color'=>'Blue','Style'=>'Contemporary','Material'=>'Aluminium','images'=>array("12.jpg","11.jpg")),
            '7' => array('name'=>'7eventh Kitchen','Color'=>'Red','Style'=>'Contemporary','Material'=>'Plastic','images'=>array("21.jpg")),
            '8' => array('name'=>'Eighth Kitchen' ,'Color'=>'Black','Style'=>'Modern','Material'=>'Plastic','images'=>array("31.jpg","32.jpg"))
            );
        
        if(!empty($this->request->data)){
            $criteria_filter = $this->request->data;
            foreach($info as $id =>$datum){
                $deletion = true;
                foreach($criteria_filter as $criteria=>$subcriterium){
                    foreach ($subcriterium as $subcriteria){
                        if($datum[$criteria] === $subcriteria){
                            $deletion = false;
                        }
                    }
                }
                if($deletion == true){
                    unset($info[$id]);
                }
            }
        }
        $this->set('page',$page);
        $this->set('sidebar_data',$sidebar_data);
        $this->set('info',$info);
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