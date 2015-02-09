<?php
App::uses('AppController', 'Controller');
/**
 * Scheadules Controller
 *
 * @property Scheadule $Scheadule
 * @property PaginatorComponent $Paginator
 */
class ScheadulesController extends AppController {

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
		$this->Scheadule->recursive = 0;
		$this->set('scheadules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Scheadule->exists($id)) {
			throw new NotFoundException(__('Invalid scheadule'));
		}
		$options = array('conditions' => array('Scheadule.' . $this->Scheadule->primaryKey => $id));
		$this->set('scheadule', $this->Scheadule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Scheadule->create();
			if ($this->Scheadule->save($this->request->data)) {
				$this->Session->setFlash(__('The scheadule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scheadule could not be saved. Please, try again.'));
			}
		}
		$buses = $this->Scheadule->Bus->find('list');
		$this->set(compact('buses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Scheadule->exists($id)) {
			throw new NotFoundException(__('Invalid scheadule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Scheadule->save($this->request->data)) {
				$this->Session->setFlash(__('The scheadule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scheadule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Scheadule.' . $this->Scheadule->primaryKey => $id));
			$this->request->data = $this->Scheadule->find('first', $options);
		}
		$buses = $this->Scheadule->Bus->find('list');
		$this->set(compact('buses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Scheadule->id = $id;
		if (!$this->Scheadule->exists()) {
			throw new NotFoundException(__('Invalid scheadule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Scheadule->delete()) {
			$this->Session->setFlash(__('The scheadule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The scheadule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('index');
        }
}
