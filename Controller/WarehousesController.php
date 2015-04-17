<?php
App::uses('AppController', 'Controller');
/**
 * Warehouses Controller
 *
 * @property Warehouse $Warehouse
 * @property PaginatorComponent $Paginator
 */
class WarehousesController extends AppController
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
        $this->Warehouse->recursive = 1;
        $warehouses = $this->Paginator->paginate();
        $this->loadModel('Option');
        $product_options = $this->Option->find('list',
            array(
                'joins' => array(
                    array(
                        'table' => 'option_groups',
                        'alias' => 'OptionGroup',
                        'type' => 'INNER',
                        'conditions' => array(
                            'OptionGroup.id = Option.option_group_id',
                            'OptionGroup.inventory' => 1
                        )
                    )
                ),
            )
        );
        foreach ($warehouses as $key => $ware) {
            $temp = array();
            foreach ($ware['WarehouseOption'] as $w) {
                $temp[] = $product_options[$w['option_id']];
            }
            $warehouses[$key]['WarehouseOption'] = $temp;
        }

        $this->set('product_options', $product_options);
        $this->set('warehouses', $warehouses);
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
    public function add()
    {

        if ($this->request->isAjax()) {
            $this->layout = 'ajax';
        }
        if ($this->request->is('post')) {
            debug($this->data);die;
            $this->request->data['Warehouse']['price'] = str_replace(',', '', $this->request->data['Warehouse']['price']);
            $this->request->data['Warehouse']['price'] = str_replace(' VNĐ', '', $this->request->data['Warehouse']['price']);
            $this->request->data['Warehouse']['retail_price'] = str_replace(',', '', $this->request->data['Warehouse']['retail_price']);
            $this->request->data['Warehouse']['retail_price'] = str_replace(' VNĐ', '', $this->request->data['Warehouse']['retail_price']);
            $temp = array();
            foreach ($this->request->data['WarehouseOption'] as $ops) {
                foreach ($ops as $op) {
                    array_push($temp, $op);
                }
            }
            $this->request->data['WarehouseOption'] = $temp;
            $this->Warehouse->create();
            if ($this->Warehouse->save($this->request->data)) {

                if (!isset($this->request->data['WarehouseOption'])) {
                    $this->request->data['WarehouseOption'] = array();
                }
                $warehouse_id = $this->Warehouse->id;
                $this->Warehouse->WarehouseOption->updateOptions($this->request->data['WarehouseOption'], $warehouse_id);

                $this->Session->setFlash(__('The warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
            $temp = array();
            foreach ($this->request->data['WarehouseOption'] as $ops) {
                $temp[] = array('option_id' => $ops);
            }
            $this->request->data['WarehouseOption'] = $temp;
        }
        $stores = $this->Warehouse->Store->find('list');
        $products = $this->Warehouse->Product->find('list', array(
            'conditions' => array(
                'Product.status <>' => 0
            ),
        ));
        $this->set(compact('stores', 'products'));
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
        if (!$this->Warehouse->exists($id)) {
            throw new NotFoundException(__('Invalid warehouse'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Warehouse']['price'] = str_replace(',', '', $this->request->data['Warehouse']['price']);
            $this->request->data['Warehouse']['price'] = str_replace(' VNĐ', '', $this->request->data['Warehouse']['price']);
            $this->request->data['Warehouse']['retail_price'] = str_replace(',', '', $this->request->data['Warehouse']['retail_price']);
            $this->request->data['Warehouse']['retail_price'] = str_replace(' VNĐ', '', $this->request->data['Warehouse']['retail_price']);
            $temp = array();
            foreach ($this->request->data['WarehouseOption'] as $ops) {
                foreach ($ops as $op) {
                    array_push($temp, $op);
                }
            }
            $this->request->data['WarehouseOption'] = $temp;
            if ($this->Warehouse->save($this->request->data)) {

                if (!isset($this->request->data['WarehouseOption'])) {
                    $this->request->data['WarehouseOption'] = array();
                }
                $warehouse_id = $this->Warehouse->id;
                $this->Warehouse->WarehouseOption->updateOptions($this->request->data['WarehouseOption'], $warehouse_id);

                $this->Session->setFlash(__('The warehouse has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The warehouse could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
            $temp = array();
            foreach ($this->request->data['WarehouseOption'] as $ops) {
                $temp[] = array('option_id' => $ops);
            }
            $this->request->data['WarehouseOption'] = $temp;
        } else {
            $options = array('conditions' => array('Warehouse.' . $this->Warehouse->primaryKey => $id));
            $this->request->data = $this->Warehouse->find('first', $options);
        }
        $stores = $this->Warehouse->Store->find('list');
        $products = $this->Warehouse->Product->find('list', array(
            'conditions' => array(
                'Product.status <>' => 0
            ),
        ));
        $this->loadModel('Option');
        $product_options = $this->Option->find('all', array('conditions' => array('inventory' => 1)));
        $product_options = Set::combine($product_options, '{n}.Option.id', '{n}', '{n}.OptionGroup.name');
        $this->set(compact('stores', 'products', 'product_options'));
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
