<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeLogins Controller
 *
 * @property EmployeeLogin $EmployeeLogin
 * @property PaginatorComponent $Paginator
 */
class EmployeeLoginsController extends AppController {

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
		$this->EmployeeLogin->recursive = 0;
		$this->set('employeeLogins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeeLogin->exists($id)) {
			throw new NotFoundException(__('Invalid employee login'));
		}
		$options = array('conditions' => array('EmployeeLogin.' . $this->EmployeeLogin->primaryKey => $id));
		$this->set('employeeLogin', $this->EmployeeLogin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeLogin->create();
			if ($this->EmployeeLogin->save($this->request->data)) {
				$this->Session->setFlash(__('The employee login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee login could not be saved. Please, try again.'));
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
		if (!$this->EmployeeLogin->exists($id)) {
			throw new NotFoundException(__('Invalid employee login'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployeeLogin->save($this->request->data)) {
				$this->Session->setFlash(__('The employee login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee login could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeeLogin.' . $this->EmployeeLogin->primaryKey => $id));
			$this->request->data = $this->EmployeeLogin->find('first', $options);
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
		$this->EmployeeLogin->id = $id;
		if (!$this->EmployeeLogin->exists()) {
			throw new NotFoundException(__('Invalid employee login'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmployeeLogin->delete()) {
			$this->Session->setFlash(__('The employee login has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee login could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
