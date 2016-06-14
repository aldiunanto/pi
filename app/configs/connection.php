<?php

$dsn	= 'mysql:dbname=studycase;host=127.0.0.1';
$user 	= 'root';
$pass	= null;

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch (PDOException $e){
	echo 'Connection failed: ' . $e->getMessage();
}