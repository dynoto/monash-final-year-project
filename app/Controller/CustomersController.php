<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
		$models = array('User','CustomerType','Order','Product');
		foreach ($models as $key => $value) {
			$this->loadModel($value);
		}
	}

	public function index() {
		$this->Customer->recursive = 0;
		$this->paginate = array('conditions'=>array('User.approved'=>1,'User.group_id'=>2));
		$this->set('customers', $this->paginate());
		$user_count = $this->User->find('count',array('conditions'=>array('approved'=>0,'group_id'=>2)));
		if($user_count > 0){
			$this->set('user_count',$user_count);
		}	
	}

	public function approve(){
		if($this->request->is('post')){
			$data = $this->request->data;
			$customers = $data['Customer']['Checked'];
			$users = $this->Customer->find('list',array('conditions'=>array('id'=>$customers),'fields'=>'user_id'));
			if($data['Customer']['approve_boolean'] == 1){
				$this->User->updateAll(
					array('User.approved'=>1),
					array('User.id'=>$users)
				);
			}elseif ($data['Customer']['approve_boolean'] == -1) {
				$this->Customer->deleteAll(array('Customer.id'=>$customers),false);
				$this->User->deleteAll(array('User.id'=>$users),false);
			}
		}

		$this->Customer->recursive = 0;
		$this->paginate = array('conditions'=>array('User.approved'=>0,'User.group_id'=>2));
		$this->set('customers', $this->paginate());
		$customerTypes = $this->CustomerType->find('list');
		$this->set(compact('customerTypes'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->set('orders',$this->Order->find('all',array('conditions'=>array('customer_id'=>$id))));
		$this->set('customer', $this->Customer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->loadModel('User');
			$this->User->create();
			$request_data = $this->request->data;
			$request_data['User']['group_id'] = 2; // 2 = CUSTOMERS GROUP
			$request_data['User']['approved'] = 0; // 0 = NOT APPROVED BY DEFAULT
			if($this->User->save($request_data)):
				$request_data['Customer']['user_id'] = $this->User->id;
				$this->Customer->create();
				if ($this->Customer->save($request_data)):
					$aro = new Aro();
					$user = array(
						'alias'=>$request_data['User']['name'],
						'parent_id'=>2, //PARENT ID CUSTOMER
						'model'=>'User',
						'foreign_key'=>$this->User->id
					);
					$aro->Create();
					$aro->save($user);

					$session_data = $this->Session->read('Auth.User.Group.id');
					if(isset($session_data)):
						if(isset($session_data) && $session_data == 1):
							$this->Session->setFlash('Customer account has been successfully created');
							$this->redirect(array('action'=>'index'));
						endif;
					else:
						$this->Session->setFlash(__('Your account has been successfully created !'));
						$this->redirect(array('controller'=>'visitors'));
					endif;
				else:
					$this->User->delete($this->User->id);
					$this->Session->setFlash(__("Your account couldn't be created, please try again."));
				endif;
			else:
				$this->Session->setFlash(__("Your account couldn't be created, please try again."));
			endif;
		}
		$customerTypes = $this->Customer->CustomerType->find('list');
		$this->set(compact('customerTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Customer->read(null, $id);
		}
		$customer_id = $id;
		$customerTypes = $this->Customer->CustomerType->find('list');
		$this->set(compact('customerTypes','customer_id'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('Customer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	// public function approve($id = null) {
	// 	if ($this->request->is('post')){

	// 	} else {
	// 		$users = $this->Customer->User->find('list',array('conditions'=>array('approved'=>0,'group_id'=>2),'fields'=>'id'));
	// 		$customers = $this->Customer->find('all',array('conditions'=>array('user_id'=>$users)));
	// 		$this->set(compact($users,$customers));
	// 	}
	// }
}
