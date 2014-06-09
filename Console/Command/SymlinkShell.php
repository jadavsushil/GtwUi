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
        $this->symlinkDir(APP . "Plugin"); 
        $this->symlinkDir(ROOT. "/plugins");
    }

    public function symlinkDir($folder){
        $d = opendir($folder);
        while ($f = readdir($d)) {
            if (substr($f,0,3) != 'Gtw'){
                continue;
            }
            if(file_exists($folder . '/' . $f . '/' . 'webroot')){
                symlink ( $folder . '/' . $f . '/' . 'webroot', WWW_ROOT.$f );
                $this->out($folder . '/' . $f);
            }
        }
        closedir($d);
    }
}
?>
