<?php
App::uses('AppController', 'Controller');
/**
 * CustomerPromotes Controller
 *
 * @property CustomerPromote $CustomerPromote
 * @property PaginatorComponent $Paginator
 */
class CustomerPromotesController extends AppController {

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
		$this->CustomerPromote->recursive = 0;
		$this->set('customerPromotes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerPromote->exists($id)) {
			throw new NotFoundException(__('Invalid customer promote'));
		}
		$options = array('conditions' => array('CustomerPromote.' . $this->CustomerPromote->primaryKey => $id));
		$this->set('customerPromote', $this->CustomerPromote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerPromote->create();
			if ($this->CustomerPromote->save($this->request->data)) {
				$this->Session->setFlash(__('The customer promote has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer promote could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->CustomerPromote->Customer->find('list');
		$promotes = $this->CustomerPromote->Promote->find('list');
		$stores = $this->CustomerPromote->Store->find('list');
		$this->set(compact('customers', 'promotes', 'stores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomerPromote->exists($id)) {
			throw new NotFoundException(__('Invalid customer promote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerPromote->save($this->request->data)) {
				$this->Session->setFlash(__('The customer promote has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer promote could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerPromote.' . $this->CustomerPromote->primaryKey => $id));
			$this->request->data = $this->CustomerPromote->find('first', $options);
		}
		$customers = $this->CustomerPromote->Customer->find('list');
		$promotes = $this->CustomerPromote->Promote->find('list');
		$stores = $this->CustomerPromote->Store->find('list');
		$this->set(compact('customers', 'promotes', 'stores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomerPromote->id = $id;
		if (!$this->CustomerPromote->exists()) {
			throw new NotFoundException(__('Invalid customer promote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerPromote->delete()) {
			$this->Session->setFlash(__('The customer promote has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer promote could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
