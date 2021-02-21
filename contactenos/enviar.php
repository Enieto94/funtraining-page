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

    require '../vendor/phpmailer/class.phpmailer.php';
    require '../vendor/phpmailer/class.smtp.php'; //incluimos la clase para envíos por SMTP
    $mail = new PHPMailer();

    $mail->From     = $correo;
    $mail->FromName = $nombres; 
    $mail->AddAddress("egnieto94@gmail.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "<table border='1'><tr><th>Nombres</th><th>correo</th><th>Asunto</th><th>Servicio</th><th>Mensaje</th></tr><tr>"."<td>$nombres</td><td>$correo</td><td>$asunto</td><td>$servicio</td><td>$mensaje</td></table> \n<br />".    
    "Email: $correo \n<br />".    
    "Mensaje: $mensaje \n<br />";    
    

// Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'contactofuntraining@gmail.com';  // Tu correo gmail
    $mail->Password = 'Funtraining2021.'; // Tu contrasena gmail
    $mail->FromName = 'Contacto funtraining'; // 
    $mail->From = 'contactofuntraining@gmail.com'; //email de remitente desde donde se envía el correo, este caso para evitar spam es el mismo que tu correo gmail
    
    $mail->Send();

    header("Location: https://funtraining.net/contactenos/");


?>
</body>
</html>