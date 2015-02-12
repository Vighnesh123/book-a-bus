<?php
App::uses('AppController', 'Controller');
/**
 * CreditInfos Controller
 *
 * @property CreditInfo $CreditInfo
 * @property PaginatorComponent $Paginator
 */
class CreditInfosController extends AppController {

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
		$this->CreditInfo->recursive = 0;
		$this->set('creditInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CreditInfo->exists($id)) {
			throw new NotFoundException(__('Invalid credit info'));
		}
		$options = array('conditions' => array('CreditInfo.' . $this->CreditInfo->primaryKey => $id));
		$this->set('creditInfo', $this->CreditInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CreditInfo->create();
			if ($this->CreditInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The credit info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit info could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CreditInfo->exists($id)) {
			throw new NotFoundException(__('Invalid credit info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CreditInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The credit info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CreditInfo.' . $this->CreditInfo->primaryKey => $id));
			$this->request->data = $this->CreditInfo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CreditInfo->id = $id;
		if (!$this->CreditInfo->exists()) {
			throw new NotFoundException(__('Invalid credit info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CreditInfo->delete()) {
			$this->Session->setFlash(__('The credit info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The credit info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
