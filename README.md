Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds CakePHP with [require.js] [1] and (eventually)[Twitter Bootstrap] [2]

Requirements
------------
CakePHP 2.1+

Features
--------
* [Loads javascript modules the Html Helper](https://github.com/Phillaf/GtwUi/wiki/Javascript-includes-using-require.js) using [Require.js] [1] 
* [Bootstrap Navbar support](https://github.com/Phillaf/GtwUi/wiki/Bootstrap-Navbars)

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
   
  [1]: http://requirejs.org/            "Requirejs"
  [2]: twitter.github.io/bootstrap/     "Twitter Bootstrap"