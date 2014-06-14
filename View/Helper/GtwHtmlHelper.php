<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

App::uses('BoostCakeHtmlHelper', 'BoostCake.View/Helper');
App::uses('GtwRequireHelper', 'GtwRequire.View/Helper');

class GtwHtmlHelper extends BoostCakeHtmlHelper {

    public $helpers = array('Session', 'Html', 'Text', 'Form');
    
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
    
    public function textify($text, $limit=null){
        
        if (isset($limit)){
            $text = $this->Text->truncate( $text, $limit, array(
                'ellipsis' => '...',
                'exact' => false,
                'html' => true
            ) );
        }
        $text = $this->Text->autoLink( $text );
        return $this->Text->autoParagraph( $text );
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

    public function actionDateTimeCal(){
        return '<div class="input-group date form_datetime col-md-7" data-date="'.date("Y-m-d").'" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input class="form-control" size="16" type="text" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input1" value="" /><br/>';
    }
}