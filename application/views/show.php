<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<title>Welcome <?= $this->session->userdata('user')[0]['first_name'] ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
	label{
		display: block;
	}
	.center{
		text-align: center;
	}
	.right{
		text-align: right;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="center">
					<h2>Welcome <?= $this->session->userdata('user')[0]['first_name'] ?> </h2>
				</div>
				<div>
					<h3>User Information:</h3>
				</div>
				<div class="form-group">
					<label>First Name:</label> 
					<p class="form-control">
						<?= $this->session->userdata('user')[0]['first_name']; ?>
					</p>
				</div>
				<div class="form-group">
					<label>Last Name:</label> 
					<p class="form-control">
						<?= $this->session->userdata('user')[0]['last_name']; ?>
					</p>
				</div>
				<div class="form-group">
					<label>Email:</label> 
					<p class="form-control">
						<?= $this->session->userdata('user')[0]['email']; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div>
					<h3>All Users:</h3>
				</div>
				<table class="table table-bordered">
					<thead>
						<td>First Name:</td>
						<td>Last Name:</td>
						<td>Email:</td>
						<td>Created:</td>
					</thead>
					<?php
					foreach($users as $user)
					{
					?>
					<tr>
						<td><?=$user['first_name']?></td>
						<td><?=$user['last_name']?></td>
						<td><?=$user['email']?></td>
						<td><?=$user['created_at']?></td>
					</tr>
					<?php
					}
					?>
				</table>
				<div class="right">
					<a href="/logout"><button class="btn btn-warning">Log Out</button></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>