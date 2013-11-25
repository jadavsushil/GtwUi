# Ui plugin for CakePHP

Plugin that binds various front-end and javascript libraries with CakePHP. This plugin is used as 
a dependency to [other Gintonic Web plugins](https://github.com/Phillaf?tab=repositories).

## Requirements

CakePHP 2.4.0+  
[BoostCake](https://github.com/slywalker/cakephp-plugin-boost_cake)   
[GtwRequire](https://github.com/Phillaf/GtwRequire)

## Features

* Javascript modules loaded asynchroneously using [Require.js] (http://requirejs.org/).
* Consistent layout built on [Bootstrap 3] (http://getbootstrap.com/).
* [DataTables] (http://datatables.net) for easily searchable and paginated tables.

## Installation

Copy this plugin in a folder named `app/Plugin/GtwUi` or add these lines to your `composer.json` file :

        "require": {
            "phillaf/gtw_ui": "*@dev"
        }

Load the plugin by adding this line to app/Config/bootstrap.php

    CakePlugin::load('GtwUi');
    
Alias the HTML helper in your AppController.php

    public $helpers = array(
        'Html' => array('className' => 'GtwUi.GtwHtml'),
    );
    
Create a symlink from this plugin's webroot to the application webroot by running `Console/cake GtwUi.symlink`
    
Add the following config to your requirejs config file

    requirejs.config({
        paths: {
            ui:     '/GtwUi/js',
            jquery: '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
            jqueryDataTables: '//ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min'
        }
    });
    
## Copyright and license
Author: Philippe Lafrance    
Copyright 2013 [Gintonic Web](http://gintonicweb.com)    
Licensed under the [Apache 2.0 license](http://www.apache.org/licenses/LICENSE-2.0.html)