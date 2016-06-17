<?php require_once('../system/connection.php') ?>

<h4 class="caption">Contact List</h4>
<span class="info" data-crudizy-message="added">Successfully added!</span>
<span class="info" data-crudizy-message="updated">Successfully updated!</span>
<span class="info" data-crudizy-message="deleted">Successfully deleted!</span>

<a href="#/contact/add" class="btn btn-add">&plus; Add Contact</a>
<table class="data-list">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php

			$x = 1;
			$get = $conn->query('SELECT * FROM contact');
			foreach($get->fetchAll() as $row) :

		?>

		<tr>
			<td><?php echo $x ?></td>
			<td><?php echo $row['cont_name'] ?></td>
			<td><?php echo $row['cont_email'] ?></td>
			<td><?php echo $row['cont_phone'] ?></td>
			<td>
				<a href="#/contact/edit" data-crudizy-params="id:<?php echo $row['cont_id'] ?>">Edit</a> | 
				<a href="#/contact/delete" data-crudizy-params="id:<?php echo $row['cont_id'] ?>,secondparam:aldi">Delete</a>
			</td>
		</tr>

		<?php $x++; endforeach; ?>
	</tbody>
</table>