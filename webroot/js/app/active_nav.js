/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    
    Usage
    --------------
    Every element should have an id in this form:
        <li id="home-lnk"><a href="#">Home</a></li>
        <li id="system-lnk"><a href="#">System</a></li>
        <li id="pricing-lnk"><a href="#">Pricing</a></li>
*/
define(function(require) {

    require('../common');
    require('jquery');
    
    $( document ).ready(function() {
        $( '#' + $('#active-lnk').val() ).addClass('active');
    });
   
});