<?php

session_start();
global $config;
/*config*/
require_once "project/config/config.php";
require_once "project/config/database.php";
require_once "project/config/route.php";


require_once "framework/common.php";
require_once "framework/str.php";
require_once "framework/api.php";
require_once "framework/route.php";
require_once "framework/view.php";
require_once "framework/singleton.php";

/*database*/
require_once "framework/database/databaseHandler.php";

/*locale*/
require_once( 'project/locale/' . $config['lang'] . '.php');

/*helpers and libs*/
require_once "framework/helpers/session-helper.php";
require_once "framework/libs/calendar-converter.php";





date_default_timezone_set($config['timezone']);

spl_autoload_register(function ($classname) {
    global $config;
    if (str::has($classname, $config['model_prefix'])) {
        $filename = str_replace($config['model_prefix'], '', $classname);
        $fullpath = "project/mvc/model/$filename.php";
        if (!file_exists($fullpath)) {
           err404();
        }
        require_once $fullpath;
    }


    if (str::has($classname, $config['controller_prefix'])) {
        global $config;
        $filename = str_replace($config['controller_prefix'], '', $classname);
        $fullpath = "project/mvc/controller/$filename.php";
        if (!file_exists($fullpath)) {
            err404();
        }
        require_once $fullpath;
    }

});
