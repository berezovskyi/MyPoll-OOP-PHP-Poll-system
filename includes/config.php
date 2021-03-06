<?php

require __DIR__ . '/../vendor/autoload.php';

$db_dsn = 'mysql:host=localhost;dbname=mypoll;charset=utf8';
$db_user = 'root';
$db_pass = 'root';
$db_options = array(
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

RedBeanPHP\Facade::setup($db_dsn, $db_user, $db_pass);

$templatePathDir = 'template/';
