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
					<form action="" class="col-md-6">
						<input type="text" class="form-control my-2" placeholder="Nombres Completos">
						<input type="text" class="form-control my-2" placeholder="Email">
						<input type="text" class="form-control my-2" placeholder="Asunto">
						<label for="">Deseo obtener:   <input type="radio" name="servicio" value="soporte" class="ml-3"> Soporte<input type="radio" name="servicio" value="asesoria" class="ml-3"> Asesoría<input type="radio" name="servicio" value="primer clase gratis" class="ml-3"> Primer Clase Gratis</label>
						<textarea class="form-control" name="" id="" rows="5" placeholder="Escriba su mensaje..."></textarea>
					</form>
					<div class="col-12 my-2">
						<div class="row justify-content-center">
							<button class="btn fondo-naranja blanco">
								Enviar Mensaje
							</button>
						</div>
					</div>
				</section>
			</div>
		</main>


		
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>
	</div>


</body>

</html>