<?php

global $config;
$database_driver = $config['database']['driver'];
if ($database_driver == 'pdo') {
    require_once "framework/database/PdoDatabase.php";
} elseif ($database_driver == 'mysqli') {
    require_once "framework/database/MysqliDatabase.php";
}


