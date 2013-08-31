<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <?php echo $this->fetch('nav-left-links'); ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php echo $this->fetch('nav-right-links'); ?>
        </ul>
    </div><!--/.nav-collapse -->
    <input id='active-lnk' type="hidden" value='<?php echo $this->fetch('active_nav'); ?>'/>
</div>

<?php echo $this->Html->css('/GtwUi/css/navbar-default'); ?>