<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title>

</head>

<body>
<?php


$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$servicio = $_POST['servicio'];
$mensaje = $_POST['mensaje'];

if ($nombres == '' || $correo == '' || $asunto == ''|| $servicio == ''|| $mensaje == ''){ 

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require 'phpmailer/class.phpmailer.php';
    require 'phpmailer/class.smtp.php'; //incluimos la clase para envíos por SMTP
    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("contacto@funtraining.net"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "<table border='1'><tr><td>Nombres:</td><td>".$nombres."</td></tr><tr><td>Apellidos:</td><td>".$correo."</td></tr><tr><td>Area:</td><td>".$asunto."</td></tr><tr><td>Departamento:</td><td>".$servicio."</td></tr><tr><td>Ciudad:</td><td>".$mensaje."</td></tr><tr><td>Tarjeta profesional:</td>"."</table>";

// Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "mail.funtraining.net"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'contacto@funtraining.net';  // Tu correo gmail
    $mail->Password = 'NVeKfxA1m^G1'; // Tu contrasena gmail
    $mail->FromName = 'Contacto Funtraining'; // 
    $mail->From = 'contacto@funtraining.net'; //email de remitente desde donde se envía el correo, este caso para evitar spam es el mismo que tu correo gmail
    
    if ($mail->Send())
    echo "<script>swal('Gracias por registrar sus datos', 'Será redireccionado en breve...', 'success');</script>";
    else
    echo "<script>swal('Error', 'Será redireccionado en breve...', 'error');location.href ='https://funtraining.net/contactenos/';</script>";

}
header('Location: https://funtraining.net/contactenos/');

?>
</body>
</html>