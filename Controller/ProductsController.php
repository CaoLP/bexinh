<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $helpers = array('Media');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Product->recursive = 0;
        $this->Paginator->settings = array(
            'contain' => array('Thumb'),
            'conditions'=>array(
                'Product.name <>' => '0'
            )
        );
        $this->set('products', $this->Paginator->paginate());
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
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        $temp = array(
            'Product' => array(
                'sku' => '0',
                'provider_id' => '0',
                'name' => '0',
                'price' => '0',
                'retail_price' => '0',
                'source_price' => '0',
                'excert' => '0',
                'descriptions' => '0',
                'status' => '0',
                'category_id' => '0'
            )
        );
        $data = $this->Product->find('first',array('conditions'=>array('Product.sku'=>'0')));
        if($data){
            $id = $data['Product']['id'];
        }else{
            $this->Product->save($temp);
            $id = $this->Product->id;
        }
        $this->redirect(Router::url(array('action'=>'edit',$id)));
//        if ($this->request->is('post')) {
//            $this->Product->create();
//            debug($this->request->data);die;
//            if ($this->Product->save($this->request->data)) {
//                $this->Session->setFlash(__('The product has been saved.'), 'default', array('class' => 'alert alert-success'));
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
//            }
//        }
//        $providers = $this->Product->Provider->find('list');
//        $categories = $this->Product->Category->find('list');
//        $this->set(compact('providers', 'categories'));
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
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {

            $this->request->data['Product']['price'] = str_replace(',','',$this->request->data['Product']['price']);
            $this->request->data['Product']['price'] = str_replace(' VNĐ','',$this->request->data['Product']['price']);
            $this->request->data['Product']['retail_price'] = str_replace(',','',$this->request->data['Product']['retail_price']);
            $this->request->data['Product']['retail_price'] = str_replace(' VNĐ','',$this->request->data['Product']['retail_price']);
            $this->request->data['Product']['source_price'] = str_replace(',','',$this->request->data['Product']['source_price']);
            $this->request->data['Product']['source_price'] = str_replace(' VNĐ','',$this->request->data['Product']['source_price']);

            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        $providers = $this->Product->Provider->find('list');
        $categories = $this->Product->Category->find('list');
        $product_options= $this->Product->ProductOption->Option->OptionGroup->find('all',array('recursive'=>1));
        $this->set(compact('providers', 'categories','product_options'));
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
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('The product has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The product could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
