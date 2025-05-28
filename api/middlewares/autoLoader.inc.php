<?php 

    session_start();
    spl_autoload_register('detAutoLoader');
    
    function detAutoLoader($className){
        $path = 'classes/';
        $ext = '.class.php';
        $fullpath = dirname(__DIR__) . '\\classes\\'.$className.$ext;
        $fullpath = str_replace('\\', DIRECTORY_SEPARATOR, $fullpath);
        if (file_exists($fullpath)) {
            include $fullpath;
        }
        
    }