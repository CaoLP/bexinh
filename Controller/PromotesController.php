<?php
App::uses('AppController', 'Controller');
/**
 * Promotes Controller
 *
 * @property Promote $Promote
 * @property PaginatorComponent $Paginator
 */
class PromotesController extends AppController {

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
		$this->Promote->recursive = 0;
		$this->set('promotes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Promote->exists($id)) {
			throw new NotFoundException(__('Invalid promote'));
		}
		$options = array('conditions' => array('Promote.' . $this->Promote->primaryKey => $id));
		$this->set('promote', $this->Promote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promote->create();
			if ($this->Promote->save($this->request->data)) {
				$this->Session->setFlash(__('The promote has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promote could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$stores = $this->Promote->Store->find('list');
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
		if (!$this->Promote->exists($id)) {
			throw new NotFoundException(__('Invalid promote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promote->save($this->request->data)) {
				$this->Session->setFlash(__('The promote has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promote could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Promote.' . $this->Promote->primaryKey => $id));
			$this->request->data = $this->Promote->find('first', $options);
		}
		$stores = $this->Promote->Store->find('list');
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
		$this->Promote->id = $id;
		if (!$this->Promote->exists()) {
			throw new NotFoundException(__('Invalid promote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Promote->delete()) {
			$this->Session->setFlash(__('The promote has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The promote could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
