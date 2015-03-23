<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = array(
        'Session',
        'Menu',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'dashboard',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'scope' => array('User.status' => 1)
                ),
            )
        ),
        'DebugKit.Toolbar'
    );

    public function beforeRender()
    {
        $this->set('statuses', array(
            1 => __('Active'),
            0 => __('Disable')
        ));
        //sample
    }
}
