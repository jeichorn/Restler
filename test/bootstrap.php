<?php
function trace () {} // effectively switches DebugFormat off

// add include path to test classes and include restler.php for auto loader
set_include_path(get_include_path().PATH_SEPARATOR.__DIR__);
include dirname(__DIR__).'/vendor/restler.php';
Luracast\Restler\AutoLoader::addPath(__DIR__.'/vendor');
