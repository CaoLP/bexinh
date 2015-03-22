<?php
App::uses('AppController', 'Controller');
/**
 * AdminMenus Controller
 *
 * @property AdminMenu $AdminMenu
 * @property PaginatorComponent $Paginator
 */
class AdminMenusController extends AppController
{

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
    public function index()
    {
        $adminMenus = $this->AdminMenu->find('all', array('conditions'=>array('AdminMenu.parent_id'=>'')));
        $this->set(compact('adminMenus'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
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
    public function add()
    {
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
        $this->set('parents',$parentAdminMenus);
        $this->set('listUrls', $this->getControllerList());
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
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
        $this->set('parents',$parentAdminMenus);
        $this->set('listUrls', $this->getControllerList());
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
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

    public function getControllerList()
    {

        $controllerClasses = App::objects('controller');
        foreach ($controllerClasses as $controller) {
            if ($controller != 'AppController') {
                // Load the controller
                App::import('Controller', str_replace('Controller', '', $controller));
                // Load its methods / actions
                $actionMethods = get_class_methods($controller);
                foreach ($actionMethods as $key => $method) {

                    if ($method{0} == '_') {
                        unset($actionMethods[$key]);
                    }
                }
                // Load the ApplicationController (if there is one)
                App::import('Controller', 'AppController');
                $parentActions = get_class_methods('AppController');
                $controllers[$controller] = array_diff($actionMethods, $parentActions);
            }
        }
        $temp = array();
        foreach ($controllers as $con => $acts) {
            $con = str_replace('Controller', '', $con);
            $con_name = strtolower(preg_replace('~([a-z])([A-Z])~', '\\1_\\2', $con));
            foreach ($acts as $act) {
                $act_name = strtolower(preg_replace('~([a-z])([A-Z])~', '\\1_\\2', $act));
                $temp[Router::url(array('controller' => $con_name, 'action' => $act_name))] = Router::url(array('controller' => $con_name, 'action' => $act_name));
            }
        }
        return $temp;
    }
}
