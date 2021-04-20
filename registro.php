<?php include "includes/menu.php" ?>

<br>
<h1>
     Alumno nuevo
</h1>
<br>
<div class="container">
     <form class="center-text" action="registro_base.php" method="POST">
          <br>
          <div class="d-flex justify-content-between">
               <input class="input100 m-2" type="text" name="matricula" placeholder="Matricula" id="matricula">
               <input class="input100 m-2" type="text" name="nombre" placeholder="Nombre" id="nombre">
               <input class="input100 m-2" type="text" name="apellido" placeholder="Apellido" id="apellido">
          </div>
          <br>
          <div class="d-flex justify-content-between">
               <input class="input100 m-2" type="text" name="grupo" placeholder="Grupo" id="grupo">
               <input class="input100 m-2" type="text" name="sexo" placeholder="Sexo" id="sexo">
               <input class="input100 m-2" type="text" name="edad" placeholder="Edad" id="edad">
          </div>
          <br>
          <div class="d-flex justify-content-between">
               <input class="input100 m-2" type="text" name="edocivil" placeholder="Estado Civil" id="edovicil">
               <input class="input100 m-2" type="text" name="telefono" placeholder="Telefono" id="telefono">
               <input class="input100 m-2" type="text" name="correo" placeholder="Correo" id="correo">
          </div>
          <br>
          <div class="d-flex justify-content-start">
          <input class="input100 m-2" type="text" name="carrera" placeholder="Carrera" id="carrera">
          <input class="input100 m-2" type="date" name="fecha" placeholder="Fecha" id="fecha">
          <input class="input100 m-2" type="time" name="time" placeholder="Hora" id="hora">
          </div>
          <br>
          <div class="container-login100-form-btn">
          <div class="d-flex justify-content-center">
          <a class="login100-form-btn" >
		<button type="submit">Registrar </button>			
		</a>
          </div>
          </div>
          <?php
       if(isset($_GET["enviado"]) && $_GET["enviado"] == 'true')
       {
          echo "<div style='color:green'>Registro insertado correctamente </div>";
       }
     ?>
     </form>
</div>

<?php include 'includes/footer.php' ?>