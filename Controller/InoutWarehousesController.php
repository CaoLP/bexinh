<?php
App::uses('AppController', 'Controller');
/**
 * InoutWarehouses Controller
 *
 * @property InoutWarehouse $InoutWarehouse
 * @property PaginatorComponent $Paginator
 */
class InoutWarehousesController extends AppController {

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
		$this->InoutWarehouse->recursive = 0;
		$this->set('inoutWarehouses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InoutWarehouse->exists($id)) {
			throw new NotFoundException(__('Invalid inout warehouse'));
		}
		$options = array('conditions' => array('InoutWarehouse.' . $this->InoutWarehouse->primaryKey => $id));
		$this->set('inoutWarehouse', $this->InoutWarehouse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InoutWarehouse->create();
			if ($this->InoutWarehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The inout warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inout warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$stores = $this->InoutWarehouse->Store->find('list');
		$this->set(compact('stores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InoutWarehouse->exists($id)) {
			throw new NotFoundException(__('Invalid inout warehouse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InoutWarehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The inout warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inout warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('InoutWarehouse.' . $this->InoutWarehouse->primaryKey => $id));
			$this->request->data = $this->InoutWarehouse->find('first', $options);
		}
		$stores = $this->InoutWarehouse->Store->find('list');
		$this->set(compact('stores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InoutWarehouse->id = $id;
		if (!$this->InoutWarehouse->exists()) {
			throw new NotFoundException(__('Invalid inout warehouse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InoutWarehouse->delete()) {
			$this->Session->setFlash(__('The inout warehouse has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The inout warehouse could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
