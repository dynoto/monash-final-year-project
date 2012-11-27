<?php
App::uses('AppController', 'Controller');

Class VisitorsController extends AppController{
    var $uses = false;
    public $helper = array('controller','form','html','paginator');     
    private $__sidebar_query;
    private $__content_query;
    private $__gallery_content_filter;
    private $__get_kitchen_info;
    private $__pagination;

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow();
        $models = array('Criteria','CriteriaValue','CriteriaValuesKitchen','Image','Kitchen','Products','Testimonial');
        foreach($models as $model){
            $this->loadModel($model);
        }
    }

    public function index(){
        
    }

    public function gallery($page = 1){

        unset($this->request->data['page_filter']);
        if(isset($this->request->data) and !empty($this->request->data)){
            $kitchen_ids  = $this->__gallery_content_filter();
        }else{
            $kitchen_ids  = $this->Kitchen->find('list',array('fields'=>'id'));
        }
        $this->__get_kitchen_info($kitchen_ids,$page);
        
        $this->__sidebar_query();
        $paginate_data = $this->__pagination($kitchen_ids,$page);
        $this->set('paginate_data',$paginate_data);
        //$this->set('pagination',$return_data['pagination']);
        //$this->set('info',$kitchen_info);
    }
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    
    //Function for the products page - visitor side to display the list of available products
    public function products($page=1){

        unset($this->request->data['page_filter']);
        if(isset($this->request->data) and !empty($this->request->data)){
            $product_ids  = $this->__gallery_content_filter();
        }else{
            $product_ids  = $this->Products->find('list',array('fields'=>'id'));
        }
        $this->__get_product_info($product_ids,$page);
        
        $this->__sidebar_query();
        $paginate_data = $this->__pagination($product_ids,$page);
        $this->set('paginate_data',$paginate_data);
        //$this->set('pagination',$return_data['pagination']);
        //$this->set('info',$kitchen_info);
    }
    
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    public function testimonials($page=1){
        /* ----------LOAD ESSENTIAL MODELS-----------------*/
        unset($this->request->data['page_filter']);

        $testimonials_id = $this->Testimonial->find('list',array('fields'=>array('kitchen_id')));
        if(isset($this->request->data) and !empty($this->request->data)){
            $kitchen_ids  = $this->__gallery_content_filter();
            $kitchen_ids  = array_intersect($kitchen_ids, $testimonials_id);
        }else{
            $kitchen_ids  = $testimonials_id;
        }
        $this->__get_kitchen_info($kitchen_ids,$page);
        
        $this->__sidebar_query();
        $paginate_data = $this->__pagination($kitchen_ids,$page);
        $this->set('paginate_data',$paginate_data);
    }
    
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    
    public function about_us(){
        
    }
    
    public function contact_us(){
        if($this->request->is('post')){
            $this->loadModel('Enquiry');
            $requestData = $this->request->data;
            $this->Enquiry->create();
            if($this->Enquiry->save($requestData)){
                $this->Session->setFlash('Your enquiry have been submitted, thank you very much');
                $this->redirect(array('action'=>'contact_us'));
            } else {
                $this->Session->setFlash('Sorry, there seems to be a problem submitting your enquiry');
            }
        }
        
    }

    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/

    private function __gallery_content_filter(){
        $filter = $this->request->data['CriteriaValuesKitchen']['criteria_value_id'];
        foreach ($filter as $key_a => $value_a) {
            if (isset($kitchen)){
                $conditions = array('criteria_value_id'=>$value_a,'kitchen_id'=>$kitchen);
            } else {
                $conditions = array('criteria_value_id'=>$value_a);
            }
            $kitchen = $this->CriteriaValuesKitchen->find('list',array(
                'conditions'=>$conditions,
                'fields'=>array('id','kitchen_id'),
                'group' =>array('kitchen_id')
            ));
        }
        return $kitchen;

    }

    
    
    private function __get_kitchen_info($kitchen_ids,$page=1){
        $this->paginate = array(
                'conditions'=>array('id'=>$kitchen_ids),
                'limit'=>4,
                'page' => $page
            );
        $info = $this->paginate('Kitchen');
        $criterias = $this->Criteria->find('list');
        foreach ($info as $key_a => $val_a) {
            foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                $info[$key_a]['CriteriaValue'][$key_aa]['criteria_name'] = $criterias[$val_aa['criteria_id']];
            }
        }

        if(count($info) == 0){
            $this->Session->setFlash('Sorry, there are no items that matched your search requirements');
        }
        $this->set('info',$info);
    }
    

    
    //GET_PRODUCT_INFO: Function to get info about the products and limit the size of the results to 4 items per page
    private function __get_product_info($product_ids,$page=1){
        $this->paginate = array(
                'conditions'=>array('id'=>$product_ids),
                'limit'=>4,
                'page' => $page
            );
        $info = $this->paginate('Products');
        $criterias = $this->Criteria->find('list');
        foreach ($info as $key_a => $val_a) {
            foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                $info[$key_a]['CriteriaValue'][$key_aa]['criteria_name'] = $criterias[$val_aa['criteria_id']];
            }
        }

        if(count($info) == 0){
            $this->Session->setFlash('Sorry, there were no items matching your search requirements.');
        }
        $this->set('info',$info);
    }
    
    
    
    
    
    
    
    
    

    private function __pagination($kitchen_ids,$page=1){
        $pagination = array();
        $kitchen_count = count($kitchen_ids);
        if($kitchen_count <= 4){
            $pagination['hide'] = true;
        } elseif ($kitchen_count > 4) {
            $pagination['hide'] = false;
            $count = ($page-1) * 4;
            if (($kitchen_count - $count) <= 4){
                $pagination['last'] = true;
            } else {
                $pagination['last'] = false;
            }
            $pagination['page'] = $page;
            return $pagination;
        }
    }

    private function __sidebar_query($type = 'kitchen'){
        $sidebar_data = $this->Criteria->find('all',array('conditions'=>array('Criteria.'.$type => 1)));
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
        
        $selected = array();
        if(isset($this->request->data) and !empty($this->request->data)){
            foreach ($this->request->data['CriteriaValuesKitchen']['criteria_value_id'] as $key_a => $val_a) {
                foreach ($val_a as $key_aa => $val_aa) {
                    $selected[] = $val_aa;
                }
            }
        }
        $this->set('selected',$selected);
        $this->set('sidebar_data',$temp_array);
    }
    
    private function __content_query($page,$testimonial_mode=false,$section='kitchen'){
        $sidebar_data = $this->__sidebar_query($section);
        $conditions = array();
        $selected = array();
        $filter_values = null;
        if($this->request->is('Post')){
            $filter_values = $this->request->data['CriteriaValuesKitchen'][''];
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
    
    
    
    
    /*-------------------------------------------------
     *Search results filter controller for PRODUCTS to filter results
     */
    
     private function __product_content_filter(){
        $filter = $this->request->data['CriteriaValuesProduct']['criteria_value_id'];
        foreach ($filter as $key_a => $value_a) {
            if (isset($product)){
                $conditions = array('criteria_value_id'=>$value_a,'product_id'=>$product);
            } else {
                $conditions = array('criteria_value_id'=>$value_a);
            }
            $product = $this->CriteriaValuesProduct->find('list',array(
                'conditions'=>$conditions,
                'fields'=>array('id','product_id'),
                'group' =>array('product_id')
            ));
        }
        return $product;

    }

    
    
    
}