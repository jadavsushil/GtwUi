/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    
*/
require(['jquery'], function(){
    $( document ).ready(function() {
        
        $('.row-aligned').each(function(){
            boxes = $(this).find('.box-height');
            maxHeight = Math.max.apply(
            Math, boxes.map(function() {
                return $(this).height();
            }).get());
            boxes.height(maxHeight);
        });
        
    });
});