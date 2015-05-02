<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
//        $ps = $this->Category->find('all');
//        foreach($ps as $p){
//            $t = $p;
//            $t['Category']['slug'] = $this->make_slug($t['Category']['name']);
//            $this->Category->save($t);
//        }
		$this->Category->recursive = 0;
        $this->Paginator->settings = array(
            'contain' => array('Thumb'),
            'conditions'=>array(
                'Category.name <>' => '0'
            )
        );
		$this->set('categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        $temp = array(
            'Category' => array(
                'name' => '0',
                'descriptions' => '0',
                'excerpt' => '0',
                'status' => '0'
            )
        );
        $data = $this->Category->find('first',array('conditions'=>array('Category.name'=>'0')));
        if($data){
            $id = $data['Category']['id'];
        }else{
            $this->Category->save($temp);
            $id = $this->Category->id;
        }
        $this->redirect(Router::url(array('action'=>'edit',$id)));
//		if ($this->request->is('post')) {
//			$this->Category->create();
//			if ($this->Category->save($this->request->data)) {
//				$this->Session->setFlash(__('The category has been saved.'), 'default', array('class' => 'alert alert-success'));
//				return $this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
//			}
//		}
//		$parentCategories = $this->Category->ParentCategory->find('list');
//		$this->set(compact('parentCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
            if(empty($this->request->data['Category']['slug']))
                $this->request->data['Category']['slug'] = $this->make_slug($this->request->data['Category']['name'] );
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
		$parents = $this->Category->ParentCategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
