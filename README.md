Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds various front-end and javascript libraries with CakePHP. This plugin is used as 
a dependency to [other Gtw plugins](https://github.com/Phillaf?tab=repositories).

Requirements
------------
CakePHP 2.4.0+  
[BoostCake](https://github.com/slywalker/cakephp-plugin-boost_cake)   
[GtwRequire](https://github.com/Phillaf/GtwRequire)

Features
--------
* Javascript modules loaded asynchroneously using [Require.js] (http://requirejs.org/).
* Consistent layout built on [Bootstrap 3] (http://getbootstrap.com/).
* [DataTables] (http://datatables.net) for easily searchable and paginated tables.

Installation
-------------

Make sure you have [BoostCake](https://github.com/slywalker/cakephp-plugin-boost_cake) and 
[GtwRequire](https://github.com/Phillaf/GtwRequire) correctly configured.

Load the plugin using bootstrap.php

    CakePlugin::load('GtwUi');
    
Create a symlink from plugin's webroot to the application webroot

    # On windows
    mklink /J app\webroot\GtwUi app\Plugin\GtwUi\webroot
    
    # On linux
    ln -s app/Plugin/GtwUi/webroot app/webroot/GtwUi
    
Add the following config to your requirejs config file

    requirejs.config({
        paths: {
            ui:     '/GtwUi/js',
            jquery: '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
            jqueryDataTables: '//ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min'
        }
    });
    
Notes
-------

This plugin is still under development and should probably not be used yet :)