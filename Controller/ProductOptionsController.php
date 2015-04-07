<?php
App::uses('AppController', 'Controller');
/**
 * ProductOptions Controller
 *
 * @property ProductOption $ProductOption
 * @property PaginatorComponent $Paginator
 */
class ProductOptionsController extends AppController {

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
		$this->ProductOption->recursive = 0;
		$this->set('productOptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductOption->exists($id)) {
			throw new NotFoundException(__('Invalid product option'));
		}
		$options = array('conditions' => array('ProductOption.' . $this->ProductOption->primaryKey => $id));
		$this->set('productOption', $this->ProductOption->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductOption->create();
			if ($this->ProductOption->save($this->request->data)) {
				$this->Session->setFlash(__('The product option has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product option could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$options = $this->ProductOption->Option->find('list');
		$products = $this->ProductOption->Product->find('list');
		$this->set(compact('options', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductOption->exists($id)) {
			throw new NotFoundException(__('Invalid product option'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductOption->save($this->request->data)) {
				$this->Session->setFlash(__('The product option has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product option could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProductOption.' . $this->ProductOption->primaryKey => $id));
			$this->request->data = $this->ProductOption->find('first', $options);
		}
		$options = $this->ProductOption->Option->find('list');
		$products = $this->ProductOption->Product->find('list');
		$this->set(compact('options', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductOption->id = $id;
		if (!$this->ProductOption->exists()) {
			throw new NotFoundException(__('Invalid product option'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductOption->delete()) {
			$this->Session->setFlash(__('The product option has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The product option could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function load_options($product_id){
        $this->layout = 'ajax';
        $product_options = $this->ProductOption->find('all', array(
                'fields' => 'Option.id, Option.name, Option.option_group_id  ,OptionGroup.id, OptionGroup.name',
                'conditions' => array(
                    'product_id' => $product_id,
                    'Option.parent_id' => '',
                ),
                'joins' => array(
                    array(
                        'table' => 'option_groups',
                        'alias'=> 'OptionGroup',
                        'type' => 'INNER',
                        'conditions' => array(
                            'OptionGroup.id = Option.option_group_id',
                            'OptionGroup.inventory' => 1
                        )
                    )
                ),
                'order' =>  array('OptionGroup.lft')
            )
        );
        $product_options = Set::combine($product_options, '{n}.Option.id', '{n}', '{n}.OptionGroup.name');
        $this->set(compact('product_options'));
    }
}
