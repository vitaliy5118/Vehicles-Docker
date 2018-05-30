<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function __autoload($class_name)
{
    $class_name = explode('\\', $class_name);
    $class_name = implode('/', $class_name);

    require $class_name.'.php';
}

?>