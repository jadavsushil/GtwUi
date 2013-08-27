Gintonic Web's CakePHP Ui plugin
======================

Plugin that binds CakePHP with [require.js] [1] and (eventually)[Twitter Bootstrap] [2]

Requirements
------------
CakePHP 2.1+

Features
--------
* Loads Controller and action-specific javascript modules using [Require.js] [1] 
* Add javascript dependencies through the Html Helper 
* Activate element in navbar through Html helper
* ( More features are yet to come )

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
    mklink /J app/webroot/GtwUi app/Plugin/GtwUi/webroot
    # On linux
    ln -s app/Plugin/GtwUi/webroot app/webroot/GtwUi

Javascript with require.js
---------------------------
* Global javascript should be placed in /js/common.js
* Application modules should be placed in /js/app/
* Libraries go in /js/libs/
* If the file /js/Controller/action.js exists, it's loaded automatically
* If not, it will look for the file /js/Controller.js
* When none of them are present, common.js is loaded.

Add your module dependencies using the Html helper like this

    <?php $this->Html->add_js_dependency('lib/application'); ?>
    
At the end of your layout, load requirejs like this

    <?php echo $this->Html->js_require(); ?>
    
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