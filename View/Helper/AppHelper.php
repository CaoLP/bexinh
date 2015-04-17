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
    public function format_money($price){
        if(empty($price)){
            return 0;
        }
        return number_format($price, 0, '.', ',');
    }
    public function genOptions($options, $pos = 0, &$res = array() ,&$index = 0){
        $result = '';
        if($pos < count($options)){
            foreach($options[array_keys($options)[$pos]] as $optionGrCur){
                if($pos == 0){
                    $res[$index]['name'] = array($optionGrCur['Option']['name']);
                    $res[$index]['option'] = array($optionGrCur['Option']['id']);
                }else{
                    array_push($res[$index]['name'],$optionGrCur['Option']['name']);
                    array_push($res[$index]['option'],$optionGrCur['Option']['id']);
                    $index++;
                }
                $this->genOptions($options, $pos + 1 , $res , $index);
            }
        }
        return $res;
    }
}
