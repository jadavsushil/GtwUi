<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 *
 * You probably need to run this as an Admin!
 */

class SymlinkShell extends AppShell {
    public function main() {
        if (!file_exists(WWW_ROOT.'GtwUi')){
            symlink ( CakePlugin::path('GtwUi').'webroot' , WWW_ROOT.'GtwUi');
        }
    }
}
?>