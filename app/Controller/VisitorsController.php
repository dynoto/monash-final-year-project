<?php
App::uses('AppController', 'Controller');

Class VisitorsController extends AppController{
    var $uses = false;
    public $helper = array('controller','form','html','paginator');     
    private $__sidebar_query;
    private $__content_query;
    private $__content_filter;
    private $__get_info;
    private $__pagination;
    private $__make_order;
    private $__send_email;

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(array('index','gallery','testimonials','about_us','contact_us'));
        $models = array('Criteria',
                        'CriteriaValue',
                        'Customer',
                        'CriteriaValuesKitchen',
                        'CriteriaValuesProduct',
                        'Image',
                        'Kitchen',
                        'Product',
                        'Testimonial',
                        'HomepageImage',
                        'DimensionType',
                        'RangeType',
                        'RangeValue',
                        'ProductsRangeValue',
                        'Order',
                        'OrderItem',
                        'OrderItemsRangeValue'
                        );
        foreach($models as $model){
            $this->loadModel($model);
        }
    }

////////////////////////////////////////////////////////////////////////////////

    public function index(){
        $image_ids = $this->HomepageImage->find('list',array('order'=>'position','fields'=>array('position','image_id')));
        $image_list = $this->Image->find('list',array('conditions'=>array('product_id'=>null,'id'=>$image_ids)));
        $this->set(compact('image_ids','image_list'));
    }

////////////////////////////////////////////////////////////////////////////////

    public function gallery($page = 1){

        unset($this->request->data['page_filter']);
        if(isset($this->request->data) and !empty($this->request->data)){
            $kitchen_ids  = $this->__content_filter();
        }else{
            $kitchen_ids  = $this->Kitchen->find('list',array('fields'=>'id'));
        }
        $this->__get_info($kitchen_ids,'Kitchen',$page);
        
        $this->__sidebar_query();
        $paginate_data = $this->__pagination($kitchen_ids,$page);
        $this->set('paginate_data',$paginate_data);
        //$this->set('pagination',$return_data['pagination']);
        //$this->set('info',$kitchen_info);
    }
    
////////////////////////////////////////////////////////////////////////////////
    
    //Function for the products page - visitor side to display the list of available products
    public function products($page=1){

        unset($this->request->data['page_filter']);
        if(isset($this->request->data) and !empty($this->request->data)){
            $product_ids  = $this->__content_filter('Product');
        }else{
            $product_ids  = $this->Product->find('list',array('fields'=>'id'));
        }
        $this->__get_info($product_ids,'Product',$page);
        
        $this->__sidebar_query('Product');
        $paginate_data = $this->__pagination($product_ids,$page);
        $dimension_types = $this->DimensionType->find('list');
        $this->set('paginate_data',$paginate_data);
        $this->set(compact('dimension_types'));
        //$this->set('pagination',$return_data['pagination']);
        //$this->set('info',$kitchen_info);
    }
    
////////////////////////////////////////////////////////////////////////////////

    public function cart_add(){
        $this->autoRender = false;
        if($this->request->is('post')){
            $rqData = $this->request->data;
            foreach ($rqData['RangeValue'] as $key => $value):
                $rv_name = $this->RangeValue->read('name',$value['id']);
                $rqData['RangeValue'][$key]['name'] = $rv_name['RangeValue']['name'];
            endforeach;
            $cart_count = rand(1000,999999);
            $this->Session->write('Order.'.$cart_count,$rqData);
            return true;
        }
    }

