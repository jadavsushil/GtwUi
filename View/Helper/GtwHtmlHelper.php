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
    
    public function actionIcon($icon, $action, $params = array()){
        return $this->Html->link(
            '<i class="'.$icon.'"> </i>',
            array_merge(
                array(
                    'plugin' => $this->params['plugin'],
                    'controller' => $this->params['controller'], 
                    'action' => $action,
                ),
                (array)$params
            ),
            array('escape' => FALSE)
        );
    }

    public function actionLink($text, $action, $params = array()){
        return $this->Html->link(
            $text,
            array_merge(
                array(
                    'plugin' => $this->params['plugin'],
                    'controller' => $this->params['controller'], 
                    'action' => $action,
                ),
                (array)$params
            ),
            array('escape' => FALSE)
        );
    }
    
    public function actionBtn($text, $action, $params = array(), $class = 'btn-default' ){
        return $this->Html->link(
            $text,
            array_merge(
                array(
                    'plugin' => $this->params['plugin'],
                    'controller' => $this->params['controller'], 
                    'action' => $action,
                ),
                (array)$params
            ),
            array(
                'escape' => FALSE,
                'class' => 'btn ' . $class
            )
        );
    }
}