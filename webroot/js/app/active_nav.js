/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    
*/
define(function(require) {

    require(['../common'], function(){
    
        require(['jquery'], function(){
        
            $( document ).ready(function() {
                $( '#' + $('#active-lnk').val() ).addClass('active');
            });
            
        });
        
    });
   
});