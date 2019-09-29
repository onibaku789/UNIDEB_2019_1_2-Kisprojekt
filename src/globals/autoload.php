<?php
class Autoload {
    public function loadClasses() {
        include_once "package.php";
        spl_autoload_register(function() {
            foreach(Package::$classes as $path) {
                require_once($path);
            }
        });
    }
}