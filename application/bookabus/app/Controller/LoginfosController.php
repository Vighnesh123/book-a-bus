<?php
App::uses('AppController', 'Controller');
/**
 * Loginfos Controller
 *
 * @property Loginfo $Loginfo
 * @property PaginatorComponent $Paginator
 */
class LoginfosController extends AppController {

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
		$this->Loginfo->recursive = 0;
		$this->set('loginfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loginfo->exists($id)) {
			throw new NotFoundException(__('Invalid loginfo'));
		}
		$options = array('conditions' => array('Loginfo.' . $this->Loginfo->primaryKey => $id));
		$this->set('loginfo', $this->Loginfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loginfo->create();
			if ($this->Loginfo->save($this->request->data)) {
				$this->Session->setFlash(__('The loginfo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loginfo could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Loginfo->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Loginfo->exists($id)) {
			throw new NotFoundException(__('Invalid loginfo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loginfo->save($this->request->data)) {
				$this->Session->setFlash(__('The loginfo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loginfo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Loginfo.' . $this->Loginfo->primaryKey => $id));
			$this->request->data = $this->Loginfo->find('first', $options);
		}
		$customers = $this->Loginfo->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Loginfo->id = $id;
		if (!$this->Loginfo->exists()) {
			throw new NotFoundException(__('Invalid loginfo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Loginfo->delete()) {
			$this->Session->setFlash(__('The loginfo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The loginfo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function beforeFilter() {
            parent::beforeFilter();
            // Allow users to register and logout.
            $this->Auth->allow('logout','login');
        }

        public function login() {
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }

        public function logout() {
            return $this->redirect($this->Auth->logout());
        }
}
