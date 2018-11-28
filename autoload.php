<?php

spl_autoload_register(
 
    function($class_name) {
    $path = $class_name.'.php';
    if(file_exists($path)){
        require $path;
    }
});