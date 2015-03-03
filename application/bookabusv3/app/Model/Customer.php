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
		'valid' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'register_date' => array(
			'date' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
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
	);
        
        public function matchPassword($data){
            if($data['password'] == $this->data['Customer']['password_confirmation']){
                return true;
            }else{
                $this->invalidate('password_confirmation', 'Password did not match');
                return false;
            }
        }
        
        public function beforeSave($options = array()) {
            parent::beforeSave($options);
            if(isset($this->data['Customer']['password'])){
                $this->data['Customer']['password'] = AuthComponent::password($this->data['Customer']['password']);
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
