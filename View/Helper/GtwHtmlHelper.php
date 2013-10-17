<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('BoostCakeHtmlHelper', 'BoostCake.View/Helper');
App::uses('GtwRequireHelper', 'GtwRequire.View/Helper');

class GtwHtmlHelper extends BoostCakeHtmlHelper {

    public $helpers = array('Session', 'Html');
    
    private function __getAction($action, $params = array()){
        return array_merge(
            array(
                'plugin' => $this->params['plugin'],
                'controller' => $this->params['controller'], 
                'action' => $action,
            ),
            (array)$params
        );
    }
    
    public function actionIcon($icon, $action, $params = array()){
        return $this->Html->link(
            '<i class="'.$icon.'"> </i>',
            $this->__getAction($action, $params),
            array('escape' => FALSE)
        );
    }

    public function actionLink($text, $action, $params = array()){
        return $this->Html->link(
            $text,
            $this->__getAction($action, $params),
            array('escape' => FALSE)
        );
    }
    
    public function actionBtn($text, $action, $params = array(), $class = 'btn-default' ){
        return $this->Html->link(
            $text,
            $this->__getAction($action, $params),
            array(
                'escape' => FALSE,
                'class' => 'btn ' . $class
            )
        );
    }
    
    public function actionBtnIcon($text, $icon, $action, $params = array(), $class = 'btn-default' ){
        return $this->Html->link(
            $text . ' <i class="'.$icon.'"> </i>',
            $this->__getAction($action, $params),
            array(
                'escape' => FALSE,
                'class' => 'btn ' . $class
            )
        );
    }
    
    public function actionIconBtn($icon, $text, $action, $params = array(), $class = 'btn-default' ){
        return $this->Html->link(
            '<i class="'.$icon.'"> </i>' . $text,
            $this->__getAction($action, $params),
            array(
                'escape' => FALSE,
                'class' => 'btn ' . $class
            )
        );
    }

}