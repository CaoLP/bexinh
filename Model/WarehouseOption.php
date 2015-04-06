<?php
App::uses('AppModel', 'Model');
/**
 * WarehouseOption Model
 *
 */
class WarehouseOption extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Warehouse' => array(
			'className' => 'Warehouse',
			'foreignKey' => 'warehouse_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function updateOptions($data, $warehouse_id)
    {
        $old_options = $this->find('list',
            array(
                'fields' => 'option_id,id',
                'conditions' =>
                    array(
                        'warehouse_id' => $warehouse_id
                    )
            )
        );
        $saveData = array();
        foreach($data as $d){
            if(in_array($d,array_keys($old_options))){
                $saveData[] = array(
                    'id' => $old_options[$d],
                    'option_id' => $d,
                    'disable' => 0
                );
            }else{
                $saveData[] = array(
                    'warehouse_id' => $warehouse_id,
                    'option_id' => $d,
                    'disable' => 0
                );
            }
        }
        $removeData = array();
        foreach(array_keys($old_options) as $d){
            if(!in_array($d,$data)){
                $removeData[] = $old_options[$d];
            }
        }
        $this->saveMany($saveData);
        $this->deleteAll(array(
            'WarehouseOption.id' => $removeData
        ));
    }

}
