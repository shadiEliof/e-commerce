<?php


display_all_errors();


function display_all_errors() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
require_once "framework/load.php";
require_once "project/main.php";


main();



