<?php namespace app\controllers;

class contacts {

	private $db;

	public function __construct($conn){
		$this->db = $conn;
	}
	public function store(){
		$query = $this->db->prepare("INSERT INTO contact(cont_name, cont_email, cont_phone) VALUES(?, ?, ?)");
		$query->execute([$_POST['cont_name'], $_POST['cont_email'], $_POST['cont_phone']]);

		return json_encode(['data-crudizy-feed' => [
			'redirect'	=> 'contact',
			'message'	=> 'added'
		]]);
	}
	public function save(){
		$query = $this->db->prepare("
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

		return json_encode(['data-crudizy-feed' => [
			'redirect'	=> 'contact',
			'message'	=> 'updated'
		]]);
	}
	public function destroy(){
		$query = $this->db->prepare("
			DELETE FROM contact WHERE cont_id = :cont_id
		");

		$query->bindParam(':cont_id', $_SESSION['params']['id']);
		$query->execute();

		echo json_encode(['data-crudizy-feed' => [
			'redirect'	=> 'contact',
			'message'	=> 'deleted'
		]]);
	}

}