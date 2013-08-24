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
    public $basepath = '/GtwUi/js/';
    public $requirejs = '/GtwUi/js/require';
    
/**
 * Call this function in your layout to include javascript modules based on controller and action name
 * Folder structure should mimic Pages structure. action.js overrides Controller.js, and Controller.js
 * overrides common.js
 *
 * webroot/GtwUi/js/ControllerName/action_name.js is used if the file exists
 * webroot/GtwUi/js/ControllerName.js is no action is defined
 * webroot/GtwUi/js/common.js is called if nothing else exists
 */
    public function javascript(){
    
        $jsController = $this->basepath . Inflector::camelize($this->params['controller']);
        
        if (is_file($jsController . '/' . $this->params['action'] . '.js')) {
            $file = $this->basepath . Inflector::camelize($this->params['controller']) . '/' . $this->params['action'] . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
            
        } else if(is_file($jsController . '.js')) {
            $file = $this->basepath . Inflector::camelize($this->params['controller']) . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
        }

        return $this->Html->script( $this->requirejs , array( 'data-main' => $this->basepath . 'common.js' ) );
    }
    
    public function activeNav($active){
        return $this->_View->element('GtwUi.active_nav', array('active' => $active));
    }
}