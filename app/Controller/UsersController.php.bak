<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function login(){
		if ($this->request->is('post')){
			if ($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			} else{
				$this->Session->setFlash("Your Username or Password is incorrect");
			}
		}
	}
}
