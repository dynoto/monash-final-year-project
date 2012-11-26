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
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add_ajax');
        $this->loadModel('Product');
    }


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
        if ($type == 'kitchen') {
            $kitchens = $this->Image->Kitchen->find('list');
            $this->set('item_name',$kitchens[$id]);
        } elseif($type == 'product') {
            $products = $this->Product->find('list');
            $this->set('item_name',$products[$id]);
        }
        $this->set('item_type', $type);
        $this->set('item_id', $id);
        $this->set('item_new', $new);
    }
    
    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null,$type,$type_id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Image->id = $id;
        if (!$this->Image->exists()) {
            throw new NotFoundException(__('Invalid image'));
        }
        if ($this->Image->delete()) {
            $this->Session->setFlash(__('Image deleted'));
            $this->redirect(array('controller'=>$type,'action' => 'view',$type_id));
        }
        $this->Session->setFlash(__('Image was not deleted'));
        $this->redirect(array('controller'=>$type,'action' => 'view',$type_id));
    }

    public function add_ajax($id = null,$type = null){
        $targetFolder = Router::url('/app/webroot/img/'.$type.'/'); // Relative to the root
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
            $type = $type.'_id';
            $image_data = array('name'=>$hashFile,$type=>$id);
            $this->Image->create();
            if($this->Image->save($image_data)){
                echo 'Image Saved Successfully';
            }
        }
    }

}
