<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<img width="50" height="50" src="assets/img/Psi.png" alt=""><img width="50" height="50" src="assets/img/Psi.png" alt="">
				<span class="login-title">
					Psicologia UTN
				</span>

				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/logo.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="connection.php" method="POST">
					<span class="login100-form-title">
						Iniciar sesion
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red'>Usuario y/o contraseña invalido </div>";
       }
     ?>
					</div>

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" >
						<button type="submit">Entrar </button>
						
						</a>

						

					</div>

					<div class="text-center p-t-12">

					</div>

					<div class="text-center p-t-136">
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>

</html>