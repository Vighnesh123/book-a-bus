<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Email', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
                echo $this->html->charset('ISO-8859-1');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('controller'=>'Customers','action' => 'login'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
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
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function beforeFilter() {
            parent::beforeFilter();
            // Allow users to register and logout.
            $this->Auth->allow('add','forgot','reset');
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
        
        public function dashboard(){
            $bookingsList = $this->Customer->Booking->find('all', array(
                'conditions'=> array(
                    'Customer.id'=> $this->Auth->user()['id'],
                    'Schedule.date >=' => date('Y-m-d'),
                ),
                'fields'=>array(
                    'DISTINCT Booking.transaction_code',
                    'Schedule.station',
                    'Schedule.destination',
                    'Schedule.date',
                ),
                'limit'=>4,
                'order'=>'Schedule.date DESC',
                'recursive'=>1
            ));
            
            $scheduleHistoryList = $this->Customer->Booking->find('all', array(
                'conditions'=> array(
                    'Customer.id'=> $this->Auth->user()['id'],
                    'Schedule.date <' => date('Y-m-d'),
                ),
                'fields'=>array(
                    'DISTINCT Booking.transaction_code',
                    'Schedule.station',
                    'Schedule.destination',
                    'Schedule.date',
                ),
                'limit'=>4,
                'order'=>'Schedule.date DESC',
                'recursive'=>1
            ));
            
            $this->set('bookingsList',$bookingsList);
            $this->set('scheduleHistoryList',$scheduleHistoryList);
        }
        
        public function changePass(){
            if($this->request->is('post')){
                //print_r($this->request->data);
                if ($this->Customer->save($this->request->data)) {
                    $this->Session->setFlash('Password has been changed.');
                    $this->redirect(array('action' => 'dashboard'));
                }else {
                    $this->Session->setFlash('Password was not changed.');
                }
            }
        }
        
        public function forgot(){
            if($this->request->is('post')){
                    $userInfo = $this->Customer->find('first',array(
                        'conditions'=>array('Customer.email' =>$this->request->data['Customer']['email']),
                        'fields' => array('Customer.email', 'Customer.id','Customer.fname','Customer.lname'),
                        'recursive'=>-1
                    ));
                    if(!empty($userInfo)){
                        $key = Security::hash(String::uuid(), 'sha512', true);
                        $hash = sha1($userInfo['Customer']['email'].  rand(0, 120));
                        $url = Router::url(array('controller'=>'Customers', 'action'=>'reset'),true).'/'.$key.'#'.$hash;
                        $ms = wordwrap($url,1000);
                        $userInfo['Customer']['tokenhash'] = $key;
                        $this->Customer->id = $userInfo['Customer']['id'];
                        if ($this->Customer->saveField('tokenhash', $userInfo['Customer']['tokenhash'])){
                             //============Email================//
                            /* SMTP Options */
                            $this->Email->smtpOptions = array(
                            'port'=>465,
                            'timeout'=>'360',
                            'host' => 'ssl://smtp.gmail.com',
                            'username'=>'pqmayo406@gmail.com',
                            'password'=>'paolo123',
                            'transport'=>'Smtp',
                              );
                            $this->Email->template = 'resetpw';
                            $this->Email->from    = 'biyahe_by_bus@noreply.com';
                            $this->Email->to      = $userInfo['Customer']['fname']." ".$userInfo['Customer']['lname'].'<'.$userInfo['Customer']['email'].'>';
                            $this->Email->subject = 'Password Reset For Biyahe';
                            $this->Email->sendAs = 'both';

                            $this->Email->delivery = 'smtp';
                            $this->set('ms', $ms);
                            $this->Email->send();
                            $this->set('smtp_errors', $this->Email->smtpError);
                            $this->Session->setFlash(__('Check Your Email To Reset your password', true));
                            $this->redirect(array('controller'=>'Customers','action'=>'login'));
                            //============EndEmail=============//
                        }else {
                            $this->Session->setFlash('Error sending the reset email');
                        }
                    }
                  //  $this->set('userInfo',$userInfo);
                
            }
        }
        
        public function reset($token=null){
            $this->Customer->recursive=-1;
            if(!empty($token)){
                $u=$this->Customer->findBytokenhash($token);
                if($u){
                    $this->Customer->id=$u['Customer']['id'];
                    if(!empty($this->request->data)){
                        $this->Customer->data=$this->request->data;
                        $this->Customer->data['Customer']['email']=$u['Customer']['email'];
                        $new_hash=sha1($u['Customer']['email'].rand(0,100));//created token
                        $this->Customer->data['Customer']['tokenhash']=$new_hash;
                        if($this->Customer->validates(array('fieldList'=>array('password','password_confirmation')))){
                            if($this->Customer->save($this->Customer->data)){
                                $this->Session->setFlash('Password Has been Updated');
                            }
                        }else{

                            $this->set('errors',$this->Customer->invalidFields());
                        }
                    }
                }else{
                    $this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
                }
            }else{
            $this->redirect('/');
            }
        }
}
