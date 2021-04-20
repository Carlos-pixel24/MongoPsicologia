<?php

//guardar registros de login
require_once __DIR__ . '/vendor/autoload.php';

$mat= $_POST["matricula"];
$ape= $_POST["apellido"];
$nom= $_POST["nombre"];
$carr= $_POST["carrera"];
$grup= $_POST["grupo"];
$sex= $_POST["sexo"];
$edad= $_POST["edad"];
$civil= $_POST["edocivil"];
$tel= $_POST["telefono"];
$corr= $_POST["correo"];
$fecha= $_POST["fecha"];
$time= $_POST["time"];



$collection = (new MongoDB\Client)->PSICOLOGIA->solicitud;

$insertOneResult = $collection->insertOne([
    'Matricula' => $mat,
    'Apellido' => $ape,
    'Nombre' => $nom,
    'Carrera' => $carr,
    'Grupo' => $grup,	
    'Sexo' => $sex,
    'Edad' => $edad,
    'Estado Civil' => $civil,
    'Telefono' => $tel,
    'Email' => $corr,
    'Fecha'=>$fecha,
    'Time'=>$time

    
]);

header("Location:registro.php");
///////////////////////////////////////////////////////////////////////////////////////////////
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$hora = $_POST["time"];

$body = "Nombre: ". $nombre . "<br>Asunto: " . "Confirmacion Cita psicologia UTN" . "<br>Fecha: " . $fecha . "<br>hora: ".$hora;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Mailer/src/Exception.php';
require 'Mailer/src/PHPMailer.php';
require 'Mailer/src/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $fromemail = 'elii.lauma@gmail.com';
    $fromname = 'Psicologia UTN';
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
