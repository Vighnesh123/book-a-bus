<?php
App::uses('AppController', 'Controller');
/**
 * Bookings Controller
 *
 * @property Booking $Booking
 * @property PaginatorComponent $Paginator
 */
class BookingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

        
        private function makeTransactionCode(){
            $this->autoRender = false;
            $date = date_format(date_create(), "m/d/y");
            $time = time();

            $x = $date.$time;
            
            $hashed = md5($x);
            $sliced = substr($hashed, 0,4);
            $uppercase = strtoupper($sliced);
            $datefinal = $uppercase;
            
            $rand = uniqid();
            $randslice = substr($rand, 6, 11);
            $randupper = strtoupper($randslice);
            $randfinal = $randupper;
            
            $refNum = $datefinal.$randfinal;
            
            return $refNum;
        }
        /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Booking->recursive = 0;
		$this->set('bookings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Booking->exists($id)) {
			throw new NotFoundException(__('Invalid booking'));
		}
		$options = array('conditions' => array('Booking.' . $this->Booking->primaryKey => $id));
		$this->set('booking', $this->Booking->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            $this->autoRender = false;
		if ($this->request->is('post')) {
                    
                        //$refNum = $this->makeTransactionCode();
                        /*
			$this->Booking->create();
                    
                        foreach ($this->request->data['Booking']['seat_code'] as $seats){
                            $this->Booking->create(array(
                                'seat_code'=>$seats, 
                                'schedule_id'=>$this->request->data['Booking']['schedule_id'],
                                'customer_id'=>$this->request->data['Booking']['customer_id'],
                                'seat_bus_id'=>$this->request->data['Booking']['seat_bus_id'],
                                'booking_status'=>'OTW',
                                'transaction_no'=>$refNum
                                ));
                            $this->Booking->save();
                        }
                        $this->Session->setFlash(__('Seats Has been booked to you'));
                         //$this->ticket($this->request->data);
                        return $this->redirect(array('action' => 'ticket', '?x=' => base64_encode($this->request->data)));  */
                        /*
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			} */
		}
                /*
		$customers = $this->Booking->Customer->find('list');
		$schedules = $this->Booking->Schedule->find('list');
		$buses = $this->Booking->Bus->find('list');
		$this->set(compact('customers', 'schedules', 'buses')); */
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Booking->exists($id)) {
			throw new NotFoundException(__('Invalid booking'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Booking.' . $this->Booking->primaryKey => $id));
			$this->request->data = $this->Booking->find('first', $options);
		}
		$customers = $this->Booking->Customer->find('list');
		$schedules = $this->Booking->Schedule->find('list');
		$buses = $this->Booking->Bus->find('list');
		$this->set(compact('customers', 'schedules', 'buses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Booking->id = $id;
		if (!$this->Booking->exists()) {
			throw new NotFoundException(__('Invalid booking'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Booking->delete()) {
			$this->Session->setFlash(__('The booking has been deleted.'));
		} else {
			$this->Session->setFlash(__('The booking could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function saleSummary($params=null){
            if($this->request->is("post")){
                debug($this->request->data);
                $this->set('transactionInfo', $this->request->data);
            }
        }
        
        public function save_reserve(){
            if($this->request->is("post")){
                debug($this->request->data);
                $refNum = $this->makeTransactionCode();
                
                foreach ($this->request->data['Booking']['seat_code'] as $seats){
                            $this->Booking->create(array(
                                'seat_code'=>$seats, 
                                'schedule_id'=>$this->request->data['Booking']['schedule_id'],
                                'customer_id'=>$this->request->data['Booking']['customer_id'],
                                'seat_bus_id'=>$this->request->data['Booking']['seat_bus_id'],
                                'booking_status'=>'OTW',
                                'transaction_code'=>$refNum
                                ));
                            $this->Booking->save();
                        }
                        $this->Session->setFlash(__('Seats Has been booked to you'));
            }
        }
        
        public function beforeFilter() {
                parent::beforeFilter();
                //$this->Auth->allow('index', 'show_sched');
        }
}
