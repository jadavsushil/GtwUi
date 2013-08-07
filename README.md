Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds CakePHP with [require.js] [1] and (eventually)[Twitter Bootstrap] [2]


Description
* Loads Controller and Action specific javascript modules using [Require.js] [1] 
* The other features are yet to come

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
    
You should either copy this plugin's webroot content to your own applications webroot or create symbolic links

Javascript with require.js
---------------------------
Global javascript should be placed in /js/common.js

Application modules should be placed in /js/app/

Libraries go in /js/libs/


If the file /js/Controller/action.js exists, it's loaded automatically

If not, it will look for the file /js/Controller.js

When none of them are present, common.js is loaded.


  [1]: http://requirejs.org/        "Requirejs"
  [2]: twitter.github.io/bootstrap/        "Twitter Bootstrap"