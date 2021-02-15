<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contactenos - Funtraining</title>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php';?>

	<link rel="stylesheet" href="/src/css/contacetnos-style.min.css">


</head>

<body>

	<div class="container-fluid">
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row">
			<div class="col-12">
				<section class="row justify-content-center py-4 my-2" id="form-container">
					<div class="col-12">
						<div class="row justify-content-center">
							<h3>CONTACTENOS</h3>
						</div>
					</div>

					<form action="enviar.php" enctype="multipart/form-data" method="POST" name="contactenos" class="col-10 col-md-5" >
						<input type="text" class="form-control my-2" placeholder="Nombres Completos" id="nombres" name="nombres" >
						<input type="text" class="form-control my-2" placeholder="Email" id="correo" name="correo" >
						<input type="text" class="form-control my-2" placeholder="Asunto" id="asunto" name="asunto" >
						<select class="form-control my-2 " id="servicio" name="servicio" >
							<option>
								Seleccione el tipo de servicio que desea
							</option>
							<option>
								Soporte
							</option>
							<option>
								Asesoría
							</option>
							<option>
								Primer Clase Gratis
							</option>
						</select>
						<textarea class="form-control" rows="5" placeholder="Escriba su mensaje..." id="mensaje"  name="mensaje"></textarea>
						<div class="row justify-content-center my-2">
							<button type="submit"  class="btn fondo-naranja blanco" id="btn-enviar">
								Enviar Mensaje
							</button>
						</div>
					</form>
				</section>
			</div>
		</main>


		
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>
		<script src="/src/libs/notify/notify.min.js"></script>
		<script src="/src/js/contactenos-script.js"></script>
	</div>


</body>

</html>