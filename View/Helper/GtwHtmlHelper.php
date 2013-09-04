<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('HtmlHelper', 'View/Helper');
 
class GtwHtmlHelper extends HtmlHelper {
    
    public $helpers = array('Html');
    
    public function js_require(){
    
        $basepath = '/GtwUi/js/';
        $requirejs = '/GtwUi/js/require';
        $jsController = $basepath . Inflector::camelize($this->params['controller']);
        
        if (is_file($jsController . '/' . $this->params['action'] . '.js')) {
            $file = $basepath . Inflector::camelize($this->params['controller']) . '/' . $this->params['action'] . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
        } 
        
        if(is_file($jsController . '.js')) {
            $file = $basepath . Inflector::camelize($this->params['controller']) . '.js';
            return $this->Html->script( 'require', array( 'data-main' => $file ) );
        }

        return $this->Html->script( $requirejs , array( 'data-main' => $basepath . 'common.js' ) );
    }

    public function js_module($dependency){
        return '<script>require([\'' . (string)$dependency . '\']);</script>';
    }
}