////////////////////////////////////////////////////////////////////////////////

    public function cart_list(){
        if($this->request->is('post')):
            $rqData = $this->request->data;
            if($rqData['submit'] == 'Update Cart'){
                $cart = $this->Session->read('Order');
                foreach ($rqData['OrderItem']['delete'] as $value) {
                    $value = explode('_', $value);
                    $value = $value[1];
                    unset($cart[$value]);
                }
                foreach ($rqData['OrderItem']['quantity'] as $cart_id => $quantity):
                    if(isset($cart[$cart_id])):
                        if($quantity > 0):
                            $cart[$cart_id]['OrderItem']['quantity'] = $quantity;
                        else:
                            unset($cart[$cart_id]);
                        endif;
                    endif;
                endforeach;
                $this->Session->write('Order',$cart);
            $this->Session->setFlash('Your cart has been updated');
            }else{
                $this->__make_order();
            }
        endif;

        $cart = $this->Session->read('Order');
        $this->set(compact('cart'));
    }

////////////////////////////////////////////////////////////////////////////////

    private function __make_order(){
        $cart = $this->Session->read('Order');
        if(isset($cart)):
            $user = $this->Session->read('Auth.User.id');
            $customer_id = null;
            $customer_id = $this->Customer->find('first',array('conditions'=>array('user_id'=>$user),'fields'=>'id'));
            $customer_id = $customer_id['Customer']['id'];
            if(!(isset($customer_id))){
                $customer_id = null;

            }
            $today = date("Y-m-d H:i:s"); 
            $this->Order->create();
            if($this->Order->save(array('customer_id'=>$customer_id,'date'=>$today))):
                foreach ($cart as $key => $item):
                    $this->OrderItem->create();
                    $item['OrderItem']['order_id'] = $this->Order->id;
                    $this->OrderItem->save($item['OrderItem']);

                    $order_item_id = $this->OrderItem->id;
                    $count = 0;
                    $temp_array = array();
                    foreach ($item['RangeValue'] as $rv_array):
                        $temp_array[$count]['range_value_id'] = $rv_array['id'];
                        $temp_array[$count]['order_item_id'] = $order_item_id;
                        $count += 1;
                    endforeach;
                    $this->OrderItemsRangeValue->create();
                    $this->OrderItemsRangeValue->saveAll($temp_array);
                endforeach;

                //SEND EMAIL
                $email = new CakeEmail();
                $email->helpers(array('Html', 'Custom', 'Text'));
                $email->config('noreply');
                $email->subject('Engineered Cabinets: Order Autoresponse');
                $email->emailFormat('text');
                $cust_email = $this->Customer->find('first',array('conditions'=>array('Customer.id'=>$customer_id),'fields'=>'email'));
                if(isset($cust_email['Customer']['email'])):
                    $cust_email = $cust_email['Customer']['email'];
                    $order_num = 'ORD'.str_pad(h($this->Order->id),7,"0",STR_PAD_LEFT);
                    $email->to($cust_email)->send('Dear Valued Customer, your request have been send.Please use this number when you contact us if you have any other enquiries :'.$order_num);
                    $email->to('liam@engcabs.com.au')->send('New Quote Request received :'.$order_num);
                endif;

                $this->Session->delete('Order');
                $this->Session->setFlash('Your request have been submitted!');
                //REDIRECTION
                $this->redirect(array('action'=>'index'));
            endif;
        else:
            $this->Session->setFlash('Please add products into list before requesting quote');
        endif;
    }

////////////////////////////////////////////////////////////////////////////////
    
    public function testimonials($page=1){
        /* ----------LOAD ESSENTIAL MODELS-----------------*/
        unset($this->request->data['page_filter']);

        $testimonials_id = $this->Testimonial->find('list',array('fields'=>array('kitchen_id')));
        if(isset($this->request->data) and !empty($this->request->data)){
            $kitchen_ids  = $this->__content_filter();
            $kitchen_ids  = array_intersect($kitchen_ids, $testimonials_id);
        }else{
            $kitchen_ids  = $testimonials_id;
        }
        $this->__get_info($kitchen_ids,'Kitchen',$page);
        
        $this->__sidebar_query();
        $paginate_data = $this->__pagination($kitchen_ids,$page);
        $this->set('paginate_data',$paginate_data);
    }
    
