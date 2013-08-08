<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 * @copyright 2013 Gintonic Web. All rights reserved.
 * @licence   Available via Apache 2.0 license
 */

App::uses('HtmlHelper', 'View/Helper');
 
class GtwHtmlHelper extends HtmlHelper {
    
    public $helpers = array('Html');

/**
 * Call this function in your layout to include javascript modules based on controller and action name
 */
    public function javascript(){
    
        $jsController = JS . Inflector::camelize($this->params['controller']);
        
        if (is_file($jsController . DS . $this->params['action'] . '.js')) {
            
            $file = '/js/' . Inflector::camelize($this->params['controller']) . '/' . $this->params['action'] . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
            
        } else if(is_file($jsController . '.js')) {
            
            $file = '/js/' . Inflector::camelize($this->params['controller']) . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
            
        }
        
        return $this->Html->script( 'require', array( 'data-main' => '/js/common.js' ) );
    }
    
    public function activeNav($active){
        return $this->_View->element('GtwUi.active_nav', array('active' => $active));
    }
}