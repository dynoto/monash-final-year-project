<?php
App::uses('AppController', 'Controller');

Class VisitorsController extends AppController{
    var $uses = false;
    public $helper = array('controller','form','html');     
    private $__sidebar_query;
    private $__content_query;

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function index(){
        
    }
    
    public function gallery($page=1){
        /* ----------LOAD ESSENTIAL MODELS-----------------*/
        $models = array('Kitchen','Image','CriteriaValue','Criteria');
        foreach($models as $model){
            $this->loadModel($model);
        }
        
        
        /* ----------DB QUERY FOR GALLERY CONTENT--------- */
        
        $return_data = $this->__content_query($page);
        
        /* ----------SET ALL VALUES TO VIEW--------------- */
        if(isset($return_data['filter_values'])){
            $this->set('filter_values',$return_data['filter_values']);
        }
        $this->set('selected',$return_data['selected']);
        $this->set('pagination',$return_data['pagination']);
        $this->set('this_page',$page);
        $this->set('info',$return_data['info']);
    }
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    public function products($page=1){
        $this->set('page',$page);
    }
    
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    public function testimonials($page=1){
        /* ----------LOAD ESSENTIAL MODELS-----------------*/
        $models = array('Kitchen','Image','CriteriaValue','Criteria','Testimonial');
        foreach($models as $model){
            $this->loadModel($model);
        }
        
        /* ----------LOAD CONTENT------------------------- */
        $return_data = $this->__content_query($page,true);
        
        /* ----------SET ALL VALUES TO VIEW--------------- */
        if(isset($return_data['filter_values'])){
            $this->set('filter_values',$return_data['filter_values']);
        }
        
        //$this->__printthis($return_data['info']);
        
        $this->set('selected',$return_data['selected']);
        $this->set('pagination',$return_data['pagination']);
        $this->set('this_page',$page);
        $this->set('info',$return_data['info']);
    }
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    public function about_us(){
        
    }
    
    public function contact_us(){
        
    }
    
    private function __sidebar_query(){
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
        
        $this->set('sidebar_data',$temp_array);
        return $temp_array;
    }
    
    private function __content_query($page,$testimonial_mode=false){
        $sidebar_data = $this->__sidebar_query();
        $conditions = array();
        $selected = array();
        $filter_values = null;
        if($this->request->is('Post')){
            $filter_values = $this->request->data;
            unset($filter_values['page_filter']);
            if(!empty($filter_values)){
                foreach ($filter_values as $filter_value){
                    foreach ($filter_value as $value){
                        $conditions['CriteriaValuesKitchen.Criteria_value_id'][] = $value;
                    }
                }
                $selected = $conditions['CriteriaValuesKitchen.Criteria_value_id'];
            }
            $this->Kitchen->bindModel(array('hasOne'=>array('CriteriaValuesKitchen')));
        }
        $info = $this->Kitchen->find('all',array(
            'fields'=> 'DISTINCT Kitchen.*',
            'conditions' => $conditions
        ));
        
        if($testimonial_mode){
            foreach ($info as $key_a => $val_a){
                if(empty($val_a['Testimonial'])){
                    unset($info[$key_a]);
                }
            }
        }
        
        
        if(!empty($filter_values)){
            $criteria_list = $this->Criteria->find('list');
            foreach($info as $key_a => $val_a){
                foreach($val_a['CriteriaValue'] as $val_aa){
                    $val_aa_id = $criteria_list[$val_aa['criteria_id']];
                    if(array_key_exists($val_aa_id, $filter_values)){
                        if(in_array($val_aa['id'], $filter_values[$val_aa_id]) == false){
                          unset($info[$key_a]);
                          break;
                          }
                    }
                }
            }
        }
        
        $info = array_slice($info, (4 * ($page - 1)), 5);
        if($page == 1 and count($info) < 4){
            $pagination = 'hide';
        }
        elseif(count($info) > 4){
            array_pop($info);
            $pagination = '';
        }
        else{ $pagination = 'end'; }
        
        foreach ($info as $key_a => $datum){
            foreach ($datum['CriteriaValue'] as $key_b =>$datum_val){
                    if($sidebar_data[$datum_val['criteria_id']]['id'] == $datum_val['criteria_id']){
                        $info[$key_a]['CriteriaValue'][$key_b]['criteria_name'] = $sidebar_data[$datum_val['criteria_id']]['name'];
                    }
                    unset($info[$key_a]['CriteriaValue'][$key_b]['CriteriaValuesKitchen']);
            }
        }
        
        return array('info'=>$info, 'pagination'=>$pagination, 'selected'=>$selected, 'filter_values'=>$filter_values);
    }
    
    private function __printthis($data){
        foreach($data as $a => $b){
            echo $a."<br/>";
            print_r($b['Testimonial']);
            echo "<br/><br/>";
        }
    }
}