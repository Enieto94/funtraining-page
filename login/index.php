<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Inicio - Funtraining</title>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php';?>

	<link rel="stylesheet" href="/src/css/login-style.css">

</head>

<body>

	<div class="container-fluid">
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row justify-content-center align-items-center py-5" id="login-container">
			<section class="row justify-content-center">
				<div class="col-10 col-md-12" id="login-form">
					<input class="form-control my-2" type="text" placeholder="Usuario">
					<input class="form-control" type="password" placeholder="Contraseña">
				</div>
				<div class="col-12">
					<div class="row justify-content-center">
						<a href="/login/panel/" class="btn fondo-naranja blanco my-4" href="">INICIAR SESION</a>
					</div>
				</div>
			</section>
		</main>

		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>

	</div>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>

</body>

</html>