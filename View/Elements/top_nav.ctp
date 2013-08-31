<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    
        <div class="navbar-header">
        
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
            
        </div>
        
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php echo $this->fetch('links'); ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
    <input id='active-lnk' type="hidden" value='<?php echo $this->fetch('active_nav'); ?>'/>
</div>

