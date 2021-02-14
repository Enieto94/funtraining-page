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
					<form action="enviar.php" class="col-md-6" name="contactenos">
						<input type="text" class="form-control my-2" placeholder="Nombres Completos" name="nombres" id="nombres">
						<input type="text" class="form-control my-2" placeholder="Email" name="correo" id="correo">
						<input type="text" class="form-control my-2" placeholder="Asunto" name="asunto" id="asunto">
						<label for="">Deseo obtener:   <input type="radio" name="servicio" value="soporte" class="ml-3" class="servicio"> Soporte<input type="radio" name="servicio" value="asesoria" class="ml-3" class="servicio"> Asesoría<input type="radio" name="servicio" value="primer clase gratis" class="ml-3" class="servicio"> Primer Clase Gratis</label>
						<textarea class="form-control" name="" id="mensaje" rows="5" placeholder="Escriba su mensaje..." name="mensaje"></textarea>
					</form>
					<div class="col-12 my-2">
						<div class="row justify-content-center">
							<button class="btn fondo-naranja blanco" type="submit" id="btn-enviar">
								Enviar Mensaje
							</button>
						</div>
					</div>
				</section>
			</div>
		</main>


		
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>
		<script src="/src/js/contactenos-script.js"></script>
	</div>


</body>

</html>