/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    Copyright: 2013 Gintonic Web. All rights reserved.
    Licence:   Available via Apache 2.0 license
*/

requirejs.config({

    baseUrl: '/js/lib',
    
    paths: {
        app: '/js/app',
        jquery: [
            '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
            '/js/lib/jquery-2.0.3.min'
        ]
    },
    
    optimize: "none"
    
});

define(function(require) {
    // Global javascript
    require("jquery");
});