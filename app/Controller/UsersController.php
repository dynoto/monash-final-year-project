<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */

	public $helpers = array('Html','Form','Session');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login','logout','add','initDB');
		$this->Auth->authenticate = array(
			"Form"=>array(
				'fields'=>array("username" =>"name"),
				'scope'=>array("User.approved" => 1)
			)
		);
		$this->loadModel('Customer');
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$requestData = $this->request->data;
			$requestData['User']['approved'] = 1;
			$requestData['User']['group_id'] = 1;
			if ($this->User->save($requestData)) {
				$aro = new Aro();
				$user = array(
						'alias'=>$requestData['User']['name'],
						'parent_id'=>1,
						'model'=>'User',
						'foreign_key'=>$this->User->id
				);
				$aro->Create();
				$aro->save($user);
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$active_user = $this->Session->read('Auth.User.id');
		$group_id = $this->User->find('first',array('conditions'=>array('User.id'=>$id)))['Group']['id'];
		if($id != $active_user){
			if($group_id == 1){
				$admin_count = $this->User->find('count',array('conditions'=>array('group_id'=>1)));
				if($admin_count > 1){
					$this->User->delete();
					$this->Session->setFlash(__('User deleted'));
					$this->redirect(array('action' => 'index'));
				}
			}
			else if($group_id == 2){
				$customer_id = $this->Customer->find('first',array('conditions'=>array('user_id'=>$id)))['Customer']['id'];
				$this->Customer->save(array('Customer'=>array('id'=>$customer_id,'user_id'=>NULL)));
				$this->User->delete();
				$this->Session->setFlash(__('User deleted'));
				$this->redirect(array('action' => 'index'));
			}
		}else{
			$this->Session->setFlash(__('Admin cannot delete your own account'));
			$this->redirect(array('action' => 'index'));
		}
	}

	public function login(){
		if ($this->request->is('post')){
			if ($this->Session->read('Auth.User')){
				$this->Session->setFlash("you have been logged in");
				$this->redirect('/');
			} else {
				if ($this->Auth->login()){
					$group_id = $this->Session->read('Auth.User.Group.id');
					if($group_id == 1){
						$this->redirect('/Administrators');
					}else{
						$this->redirect($this->Auth->redirect());
					}
				} else{
					$this->Session->setFlash("Your Username & Password is incorrect / User have not yet approved",'session_error');
				}
			}
		}
	}

	public function logout(){
		$this->Session->delete('Order');
		$this->redirect($this->Auth->logout());
		exit;
	}

	//THIS METHOD BELOW IS TO ACTIVATE THE ACL, DO NOT DELETE, DO NOT UNCOMMENT ON LIVE SERVER
	//DO ./cake schema create DbAcl
	//DO ./cake acl create aco root controllers
	//DO ./cake AclExtras.AclExtras aco_sync
	//CREATE ADMINS GROUP FROM WEBSITE
	//CREATE USERS GROUP FROM WEBSITE 
	
	public function initDB(){
		$group = $this->User->Group;
		$group->id = 1; //ADMINISITRATORS GROUP ID
		$this->Acl->allow($group,'controllers');

		$group->id = 2; //CUSTOMERS GROUP ID
		$this->Acl->deny($group,'controllers');
		$this->Acl->deny($group,'controllers/Users/');
		$this->Acl->allow($group,'controllers/Visitors');
		$this->Acl->allow($group,'controllers/Users/login');
		$this->Acl->allow($group,'controllers/Users/logout');

		echo "All Done";
		exit;
	}
	
	//END OF ACL METHOD ACTIVATION
}
