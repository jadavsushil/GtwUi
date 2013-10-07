<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('BoostCakeHtmlHelper', 'BoostCake.View/Helper');
App::uses('GtwRequireHelper', 'GtwRequire.View/Helper');

class GtwHtmlHelper extends BoostCakeHtmlHelper {
    
    public $helpers = array(
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Require' => array('className' => 'GtwRequire.GtwRequireHelper')
    );
    
    public function datatable($tableid){
        $hide = '<style type="text/css">#'.$tableid.'{display:none;}</style>';
        $loading = '<span id="'.$tableid.'-loader">loading</span>';
        $tableId = '<input type="hidden" id="data-table-ref" value="' . $tableid . '"/>';
        $this->Require->req("ui/app/datatables_enable");
        return $hide . $loading . $tableId;
    }
}