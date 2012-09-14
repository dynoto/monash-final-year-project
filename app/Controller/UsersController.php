<?php
App::uses('AppController', 'Controller');

Class UsersController extends AppController{
    public $helper = array('controller','form','html');        
    
    public function index(){
    }
    
    public function gallery($page=1){
        $this->set('page',$page);
        $sidebar_data = array(  'Color'=>array('Red','Blue','Green','Black'),
                                'Style'=>array('Modern','ConTemporary','Vintage','Italian'),
                                'Material'=>array('Wood','Iron','Aluminium','Plastic'));
        
        $image_output = array(  '1'=> array(  "Kitchen_One" => array("11.jpg","12.jpg"), 
                        "Two_Kitchen" => array("21.jpg"),
                        "ThreeK"   => array("31.jpg","32.jpg"),
                        "QuadKitchen" => array("41.jpg","42.jpg","42.jpg")),
                        '2'=> array(  "Fifth_Kitchen" => array("41.jpg","42.jpg","42.jpg"), 
                        "Sixth_Kits" => array("12.jpg","11.jpg"),
                        "Lucky_Kitch7n"   => array("21.jpg"),
                        "Octo_chen" => array("31.jpg","32.jpg")));
        $info = array ( 
            1 => array('name'=>'Kitchen One'    ,'color'=>'Red','style'=>'Modern','material'=>'Wood','images'=>array("11.jpg","12.jpg")),
            2 => array('name'=>'Second Kitchen' ,'color'=>'Blue','style'=>'Italian','material'=>'Wood','images'=>array("21.jpg")),
            3 => array('name'=>'ThreeK'         ,'color'=>'Green','style'=>'Italian','material'=>'Iron','images'=>array("31.jpg","32.jpg")),
            4 => array('name'=>'Fourth Kitchen' ,'color'=>'Black','style'=>'Vintage','material'=>'Iron','images'=>array("41.jpg","42.jpg","42.jpg")),
            5 => array('name'=>'Fifth Kitchen'  ,'color'=>'Red','style'=>'Italian','material'=>'Iron','images'=>array("41.jpg","42.jpg","42.jpg")),
            6 => array('name'=>'Sixth Kitchen'  ,'color'=>'Blue','style'=>'Contemporary','material'=>'Aluminium','images'=>array("12.jpg","11.jpg")),
            7 => array('name'=>'7eventh Kitchen','color'=>'Red','style'=>'Contemporary','material'=>'Plastic','images'=>array("21.jpg")),
            8 => array('name'=>'Eighth Kitchen' ,'color'=>'Black','style'=>'Modern','material'=>'Plastic','images'=>array("31.jpg","32.jpg"))
            );
        
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