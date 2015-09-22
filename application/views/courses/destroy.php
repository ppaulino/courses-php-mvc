<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete Course</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Assignment: Courses</h1>
		<h2>Are you sure you want to delete the following course?</h2>
		<p>Name: <?= $name; ?></p>
		<p>Description: <?= $description; ?></p>
		<form action="/" method="post">
			<input class="btn btn-success" type="submit" value="No">
		</form>
		<form action="/courses/delete/<?= $id; ?>" method="post">
			<input class="btn btn-danger" type="submit" value="Yes! I want to delete course.">
		</form>
    </div>
</body>
</html>