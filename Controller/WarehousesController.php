<?php
App::uses('AppController', 'Controller');
/**
 * Warehouses Controller
 *
 * @property Warehouse $Warehouse
 * @property PaginatorComponent $Paginator
 */
class WarehousesController extends AppController {

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
		$this->Warehouse->recursive = 0;
		$this->set('warehouses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Warehouse->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse'));
		}
		$options = array('conditions' => array('Warehouse.' . $this->Warehouse->primaryKey => $id));
		$this->set('warehouse', $this->Warehouse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

        if($this->request->isAjax()){
            $this->layout = 'ajax';
        }
		if ($this->request->is('post')) {
            debug($this->request->data);die;
			$this->Warehouse->create();
			if ($this->Warehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$stores = $this->Warehouse->Store->find('list');
		$products = $this->Warehouse->Product->find('list',array(
            'conditions' => array(
                'Product.status <>' => 0
            ),
        ));
        $this->loadModel('Option');
        $product_options = $this->Option->find('all',array('conditions'=>array('inventory'=>1)));
        $product_options = Set::combine($product_options,'{n}.Option.id','{n}','{n}.OptionGroup.name');
        $this->set(compact('stores', 'products','product_options'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Warehouse->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Warehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Warehouse.' . $this->Warehouse->primaryKey => $id));
			$this->request->data = $this->Warehouse->find('first', $options);
		}
		$stores = $this->Warehouse->Store->find('list');
        $products = $this->Warehouse->Product->find('list',array(
            'conditions' => array(
                'Product.status <>' => 0
            ),
        ));
        $this->loadModel('Option');
        $product_options = $this->Option->find('all');
        $product_options = Set::combine($product_options,'{n}.Option.id','{n}','{n}.OptionGroup.name');
		$this->set(compact('stores', 'products','product_options'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Warehouse->id = $id;
		if (!$this->Warehouse->exists()) {
			throw new NotFoundException(__('Invalid warehouse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Warehouse->delete()) {
			$this->Session->setFlash(__('The warehouse has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The warehouse could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
