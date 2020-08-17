<?php

require __DIR__ . '/vendor/autoload.php';

// file based autoloading
echo lego();

//Classmap Based Autoloading
$cm = new Cmautoload;
echo $cm->classmap();

//PSR-0 Based Autoloading
$vb = new Vegibit\Library\Greeting();
echo $vb->hi();

//PSR-4 Based Autoloading
$vb = new App\Library\Greeting();
echo $vb->hi();
