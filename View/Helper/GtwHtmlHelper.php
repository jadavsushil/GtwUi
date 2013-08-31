<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('HtmlHelper', 'View/Helper');
 
class GtwHtmlHelper extends HtmlHelper {
    
    public $helpers = array('Html');
    public $basepath = '/GtwUi/js/';
    public $requirejs = '/GtwUi/js/require';
    
    public $dependencies = array();
    
    /**
     * Includes javascript modules based on controller and action name
     */
    public function js_require(){
    
        $script = '';
        $jsController = $this->basepath . Inflector::camelize($this->params['controller']);
        
        if (is_file($jsController . '/' . $this->params['action'] . '.js')) {
            $file = $this->basepath . Inflector::camelize($this->params['controller']) . '/' . $this->params['action'] . '.js';
            $script = $this->Html->script( 'require', array( 'data-main' => $file ) );
            
        } else if(is_file($jsController . '.js')) {
            $file = $this->basepath . Inflector::camelize($this->params['controller']) . '.js';
            $script = $this->Html->script( 'require', array( 'data-main' => $file ) );
        } else {
            $script = $this->Html->script( $this->requirejs , array( 'data-main' => $this->basepath . 'common.js' ) );
        }
        
        return $script . $this->get_js_dependencies();
        
    }

    /**
     * Can be called anywhere in the viwes to include modules. Modules will only be loaded at the end.
     */
    public function add_js_dependency($dependency){
        $this->dependencies[] = $dependency;
        return;
    }
    private function get_js_dependencies(){
        $script = '';
        foreach($this->dependencies as $dependency){
            $script .= '<script>require([\'' . (string)$dependency . '\']);</script>';
        }
        return $script;
    }
}