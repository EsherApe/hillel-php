<?php

function __autoload($class)
{
    $class = explode("\\", $class);
    $file = strtolower($class[0]).DIRECTORY_SEPARATOR.$class[1].'.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Can't find file: ".$file);
    }
}

spl_autoload_register('__autoload');