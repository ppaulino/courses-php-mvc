<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Assignment: Courses</h1>
		<h2>Add a New Course</h2>
		<form action="/courses/create" method="post">
			<label>Name:</label><input type="text" name="course_name" class="form-control input-md"><br>
			<label>Description:</label><textarea name="description" class="form-control"></textarea><br>
			<input class="btn btn-default" type="submit" value="Add Course">
		</form>

		<h2>Courses</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Course Name</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($courses as $course) { ?>
					<tr>
						<td><?= $course['name']; ?></td>
						<td><?= $course['description']; ?></td>
						<td><?= $course['created_at']; ?></td>
						<td><a href='courses/destroy/<?= $course['id']; ?>'>Remove</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
    </div>
</body>
</html>