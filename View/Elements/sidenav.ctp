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
<input class='active-lnk' type="hidden" value='<?php echo $this->fetch('sidenav_active'); ?>'/>

<?php 
    $this->Helpers->load('GtwRequire.GtwRequire');
    echo $this->GtwRequire->req('ui/activenav');
?>