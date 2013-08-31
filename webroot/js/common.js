/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
*/

requirejs.config({

    baseUrl: '/GtwUi/js/lib',
    
    paths: {
        app: '/GtwUi/js/app',
        bootstrap: '/GtwUi/js/bootstrap',
        jquery: [
            '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
            '/GtwUi/js/lib/jquery-2.0.3.min'
        ]
    },
    
    shim: {
        'bootstrap.min': {
            deps: ['jquery'],
            exports: 'bootstrap.min'
        }
    },
    
    optimize: "none"
    
});

define(function(require) {
    
    // Global javascript
    require("jquery");
    require('bootstrap/bootstrap.min');
    
});