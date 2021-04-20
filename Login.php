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

	<!--Formulario para contactar al correo de la maestra-->
					<main class="container">
					    <br>
					    <button style="margin-top: -250px; margin-left: 650px" class="btn btn-info" data-toggle="modal" data-target="#ventanaModal">Contactanos</button>

					    <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
					        <div class="modal-dialog" role="document">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <h5 id="tituloVentana"><strong> Agenta tu cita</strong></h5>
					                    <button class="close" data-dismiss="modal" aria-label="Cerrar">
					                        <span aria-hidden="true">&times;</span>
					                    </button>
					                </div>
					                
					                <form action="enviar.php" name="enviar" method="POST">
					                    <div class="modal-body">
					                        
					                        <label for="Matricula">Matrícula</label>
					                        <input type="text" class="form-control" name="matricula" placeholder="Matrícula" required>

					                        <label for="nombre">Nombre completo</label>
					                        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
					                    
					                        <label for="correo">Correo</label>
					                        <input type="email" class="form-control" name="correo" placeholder="Correo" required>

					                        <label for="grupo">Grupo</label>
					                        <input type="text" class="form-control" name="grupo" placeholder="Grupo" required>

					                        <label for="sexo">Sexo</label>
					                        <input type="text" class="form-control" name="sexo" placeholder="Sexo" required>

					                        <label for="edad">Edad</label>
					                        <input type="text" class="form-control" name="edad" placeholder="Edad" required>

					                        <label for="edocivil">Estado Civil</label>
					                        <input type="text" class="form-control" name="edocivil" placeholder="Estado civil" required>

					                        <label for="telefono">Teléfono</label>
					                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required>

					                        <label for="carrera">Carrera</label>
					                        <input type="text" class="form-control" name="carrera" placeholder="Carrera" required>
					                        
					                        <label for="nombre">Asunto</label>
					                        <input type="text" class="form-control" name="asunto" placeholder="Asunto" required>
					  
					                        <label for="mensaje">Mensaje</label> <br>
					                        <textarea name="mensaje"  class="text textarea input-xlarge" rows="5" cols="58"placeholder="Pueden proponer una hora y dia para que el psicologo lo tome a consideracion" required></textarea>
					                        <br>
					                        <br>
					                            <button type="submit" style="width:220px;" name="btnEntregar" class="btn btn-success" >Enviar</button>
					                        </div>
					                    </div>
					                </form>
					                <div class="modal-footer">
					                </div>
					            </div>
					        </div>
					    </div>
					</main>
					    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
					<!--Formulario para contactar al correo de la maestra-->
					<!--Formulario para contactar al correo de la maestra-->
					<main class="container">
					    <br>
					    <button style="margin-top: -344.3px; margin-left: 800px" class="btn btn-info" data-toggle="modal" data-target="#calendario">Ver calendario</button>

					    <div class="modal" id="calendario" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
					        <div class="modal-dialog" role="document">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <h5 id="tituloVentana"><strong> Dias disponibles</strong></h5>
					                    <button class="close" data-dismiss="modal" aria-label="Cerrar">
					                        <span aria-hidden="true">&times;</span>
					                    </button>
					                </div>
					                
					                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%2300923f&amp;ctz=America%2FHermosillo&amp;src=a2w3bnE4NHRlZnRhaDZkYmw4NTE4ajNwOGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23E4C441&amp;showCalendars=0&amp;showTabs=0" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

					                <div class="modal-footer">
					                </div>
					            </div>
					        </div>
					    </div>
					</main>
					    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
					<!--Formulario para contactar al correo de la maestra-->

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