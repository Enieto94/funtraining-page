<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$solicitud = $_POST['solicitud'];

	if (isset($solicitud)) {

		switch ($solicitud) {
			case 'enviarForm':
				enviarForm();
				break;
		
			default:
				print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Lo sentimos, no tienes acceso a este apartado")));
				break;
		}

	} else {
		print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Lo sentimos, no tienes acceso a este apartado")));
	}

	function enviarForm() {
		require_once '../vendor/autoload.php';
		$mail_HTML = '<p style="text-align: center;">Gracias por contactarnos</p>
					<table style="height: 114px; margin-left: auto; margin-right: auto;" border="2px" width="499">
					<tbody>
					<tr>
					<td style="width: 240px;">NOMBRES:</td>
					<td style="width: 243px;">'. $_POST['nombres'] .'</td>
					</tr>
					<tr>
					<td style="width: 240px;">TELEFONO:</td>
					<td style="width: 243px;">'. $_POST['correo'] .'</td>
					</tr>
					<tr>
					<td style="width: 240px;">E-MAIL:</td>
					<td style="width: 243px;">'. $_POST['asunto'] .'</td>
					</tr>
					<tr>
					<td style="width: 240px;">ASUNTO:</td>
					<td style="width: 243px;">'. $_POST['servicio'] .'</td>
					</tr>
					<tr>
					<td style="width: 240px;">DETALLE:</td>
					<td style="width: 243px;">'. $_POST['mensaje'] .'</td>
					</tr>

					</tbody>
					</table>
					<p>Este mensaje fué generado desde DTL </p>';

		$mail = new PHPMailer;
		$mail->Host = "localhost";
		$mail->From = "contacto@funtraining.net";
		$mail->FromName = "Funtraining";
		$mail->addAddress("egnieto94@gmail.com");


		$mail->CharSet = 'UTF-8';
		$mail->Subject = ("¡Gracias por contactarnos!");
		$mail->MsgHTML($mail_HTML);

		$log_mails_file = "../../../logs/log_mails.log";

		if ($mail->Send()) {

			$texto_log = "Se envio el correo";

			if (file_exists($log_mails_file)) {
				// Agrego el log
				$fichero_log = fopen($log_mails_file, 'a');
				fwrite($fichero_log, '\n' . $texto_log);
				fclose($fichero_log);

			} else {
				// creo el fichero con el primer log
				$fichero_log = fopen($log_mails_file, 'w');
				fwrite($fichero_log, $texto_log);
				fclose($fichero_log);
			}

			$jsonResponse = array(
				'respuesta' => "ok",
				'mensaje' => 'grecaptcha-ok',
				'content' => array(
					'title' => "¡Gracias por contactarnos!",
					'text' => "Pronto noscomunicaremos con usted"
				)
			);

		} else {
			$texto_log = "No se envio el correo";
			
			if (file_exists($log_mails_file)) {
				// Agrego el log
				$fichero_log = fopen($log_mails_file, 'a');
				fwrite($fichero_log, '\n' . $texto_log);
				fclose($fichero_log);

			} else {
				// creo el fichero con el primer log
				$fichero_log = fopen($log_mails_file, 'w');
				fwrite($fichero_log, $texto_log);
				fclose($fichero_log);
			}

			$jsonResponse = array(
				'respuesta' => "error",
				'mensaje' => 'grecaptcha-ok',
				'content' => array(
					'title' => "El correo no se pudo enviar por: ",
					'text' => "$mail->ErrorInfo"
				)
			);
		}
		
		
	
		
	}
	
		


?>