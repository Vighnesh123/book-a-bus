<?php
App::uses('AppController', 'Controller');
/**
 * Schedules Controller
 *
 * @property Schedule $Schedule
 * @property PaginatorComponent $Paginator
 */
class SchedulesController extends AppController {

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
		$this->Schedule->recursive = 0;
		$this->set('schedules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
		$this->set('schedule', $this->Schedule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Schedule->create();
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		}
		$buses = $this->Schedule->Bus->find('list');
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
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
			$this->request->data = $this->Schedule->find('first', $options);
		}
		$buses = $this->Schedule->Bus->find('list');
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
		$this->Schedule->id = $id;
		if (!$this->Schedule->exists()) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Schedule->delete()) {
			$this->Session->setFlash(__('The schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function show_sched(){
            $station = $this->request->data['Schedule']['station'];
            $date = date('Y-m-d',strtotime($this->request->data['Schedule']['my_date']));
            $destination = $this->request->data['Schedule']['destination'];
            
            $result = $this->Schedule->find('all', array (
                'conditions' => array(
                    'Schedule.station =' => $station,
                    'Schedule.date =' => $date,
                    'Schedule.destination =' => $destination
                    ),
                'fields'=>array(
                    'Schedule.destination',
                    'Schedule.station',
                    'Schedule.departure',
                    'Schedule.ETA',
                    'Schedule.date'
                ),
                'recursive'=>-1
            ));
            $result2 = $this->Schedule->find('all', array (
                'conditions' => array(
                    'Schedule.destination =' => $destination
                    ),
                'fields'=>array(
                    'Schedule.destination',
                    'Schedule.station',
                    'Schedule.departure',
                    'Schedule.ETA',
                    'Schedule.date'
                ),
                'recursive'=>-1
            ));
            $this->set('schedules', $result);
            $this->set('schedules2', $result2);
        }
        
        public function logged_show_sched(){
            $stations = array();
            $destinationDropdownValues = $this->Schedule->find('all',array(
                'fields'=>array(
                    'DISTINCT Schedule.station'
                ),
                'recursive' => -1
            ));

            foreach ($destinationDropdownValues as $value){
                $stations[$value['Schedule']['station']] = $value['Schedule']['station'];
            }
            $this->set('stations',$stations);
            //print_r($destinationDropdownValues);
        }
        
        public function ajax_show_sched(){
            if ($this->request->is('Ajax')){
                if(!empty($this->request->data)){
                    // Set retrived data into a variable
                    $station = $this->request->data['Schedule']['station'];
                    if (!empty($this->request->data['Schedule']['date'])){
                        $date = date('Y-m-d',strtotime($this->request->data['Schedule']['date']));
                    }
                    $destination = $this->request->data['Schedule']['destination'];
                    //echo $date;
                    
                    $conditions = array();
                    $options = array( 
                    'fields'=>array(
                        'Schedule.id',
                        'Schedule.destination',
                        'Schedule.station',
                        'Schedule.departure',
                        'Schedule.ETA',
                        'Schedule.date'
                        ),
                    'recursive'=>-1,
                    'update'=>'#potato',
                    'limit' => 10,
                    'order'=> 'date desc'
                    );
                    
                    if(!empty($station)){$conditions['Schedule.station'] = $station;}
                    if(!empty($date)){$conditions['Schedule.date'] = $date;}
                    if(!empty($destination)){$conditions['Schedule.destination'] =  $destination;} 
                    //$options['conditions'] = array('Schedule.station' => $station);
                    $options['conditions'] = $conditions;
                    //print_r($options);
                    $this->Paginator->settings = $options;
                    $result = $this->Paginator->paginate('Schedule');
            }
            $this->set('schedules',$result);
            }
        } 
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('index', 'show_sched');
    }
}
