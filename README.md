Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds various front-end and javascript libraries with CakePHP. Most features are
accessible through the HTML helper. This plugin is intended to be used as the core plugin of
a website and extended with [various other plugins](https://github.com/Phillaf?tab=repositories).

Requirements
------------
CakePHP 2.4.0+

Features
--------
* Javascript modules loaded asynchroneously using [Require.js] (http://requirejs.org/).
* Consistent layout built on [Bootstrap 3] (http://getbootstrap.com/).
* Icons from [FontAwesome] (http://fortawesome.github.io/Font-Awesome/).
* [DataTables] (http://datatables.net) for easily searchable and paginated tables.

Installation
-------------

Load the plugin using bootstrap.php

    CakePlugin::load('GtwUi'); 
    
Alias the HTML helper in your AppController.php

    public $helpers = array(
        'Html' => array(
            'className' => 'GtwUi.GtwHTML'
        )
    );
    
Create a symlink from plugin's webroot to the application webroot

    # On windows
    mklink /J app\webroot\GtwUi app\Plugin\GtwUi\webroot
    
    # On linux
    ln -s app/Plugin/GtwUi/webroot app/webroot/GtwUi
    
    
Notes
-------

This plugin is still under development and should not be considered stable.