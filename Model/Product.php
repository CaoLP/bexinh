<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Provider $Provider
 * @property Category $Category
 * @property InoutWarehouseDetail $InoutWarehouseDetail
 * @property OrderDetail $OrderDetail
 * @property ProductCategory $ProductCategory
 * @property ProductOption $ProductOption
 * @property Warehouse $Warehouse
 */
class Product extends AppModel
{
    public $actsAs = array('Media');
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'sku' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'provider_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
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
        ),
        'category_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Provider' => array(
            'className' => 'Provider',
            'foreignKey' => 'provider_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'InoutWarehouseDetail' => array(
            'className' => 'InoutWarehouseDetail',
            'foreignKey' => 'product_id',
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
        'OrderDetail' => array(
            'className' => 'OrderDetail',
            'foreignKey' => 'product_id',
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
        'ProductCategory' => array(
            'className' => 'ProductCategory',
            'foreignKey' => 'product_id',
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
        'ProductOption' => array(
            'className' => 'ProductOption',
            'foreignKey' => 'product_id',
            'dependent' => false,
            'conditions' => array('disable'=>0),
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'ProductSubitem' => array(
            'className' => 'ProductSubitem',
            'foreignKey' => 'product_id',
            'dependent' => false,
            'conditions' => array(),
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Warehouse' => array(
            'className' => 'Warehouse',
            'foreignKey' => 'product_id',
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

    public function getProduct($order = 'Product.created DESC',$limit = 6, $conditions = array()){
        $conditions['NOT'] = array(
            'Product.name' => array('0',''),
        );
        $result = $this->find('all',array(
            'fields' =>'Product.*,Category.*,ProductPromote.*,Promote.*,Thumb.file',
            'conditions' => $conditions,
            'joins' => array(
                array(
                    'table' => 'product_promotes',
                    'alias' => 'ProductPromote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Product.id = ProductPromote.product_id'
                    )
                ),
                array(
                    'table' => 'promotes',
                    'alias' => 'Promote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'ProductPromote.promote_id = Promote.id',
                        'Promote.begin <=' => date('Y-m-d H:i:s'),
                        'Promote.end >=' => date('Y-m-d H:i:s'),
                    )
                )
            ),
            'order' => array($order),
            'limit' => $limit
        ));
        return $result;
    }
    public function getProduct_SM($order = 'Product.created DESC',$limit = 6, $conditions = array()){
        unset($this->hasMany['OrderDetail']);
        unset($this->hasMany['InoutWarehouseDetail']);
        unset($this->hasMany['ProductCategory']);
        unset($this->hasMany['ProductOption']);
        unset($this->hasMany['ProductSubitem']);
        unset($this->hasMany['Warehouse']);
        $conditions['NOT'] = array(
            'Product.name' => array('0',''),
        );
        $result = $this->find('all',array(
            'fields' =>array(
                'Product.name',
                'Product.slug',
                'Product.sku',
                'Product.provider_id',
                'Product.price',
                'Product.media_id',
                'Thumb.*',
                'Category.slug',
                'Category.name',
                'ProductPromote.*',
                'Promote.value'
            ),
            'conditions' => $conditions,
            'joins' => array(
                array(
                    'table' => 'product_promotes',
                    'alias' => 'ProductPromote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Product.id = ProductPromote.product_id'
                    )
                ),
                array(
                    'table' => 'promotes',
                    'alias' => 'Promote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'ProductPromote.promote_id = Promote.id',
                        'Promote.begin <=' => date('Y-m-d H:i:s'),
                        'Promote.end >=' => date('Y-m-d H:i:s'),
                    )
                )
            ),
            'order' => array($order),
            'limit' => $limit
        ));
        return $result;
    }
    public function getProductDetails($category, $slug){
        $result = $this->find('first',array(
            'fields' =>array(
                'Product.*',
                'Category.*',
                'ProductPromote.*',
                'Promote.*',
                'Thumb.file'
            ),
            'conditions' => array(
                'NOT' => array(
                    'Product.name' => array('0',''),
                ),
                'Category.slug' => $category,
                'Product.slug' => $slug
            ),
            'joins' => array(
                array(
                    'table' => 'product_promotes',
                    'alias' => 'ProductPromote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Product.id = ProductPromote.product_id'
                    )
                ),
                array(
                    'table' => 'promotes',
                    'alias' => 'Promote',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'ProductPromote.promote_id = Promote.id',
                        'Promote.begin <=' => date('Y-m-d H:i:s'),
                        'Promote.end >=' => date('Y-m-d H:i:s'),
                    )
                )
            ),
        ));
        return $result;
    }
}
