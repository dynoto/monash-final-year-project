<?php

App::uses('AppController', 'Controller');

/**
 * Images Controller
 *
 * @property Image $Image
 */
class ImagesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Image->recursive = 0;
        $this->set('images', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Image->id = $id;
        if (!$this->Image->exists()) {
            throw new NotFoundException(__('Invalid image'));
        }
        $this->set('image', $this->Image->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($type = null, $id = null, $new = null) {
        if ($this->request->is('post')) {
            $this->Image->create();
            if ($this->Image->save($this->request->data)) {
                $this->Session->setFlash(__('The image has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The image could not be saved. Please, try again.'));
            }
        }
        if ($type == 'Kitchen') {
            $kitchens = $this->Image->Kitchen->find('list');
            $this->set('item_name',$kitchens[$id]);
        }
        $this->set('item_type', $type);
        $this->set('item_id', $id);
        $this->set('item_new', $new);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */

    /*
    public function edit($id = null) {
        $this->Image->id = $id;
        if (!$this->Image->exists()) {
            throw new NotFoundException(__('Invalid image'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Image->save($this->request->data)) {
                $this->Session->setFlash(__('The image has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The image could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Image->read(null, $id);
        }
        $kitchens = $this->Image->Kitchen->find('list');
        $this->set(compact('kitchens'));
    }
    */
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
        $this->Image->id = $id;
        if (!$this->Image->exists()) {
            throw new NotFoundException(__('Invalid image'));
        }
        if ($this->Image->delete()) {
            $this->Session->setFlash(__('Image deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Image was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function add_ajax($id = null,$type = null){
        $targetFolder = Router::url('/app/webroot/img/kitchens/'); // Relative to the root
        //echo $this->Html->Url('/');
        if (!empty($_FILES)) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            $hashFile   = md5_file($_FILES['Filedata']['tmp_name']).'.'.$fileParts['extension'];
            $targetFile = rtrim($targetPath,'/') . '/' . $hashFile;
            
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo '1';
            } else {
                echo 'Invalid file type.';
            }
            $image_data = array('name'=>$hashFile,'kitchen_id'=>$id);
            $this->Image->create();
            if($this->Image->save($image_data)){
                echo 'Image Saved Successfully';
            }
        }
    }

}
