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

        $customer = $this->Customer->findById($id);
        if (!$customer) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('customer', $customer);
    }
}
