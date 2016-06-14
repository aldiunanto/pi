<?php

require_once('../configs/connection.php');

$query = $pdo->prepare("INSERT INTO contact(cont_name, cont_email, cont_phone) VALUES(?, ?, ?)");
$query->execute([$_POST['cont_name'], $_POST['cont_email'], $_POST['cont_phone']]);

echo json_encode(['data-pjax-feed' => [
	'redirect'	=> 'contact',
	'message'	=> 'added'
]]);