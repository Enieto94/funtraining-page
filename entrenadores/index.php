<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Entrenadores - Funtraining</title>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php';?>

	<link rel="stylesheet" href="/src/css/entrenadores-style.min.css">

</head>

<body>

	<div class="container-fluid">
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

        <main class="row">
            <div class="col-12">
                
                <div class="row justify-content-center mt-5 py-5">
                    <h2>Familia <span class="azul">FUNTRAINING</span></h2>
                </div>
        
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row justify-content-center align-items-center">
                            <div class="trainer-card col-md-3 text-center">
                                <img src="/src/img/entrenadores/John-Fredy-Gonzalez-Bonilla.png" alt="" class="img-coach">
                                <h5>John González</h5>
                                <p class="gris">
                                    Gerente Deportivo
                                </p>
                                <hr>
                                <button class="btn btn-perfil-entrenador">
                                    <img src="/src/img/plan.svg" alt="" class="img-puno">
                                </button>
                            </div>
        
                            <div class="trainer-card col-md-3 text-center">
                                <img src="/src/img/entrenadores/Helman-Alfonzo-Rodriguez.png" alt="" class="img-coach">
                                <h5>Helman Rodríguez</h5>
                                <p class="gris">
                                    Coach
                                </p>
                                <hr>
                                <button class="btn btn-perfil-entrenador">
                                    <img src="/src/img/plan.svg" alt="" class="img-puno">
                                </button>
                            </div>
        
                            <div class="trainer-card col-md-3 text-center">
                                <img src="/src/img/entrenadores/Diana-Nieto.png" alt="" class="img-coach">
                                <h5>Diana Nieto</h5>
                                <p class="gris">
                                    Coach & Atleta de competencia
                                </p>
                                <hr>
                                <button class="btn btn-perfil-entrenador">
                                    <img src="/src/img/plan.svg" alt="" class="img-puno">
                                </button>
                            </div>
        
                            <div class="trainer-card col-md-3 text-center">
                                <img src="/src/img/entrenadores/Camilo-cardenas.png" alt="" class="img-coach">
                                <h5>Camilo Cárdenas</h5>
                                <p class="gris">
                                    Coach & Entrenador Personal
                                </p>
                                <hr>
                                <button class="btn btn-perfil-entrenador">
                                    <img src="/src/img/plan.svg" alt="" class="img-puno">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>
	</div>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>

</body>

</html>