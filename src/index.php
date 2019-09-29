<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once "globals/autoload.php";
(new Autoload)->loadClasses();
(new Launcher)->launch();