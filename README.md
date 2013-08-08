Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds CakePHP with [require.js] [1] and (eventually)[Twitter Bootstrap] [2]

Requirements
------------
CakePHP 2.1

Features
--------
* Loads Controller and Action specific javascript modules using [Require.js] [1] 
* Active element in navbar through Html helper
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
* Global javascript should be placed in /js/common.js
* Application modules should be placed in /js/app/
* Libraries go in /js/libs/
* If the file /js/Controller/action.js exists, it's loaded automatically
* If not, it will look for the file /js/Controller.js
* When none of them are present, common.js is loaded.

Activate navbar elements through the helper
-------------------------------------------
This utility allows you to keep navs in elements without having to use inline javascript.

Your navbar elements should have a syntax similar to this

    <li id="home-lnk"><a href="#">Home</a></li>
    <li id="system-lnk"><a href="#">System</a></li>
    <li id="pricing-lnk"><a href="#">Pricing</a></li>

Then activate them from the view using

    <?php echo $this->Html->activeNav('pricing') ?>


  [1]: http://requirejs.org/            "Requirejs"
  [2]: twitter.github.io/bootstrap/     "Twitter Bootstrap"