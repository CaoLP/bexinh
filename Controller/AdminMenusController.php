<?php
App::uses('AppController', 'Controller');
/**
 * AdminMenus Controller
 *
 * @property AdminMenu $AdminMenu
 * @property PaginatorComponent $Paginator
 */
class AdminMenusController extends AppController {

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
		$this->AdminMenu->recursive = 0;
		$this->set('adminMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdminMenu->exists($id)) {
			throw new NotFoundException(__('Invalid admin menu'));
		}
		$options = array('conditions' => array('AdminMenu.' . $this->AdminMenu->primaryKey => $id));
		$this->set('adminMenu', $this->AdminMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdminMenu->create();
			if ($this->AdminMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The admin menu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$parentAdminMenus = $this->AdminMenu->ParentAdminMenu->find('list');
		$this->set(compact('parentAdminMenus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdminMenu->exists($id)) {
			throw new NotFoundException(__('Invalid admin menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdminMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The admin menu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('AdminMenu.' . $this->AdminMenu->primaryKey => $id));
			$this->request->data = $this->AdminMenu->find('first', $options);
		}
		$parentAdminMenus = $this->AdminMenu->ParentAdminMenu->find('list');
		$this->set(compact('parentAdminMenus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdminMenu->id = $id;
		if (!$this->AdminMenu->exists()) {
			throw new NotFoundException(__('Invalid admin menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdminMenu->delete()) {
			$this->Session->setFlash(__('The admin menu has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The admin menu could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
