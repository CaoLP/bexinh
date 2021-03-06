<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {
    public function format_money($price, $promote = 0){
        $price = $price - ($price * ($promote/100));
        return number_format($price, 0, '.', ',').' đ';
    }
    public function format_detail_money($price, $promote = 0){
        $price = $price - ($price * ($promote/100));
        return number_format($price, 0, '.', ',').' đ';
    }
    public function format_cart_money($price, $promote = 0){
        $price = $price - ($price * ($promote/100));
        return number_format($price, 0, '.', ',').' đ';
    }
}
