<?php

require_once('../configs/connection.php');

$query = $pdo->prepare("
	UPDATE contact SET
		cont_name	= :cont_name,
		cont_email	= :cont_email,
		cont_phone	= :cont_phone
	WHERE cont_id	= :cont_id
");

$query->bindParam(':cont_id', $_POST['cont_id']);
$query->bindParam(':cont_name', $_POST['cont_name']);
$query->bindParam(':cont_email', $_POST['cont_email']);
$query->bindParam(':cont_phone', $_POST['cont_phone']);
$query->execute();

echo json_encode(['data-crudizy-feed' => [
	'redirect'	=> 'contact',
	'message'	=> 'updated'
]]);