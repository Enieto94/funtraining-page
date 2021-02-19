<?php 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
function enviarMsj()
{
    require_once '../vendor/autoload.php';

    try {
        // Se envía el correo

        $mail_HTML = '<table style="height: 43px; margin-left: auto; margin-right: auto;" border="1px solid #FD551" width="700">
							<tbody>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #000000;"><strong>nombre:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['nombres'] . '</td>
							</tr>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #000000;"><strong>Correo:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['correo'] . '</td>
							</tr>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #000000;"><strong>Mensaje:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['asunto'] . '</td>
							</tr>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #000000;"><strong>Mensaje:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['servicio'] . '</td>
							</tr>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #000000;"><strong>Mensaje:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['mensaje'] . '</td>
							</tr>
							</tbody>
							</table>
							<p style="text-align: center;">&nbsp;</p>
							<p style="text-align: center;"><span style="color: #000000;"><strong>Este mensaje fu&eacute; generado desde Funtraining</strong></span></p>';

            $mail = new PHPMailer;
            $mail->Host = "localhost";
            $mail->From = $_POST['correo'];
            $mail->FromName = "Contacto Funtraining";
            $mail->addAddress("contacto@funtraining.net");
            $mail->addAddress("egnieto94@gmail.com");

            $mail->CharSet = 'UTF-8';
            $mail->Subject = ("¡Contacto Funtraining!");
            $mail->MsgHTML($mail_HTML);

            if ($mail->Send()) {

                $jsonResponse = array(
                    'respuesta' => "ok",
                    'mensaje' => 'mensaje enviado',
                );
            } else {
                $jsonResponse = array(
                    'respuesta' => "error",
                    'mensaje' => 'no se envio el email',
                );
            }


        print_r(json_encode($jsonResponse));
    } catch (Exception $e) {
        print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Surgió un error al enviar el correo. ")));
    }
}
?>