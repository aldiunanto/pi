<?php

session_start();
require_once('connection.php');

$param = explode('.', $_GET['c']);
require_once('../app/controllers/' . $param[0] . '.php');

$classPath	= 'app\controllers\\' . $param[0];
$controller = new $classPath();

print $controller->{$param[1]}();