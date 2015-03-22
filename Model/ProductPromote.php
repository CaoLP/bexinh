<?php
App::uses('AppModel', 'Model');
/**
 * ProductPromote Model
 *
 * @property Product $Product
 * @property Promote $Promote
 */
class ProductPromote extends AppModel {

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
		),
		'Promote' => array(
			'className' => 'Promote',
			'foreignKey' => 'promote_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
