<?php
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$grupo = $_POST["grupo"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$edocivil = $_POST["edocivil"];
$tel = $_POST["telefono"];
$carrera = $_POST["carrera"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$body = "Matricula: ". $matricula ."<br>Nombre: ". $nombre . "<br>Correo: ". $correo . "<br>Grupo: ". $grupo ."<br>Sexo: " .$sexo . "<br>Edad: ". $edad . "<br>Estado civil: ". $edocivil ."<br>Teléfono: ". $tel. "<br>Carrera: ". $carrera ."<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Mailer/src/Exception.php';
require 'Mailer/src/PHPMailer.php';
require 'Mailer/src/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $fromemail = 'elii.lauma@gmail.com';
    $fromname = 'Eli';
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $fromemail;                     //SMTP username
    $mail->Password   = '!E1l8i!.';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress($fromemail,$fromname);     //Add a recipient


    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($correo,$nombre);
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
    $mail->Charset = 'UTF-8';

    $mail->send();
    echo '<script>
    alert("El mensaje se envió correctamente");
    </script>';
    
   

} catch (Exception $e) {
    echo "No se ha podido enviar el mensaje: {$mail->ErrorInfo}";
}


?>