<?php
App::uses('AppModel', 'Model');
/**
 * ProductOption Model
 *
 * @property Option $Option
 * @property Product $Product
 */
class ProductSubitem extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
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
        'medias' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
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
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public function updateSubitem($subitem_data,$product_id){
        $old_data = $this->find('list',
            array(
                'conditions' =>
                    array(
                        'product_id' => $product_id
                    )
            )
        );
        $update_data = array();
        $saveData = array();
        foreach($subitem_data as $item){
            $item_save = array(
                'name' => $item['name'],
                'medias' => json_encode($item['medias']),
                'product_id' => $product_id
            );
            if(isset($item['id'])){
                $update_data[] = $item['id'];
                $item_save['id'] = $item['id'];
            }
            $saveData[] = $item_save;
        }
        $this->saveMany($saveData);
        $subtract = array_diff(array_keys($old_data),$update_data);
        $this->deleteAll(array('ProductSubitem.id'=> $subtract));
    }
}
