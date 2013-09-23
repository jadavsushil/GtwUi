/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    
*/
require(['jquery'], function(){
    $( document ).ready(function() {
        $( '#' + $('#active-lnk').val() ).addClass('active');
    });
});