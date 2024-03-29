<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property Booking $Booking
 * @property CreditInfo $CreditInfo
 * @property Reward $Reward
 */
class Customer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'customer';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please input your first name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please input your last name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please input valid email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        'isUnique' => array(
                                'rule'=> array('isUnique'),
                                'message'=> 'Email aleady taken',
                        )
		),
		'phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please insert your phone number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birthday' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Please insert valid date',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        'alphaNumeric'=> array (
                                'rule'=> 'alphaNumeric',
                                'message'=>'Please make password Alpha Numeric',
                        ),
                        'matchPassword'=> array(
                                'rule' => 'matchPassword',
                                'message'=> 'Password does not match',
                        ),
		),
                'password_confirmation'=>array(
                        'notEmpty' => array(
				'rule' => array('notEmpty'),
                                'message'=>'Please confirm password',
                        )
                ),
                'current_password'=>array(
                    'checkPass' => array(
                            'rule' => 'checkCurrentPassword',
                            'message' => 'Wrong Password !'
                    )
                ),
                'newpassword1'=>array(
                    'matchPassword'=>array(
                        'rule' => 'changePassMatcher',
                        'message' => 'Password did not match'
                    ),
                    'notEmpty'=>array(
                        'rule' => 'notEmpty',
                        'message' => 'Please confirm password'
                    )
                ),
                'newpassword2'=> array(
                    'notEmpty'=>array(
                        'rule' => 'notEmpty',
                        'message' => 'Please confirm password'
                    )
                )
	);
        
        public function matchPassword($data){
            if($data['password'] == $this->data['Customer']['password_confirmation']){
                return true;
            }else{
                $this->invalidate('password_confirmation', 'Password did not match');
                return false;
            }
        }
        
        public function changePassMatcher($data){
            if($data['newpassword1'] == $this->data['Customer']['newpassword2']){
                return true;
            }else{
                $this->invalidate('newpassword1', 'Password did not match');
                return false;
            }
        }
        
        
        public function checkCurrentPassword($data){
            $this->id = AuthComponent::user('id');
            $password = $this->field('password');
            if(isset($data['current_password'])){
                if(AuthComponent::password($data['current_password']) == $password){
                    return true;
                }else {
                    $this->invalidate('current_password', 'Password did not match');
                    return false;
                }
                return true;
            }
        }

        public function beforeSave($options = array()) {
            parent::beforeSave($options);
            // Used on Customer Registration
            if(isset($this->data['Customer']['password'])){
                $this->data['Customer']['password'] = AuthComponent::password($this->data['Customer']['password']);
                $this->data['Customer']['valid'] = 'passenger';
                $this->data['Customer']['register_date'] = date('Y-m-d H:m:s',time());
            }
            // Used on User changig password
            if (isset($this->data['Customer']['newpassword1'])) {
                $this->data['Customer']['password'] = AuthComponent::password($this->data['Customer']['newpassword1']);
            } 
            return true;
        }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Booking' => array(
			'className' => 'Booking',
			'foreignKey' => 'customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CreditInfo' => array(
			'className' => 'CreditInfo',
			'foreignKey' => 'customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Reward' => array(
			'className' => 'Reward',
			'foreignKey' => 'customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
