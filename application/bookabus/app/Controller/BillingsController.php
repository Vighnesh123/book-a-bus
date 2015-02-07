<?php
App::uses('AppController', 'Controller');
/**
 * Billings Controller
 *
 * @property Billing $Billing
 * @property PaginatorComponent $Paginator
 */
class BillingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Billing->recursive = 0;
		$this->set('billings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Billing->exists($id)) {
			throw new NotFoundException(__('Invalid billing'));
		}
		$options = array('conditions' => array('Billing.' . $this->Billing->primaryKey => $id));
		$this->set('billing', $this->Billing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Billing->create();
			if ($this->Billing->save($this->request->data)) {
				$this->Session->setFlash(__('The billing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billing could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Billing->Customer->find('list');
		$bookings = $this->Billing->Booking->find('list');
		$this->set(compact('customers', 'bookings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Billing->exists($id)) {
			throw new NotFoundException(__('Invalid billing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Billing->save($this->request->data)) {
				$this->Session->setFlash(__('The billing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Billing.' . $this->Billing->primaryKey => $id));
			$this->request->data = $this->Billing->find('first', $options);
		}
		$customers = $this->Billing->Customer->find('list');
		$bookings = $this->Billing->Booking->find('list');
		$this->set(compact('customers', 'bookings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Billing->id = $id;
		if (!$this->Billing->exists()) {
			throw new NotFoundException(__('Invalid billing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Billing->delete()) {
			$this->Session->setFlash(__('The billing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The billing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
