<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('BoostCakeHtmlHelper', 'BoostCake.View/Helper');
 
class GtwHtmlHelper extends BoostCakeHtmlHelper {
    
    public $helpers = array('Html' => array(
        'className' => 'BoostCake.BoostCakeHtml'
    ));
    
    public function datatable($tableid){
        $output = $this->css("/GtwUi/css/dataTables.bootstrap.css");
        return $output . '<input type="hidden" id="data-table-ref" value="' . $tableid . '"/>';
    }
}