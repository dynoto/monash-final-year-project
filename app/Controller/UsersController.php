<?php
App::uses('AppController', 'Controller');

Class UsersController extends AppController{
    public $helper = array('controller','form','html');        
    
    public function index(){
    }
    
    public function gallery($page=1){
        /* ----------LOAD ESSENTIAL MODELS-----------------*/
        $models = array('Kitchen','Image','CriteriaValue','Criteria');
        foreach($models as $model){
            $this->loadModel($model);
        }
        
        /* ----------DB QUERY FOR SIDEBAR----------------- */
        $sidebar_data = $this->Criteria->find('all');
        foreach($sidebar_data as $count => $result){
            $array_values   = array();
            foreach($result['CriteriaValue'] as $values){
                $array_values[$values['id']] = $values['name'];
            }
            $result['Criteria']['values'] = $array_values;
            $sidebar_data[$count] = $result['Criteria'];
            unset($sidebar_data[$count]['CriteriaValue']);
            unset($sidebar_data[$count]['Criteria']);
        }
        $temp_array = array();
        foreach ($sidebar_data as $values){
            $temp_array[$values['id']] = $values;
        }
        $sidebar_data = $temp_array;
        unset($temp_array);
        
        /* ----------DB QUERY FOR GALLERY CONTENT--------- */
        $conditions = array();
        if($this->request->is('Post')){
            $filter_values = $this->request->data;
            print_r(serialize($filter_values));
            foreach ($filter_values as $filter_value){
                foreach ($filter_value as $value){
                    $conditions['CriteriaValuesKitchen.Criteria_value_id'][] = $value;
                }
            }
            $this->Kitchen->bindModel(array('hasOne'=>array('CriteriaValuesKitchen')));
        }
        $info = $this->Kitchen->find('all',array(
            'fields'=> 'DISTINCT Kitchen.*',
            'limit'=> 5,
            'offset'=> ($page-1)*4,
            'conditions' => $conditions
        ));
        if(count($info) > 4){
            array_pop($info);
        }else{
            $page = Null;
        }
        
        foreach ($info as $key_a => $datum){
            foreach ($datum['CriteriaValue'] as $key_b =>$datum_val){
                    if($sidebar_data[$datum_val['criteria_id']]['id'] == $datum_val['criteria_id']){
                        $info[$key_a]['CriteriaValue'][$key_b]['criteria_name'] = $sidebar_data[$datum_val['criteria_id']]['name'];
                    }
                    unset($info[$key_a]['CriteriaValue'][$key_b]['CriteriaValuesKitchen']);
            }
        }
        
        /* ----------SET ALL VALUES TO VIEW--------------- */
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