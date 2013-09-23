Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds various front-end and javascript libraries with CakePHP. This plugin is intended 
to be used as the core ui plugin of a website and extended with 
[various other plugins](https://github.com/Phillaf?tab=repositories).

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

Load the plugin using bootstrap.php

    CakePlugin::load('GtwUi');
    
Alias the HTML helper in your AppController.php

    public $helpers = array(
        'Html' => array('className' => 'GtwUi.GtwHTML'),
        'Form' => array('className' => 'GtwUi.GtwForm')
    );
    
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