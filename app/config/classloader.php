<?php
/**
 * This file use spl_authoload_register to load all neccesery class
 * If we use composer autoload, this class loader is not neccessery.
 * else we have to include this file in the index.php
 */


    function modelLoad($className){

        $classPath = realpath(__DIR__."/../model/".$className.".php");
        //Check the file exist
        if(file_exists($classPath)){
            require_once $classPath;
        }

    }
    function controllerLoad($className){

        $classPath = realpath(__DIR__."/../controller/".$className.".php");
        //Check the file exist
        if(file_exists($classPath)){
            require_once $classPath;
        }
    }
    function viewLoad($className){

        $classPath = realpath(__DIR__."/../view/".$className.".php");
        //Check the file exist
        if(file_exists($classPath)){
            require_once $classPath;
        }
    }

spl_autoload_register('modelLoad');
spl_autoload_register('controllerLoad');
spl_autoload_register('viewLoad');

?>