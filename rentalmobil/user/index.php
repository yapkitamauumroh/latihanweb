<?php
session_start();

?>



<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Rental | User Login</title>
	<link rel="stylesheet" href="../admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="../admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="../admin/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../admin/css/bootstrap-social.css">
	<link rel="stylesheet" href="../admin/css/bootstrap-select.css">
	<link rel="stylesheet" href="../admin/css/fileinput.min.css">
	<link rel="stylesheet" href="../admin/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../admin/css/style.css">
</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(../admin/img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x" style="color:#fff">User | Sign in (proses)</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Username </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
		

									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>

			<p style="margin-top: 4%" align="center"><a href="../index.php">Kembali</a>	</p>
							</div>

						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="../admin/js/jquery.min.js"></script>
	<script src="../admin/js/bootstrap-select.min.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script>
	<script src="../admin/js/jquery.dataTables.min.js"></script>
	<script src="../admin/js/dataTables.bootstrap.min.js"></script>
	<script src="../admin/js/Chart.min.js"></script>
	<script src="../admin/js/fileinput.js"></script>
	<script src="../admin/js/chartData.js"></script>
	<script src="../admin/js/main.js"></script>

</body>

</html>