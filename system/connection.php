<?php

$config = require_once('../app/configs/connection.php');
$dsn	= 'mysql:dbname=' . $config['database'] . ';host=' . $config['host'];

try{
	$pdo = new PDO($dsn, $config['user'], $config['password']);
}catch (PDOException $e){
	echo 'Connection failed: ' . $e->getMessage();
}