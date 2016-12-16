<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register User </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table align="center" border="6" style="margin-top: 50px;">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Birthdate</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $value): ?>
			<tr>
				<th><?php echo  $value['user_fname']; ?></th>
				<th><?= $value['user_lname'];?></th>
				<th><?= $value['user_email'];?></th>
				<th><?= $value['mobile'];?></th>
				<th><?= $value['birthdate'];?></th>
				<th><a href="./update/<?= $value['user_id'] ?>">Edit</a></th>
				<th><a href="./view/<?= $value['user_id']; ?>">Delete</a></th>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</body>
</html>