<?php
App::uses('AppController', 'Controller');
/**
 * Testimonials Controller
 *
 * @property Testimonial $Testimonial
 */
class TestimonialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$this->set('testimonial', $this->Testimonial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($kitchen_id = null) {
		if ($this->request->is('post')) {
			$this->Testimonial->create();
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved'));
				$this->redirect(array('controller'=>'kitchens','action' => 'view',$kitchen_id));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		}
		$kitchens = $this->Testimonial->Kitchen->find('list',array('conditions'=>array('id'=>$kitchen_id)));
		$this->set('kitchen_id',$kitchen_id);
		$this->set(compact('kitchens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$kitchen_id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved'));
				$this->redirect(array('controller'=>'kitchens','action' => 'view',$kitchen_id));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Testimonial->read(null, $id);
		}
		$kitchens = $this->Testimonial->Kitchen->find('list',array('conditions'=>array('id'=>$kitchen_id)));
		$this->set('kitchen_id',$id);
		$this->set(compact('kitchens'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $kitchen_id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->Testimonial->delete()) {
			$this->Session->setFlash(__('Testimonial deleted'));
			$this->redirect(array('controller'=>'kitchens','action' => 'view',$kitchen_id));
		}
		$this->Session->setFlash(__('Testimonial was not deleted'));
		$this->redirect(array('controller'=>'kitchens','action' => 'view',$id));
	}
}
