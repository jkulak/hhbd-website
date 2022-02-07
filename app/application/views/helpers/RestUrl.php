<?php  
class Zend_View_Helper_RestUrl extends Zend_View_Helper_Abstract 
{ 
    function restUrl($params) { 
        $result = array();
        foreach($params as $key => $value) {
            $result[] = $key .'='. $value;
        }
        
        $restParams = implode('&', $result);
        $zend = new Zend_View_Helper_Url();
        $service = $zend->url($params, Zend_Controller_Front::getInstance()->getRouter()->getCurrentRouteName()) . '?' .  $restParams . '#content'; 
        return $service; 
    } 
}