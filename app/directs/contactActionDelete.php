<?php

session_start();
require_once('../../system/connection.php');

$query = $conn->prepare("
	DELETE FROM contact WHERE cont_id = :cont_id
");

$query->bindParam(':cont_id', $_SESSION['params']['id']);
$query->execute();

echo json_encode(['data-crudizy-feed' => [
	'redirect'	=> 'contact',
	'message'	=> 'deleted'
]]);