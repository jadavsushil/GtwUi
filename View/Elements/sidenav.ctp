<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>

<div class="list-group">
    <?php echo $this->fetch('sidenav-links'); ?>
</div>

<?php 
    $this->Helpers->load('GtwRequire.GtwRequire');
    echo $this->GtwRequire->req('ui/activenav');
?>