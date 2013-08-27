/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    Copyright: 2013 Gintonic Web. All rights reserved.
    Licence:   Available via Apache 2.0 license
*/

requirejs.config({

    baseUrl: '/GtwUi/js/lib',
    
    paths: {
        app: '/GtwUi/js/app',
        jquery: [
            '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
            '/GtwUi/js/lib/jquery-2.0.3.min'
        ]
    },
    
    optimize: "none"
    
});

define(function(require) {
    
    // Global javascript
    require("jquery");
    
});