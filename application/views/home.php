<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<title>Login and Registration - ORM</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<form method="post" action="/user/create">
				<h2>Registration</h2>
				<h4><?= $this->session->flashdata('registration_msg'); ?></h4>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" class="form-control" name="first_name">
				</div>
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" class="form-control" name="last_name">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password:</label>
					<input type="password" class="form-control" name="confirm_password">
				</div>
				<input type="submit" value="Register" class="btn btn-primary">
			</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<form method="post" action="/session/create">
				<h2>Login</h2>
				<h4><?= $this->session->flashdata('login_msg'); ?></h4>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password">
				</div>
				<input type="submit" value="Login" class="btn btn-primary">
			</form>
			</div>
		</div>
	</div>
</body>
</html>