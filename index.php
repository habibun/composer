<?php

require "vendor/autoload.php";

// file based autoloading
echo lego();

//Classmap Based Autoloading
$cm = new Cmautoload;
echo $cm->classmap();