<?php
	
	session_start();
	require_once('../app/configs/connection.php');

	$statement = $pdo->prepare('SELECT * FROM contact WHERE cont_id = ' . $_SESSION['params']['id']);
	$statement->execute();
	
	$row = $statement->fetch();

?>
<h4 class="caption">Edit Contact</h4>
<a href="#/contact" class="btn btn-add">&laquo; Back to the list</a>

<form action="contactActionUpdate.php" method="post" data-pjax-form="enable">
<input type="hidden" name="cont_id" value="<?php echo $row['cont_id'] ?>" />
	<table>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input type="text" name="cont_name" value="<?php echo $row['cont_name'] ?>" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="cont_email" value="<?php echo $row['cont_email'] ?>" /></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>:</td>
			<td><input type="text" name="cont_phone" value="<?php echo $row['cont_phone'] ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="Submit" value="Save Changes" class="btn" /></td>
		</tr>
	</table>
</form>