////////////////////////////////////////////////////////////////////////////////
    
    public function about_us(){
        
    }

////////////////////////////////////////////////////////////////////////////////
    
    public function contact_us(){
        if($this->request->is('post')){
            $this->loadModel('Enquiry');
            $requestData = $this->request->data;
            $this->Enquiry->create();
            if($this->Enquiry->save($requestData)){
                $this->__send_email($requestData);
                $this->Session->setFlash('Your enquiry has been submitted. Please allow 2 - 5 working days for a response. Thank you.');
                $this->redirect(array('action'=>'contact_us'));
            } else {
                $this->Session->setFlash('Sorry, there seems to be a problem submitting your enquiry');
            }
        }
        
    }

    private function __send_email($requestData = null){
        $email = new CakeEmail();
        $email->helpers(array('Html', 'Custom', 'Text'));
        $email->config('noreply');
        if(isset($requestData['Enquiry']['email'])){
            $email->subject('Engineered Cabinets : Enquiry Autoresponse');
            $email->emailFormat('text');
            $email->to($requestData['Enquiry']['email'])->send('Dear Customer, this email is to verify that your enquiry have been submitted. Thank you very much.');
        }
        $email_liam = new CakeEmail();
        $email->helpers(array('Html', 'Custom', 'Text'));
        $email->config('noreply');
    }

////////////////////////////////////////////////////////////////////////////////

    private function __content_filter($type = 'Kitchen'){
        $filter = $this->request->data['CriteriaValues'.$type]['criteria_value_id'];
        foreach ($filter as $key_a => $value_a) {
            if (isset($item)){
                $conditions = array('criteria_value_id'=>$value_a, $type.'_id'=>$item);
            } else {
                $conditions = array('criteria_value_id'=>$value_a);
            }
            if($type == 'Kitchen'){
                $item = $this->CriteriaValuesKitchen->find('list',array(
                    'conditions'=>$conditions,
                    'fields'=>array('id','kitchen_id'),
                    'group' =>array('kitchen_id')
                ));
            } elseif ($type == 'Product') {
                $item = $this->CriteriaValuesProduct->find('list',array(
                    'conditions'=>$conditions,
                    'fields'=>array('id','product_id'),
                    'group'=>array('product_id')
                ));
            }
        }
        return $item;

    }

////////////////////////////////////////////////////////////////////////////////
    
    private function __get_info($ids,$type='Kitchen',$page=1){
        // type is either KITCHENS or PRODUCTS
        $this->paginate = array(
                'conditions'=>array($type.'.id'=>$ids),
                'order'=>('COALESCE('.$type.'.priority,999999999) ASC'),
                'limit'=>4,
                'page' => $page,
                'recursive'=>2,
            );
        $info = $this->paginate($type);
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

////////////////////////////////////////////////////////////////////////////////

    private function __pagination($ids,$page=1){
        // item can be KITCHEN or PRODUCTS
        // ids means many id
        $pagination = array();
        $item_count = count($ids);
        if($item_count <= 4){
            $pagination['hide'] = true;
        } elseif ($item_count > 4) {
            $pagination['hide'] = false;
            $count = ($page-1) * 4;
            if (($item_count - $count) <= 4){
                $pagination['last'] = true;
            } else {
                $pagination['last'] = false;
            }
            $pagination['page'] = $page;
            return $pagination;
        }
    }

////////////////////////////////////////////////////////////////////////////////

    private function __sidebar_query($type = 'Kitchen'){
        // type is either KITCHENS or PRODUCTS
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
            foreach ($this->request->data['CriteriaValues'.$type]['criteria_value_id'] as $key_a => $val_a) {
                foreach ($val_a as $key_aa => $val_aa) {
                    $selected[] = $val_aa;
                }
            }
        }
        $this->set('selected',$selected);
        $this->set('sidebar_data',$temp_array);
    }
}