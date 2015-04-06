<?php
App::uses('AppModel', 'Model');
/**
 * Warehouse Model
 *
 * @property Store $Store
 * @property Product $Product
 */
class Warehouse extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'warehouse';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'store_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Store' => array(
			'className' => 'Store',
			'foreignKey' => 'store_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $hasMany = array(
        'WarehouseOption' => array(
            'className' => 'WarehouseOption',
            'foreignKey' => 'warehouse_id',
            'dependent' => false,
            'conditions' => array('disable'=>0),
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    public function beforeSave($options = array()){
        $this->data[$this->alias]['code'] = implode('_',$this->data['WarehouseOption']);
        if (!$this->id && !isset($this->data[$this->alias][$this->primaryKey])) {
            $find = $this->find('first',array(
                'conditions' => array(
                    $this->alias . '.store_id' => $this->data[$this->alias]['store_id'],
                    $this->alias . '.product_id' => $this->data[$this->alias]['product_id'],
                    $this->alias . '.code' => $this->data[$this->alias]['code'],
                ),
                'recursive' => -1
            ));
//            $log = $this->getDataSource()->getLog(false, false);
//            debug($log);
//            debug($this->data['WarehouseOption']);
//            debug($find);die;
            if(count($find) > 0){
                $this->data[$this->alias]['id'] = $find[$this->alias]['id'];
                $this->data[$this->alias]['qty'] = $this->data[$this->alias]['qty'] + $find[$this->alias]['qty'];
                $this->delete($this->data[$this->alias]['id']);
            }
        } else {
        }
        parent::beforeSave($options);
    }
}
