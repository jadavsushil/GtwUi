/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    Copyright: 2013 Gintonic Web. All rights reserved.
    Licence:   Available via Apache 2.0 license
    
    Usage : navbar
    --------------
    Every element should have an id in this form:
        <li id="home-lnk"><a href="#">Home</a></li>
        <li id="system-lnk"><a href="#">System</a></li>
        <li id="pricing-lnk"><a href="#">Pricing</a></li>
*/
define(function(require) {

    $('#' + $('#active-nav').val() + '-lnk').addClass('active');
   
});