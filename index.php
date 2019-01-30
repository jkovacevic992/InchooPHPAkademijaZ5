<?php
define ('BP', __DIR__ . '/');

error_reporting(E_ALL);
ini_set('display_errors',1);


$includePaths = implode(PATH_SEPARATOR, array(
    BP . 'app/model',
    BP . 'app/controller',
));


set_include_path($includePaths);
function class_path($class)
{

    $classPath = strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';

    if(file_exists("app/model/".$classPath) || file_exists("app/controller/".$classPath)){

        include $classPath;
    }

}
spl_autoload_register('class_path');

App::start();