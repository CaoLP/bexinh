<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/23/15
 * Time: 9:20 AM
 */
App::uses('Component', 'Controller');
class MenuComponent extends Component {
    public function initialize(Controller $controller) {
        $controller->loadModel('AdminMenu');
        $controller->set('menu', $controller->AdminMenu->find('all',array('conditions'=>array('AdminMenu.parent_id'=>''))));
    }
}