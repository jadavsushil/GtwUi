<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<div class="navbar <?php echo $this->fetch('navclass');?>" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $this->fetch('navtitle');?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php echo $this->fetch('nav-left-links'); ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php echo $this->fetch('nav-right-links'); ?>
            </ul>
        </div><!--/.nav-collapse -->
        <input class='active-lnk' type="hidden" value='<?php echo $this->fetch('navbar_active'); ?>'/>
    </div>
</div>

<?php 
    $this->Helpers->load('GtwRequire.GtwRequire');
    echo $this->GtwRequire->req('ui/activenav');
?>