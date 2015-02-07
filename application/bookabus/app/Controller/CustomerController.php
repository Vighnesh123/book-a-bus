<?php
class CustomerController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('customers', $this->Customer->find('all'));
    }    
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
}
