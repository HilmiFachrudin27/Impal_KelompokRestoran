<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Asset/css/login.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>login</title>
</head>

<body class="body">
	<h1>Yummy Resto</h1>
	<div class="container">
		<div class="col-md-6 loginbox">
			<h2>login</h2>
			<form method="post" action="<?php echo $this->config->base_url();?>Clogin/Login">
				<div class="form-group">
					<label for="id_kayawan">Username</label>
					<input type="text" class="form-control" name="id_karyawan" id="id_karyawan" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<a href="<?php echo $this->config->base_url();?>chomekasir">home kasir</a>
	</div>


</body>

</html>
