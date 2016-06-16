<?php

session_start();
require_once('../configs/connection.php');

$query = $pdo->prepare("
	DELETE FROM contact WHERE cont_id = :cont_id
");

$query->bindParam(':cont_id', $_SESSION['params']['id']);
$query->execute();

echo json_encode(['data-crudizy-feed' => [
	'redirect'	=> 'contact',
	'message'	=> 'deleted'
]]);