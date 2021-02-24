<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:type" content="article" />

	<meta property="og:title" content="Fun Training" />

	<meta property="og:description" content="En FUN TRAINING brindamos productos y servicios de Entrenamieto Presencial y Online que contribuyen con el desarrollo integral del cuerpo y la mente, a través de programas que promueven el bienestar y mejoran la calidad de vida de cada uno de los integrantes de nuestra gran familia." />
	<span class="naranja"></span> <span class="azul"></span> 

	<meta property="og:image" content="https://funtraining.net/src/img/01.jpg" />

	<meta property="og:url" content="https://funtraining.net" />

	<meta property="og:site_name" content="Fun Training" />


	<title>Inicio - Funtraining</title>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php';?>

	<link rel="stylesheet" href="/src/css/index-style.css">

	

</head>

<body>

	<div class="container-fluid">
		<div id="popup-container">
			<div id="btn-cerrar-popup">
				<svg style="width:48px;height:48px" viewBox="0 0 24 24">
					<path fill="#fff"
						d="M8.27,3L3,8.27V15.73L8.27,21H15.73L21,15.73V8.27L15.73,3M8.41,7L12,10.59L15.59,7L17,8.41L13.41,12L17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41" />
				</svg>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 p-4 text-center" id="resultado-container">
					<h4 class="my-2">Tu Índice de masa muscular es de <span class="azul" id="resultado-calculadora"></span>
						<div class="blanco" id="diagnostico"></div>
					</h4>
					<h5 class="my-2">Gracias por usar nuestra calculadora, si deseas una asesoría más personalizada déjanos tu nombre
						y correo electrónico para estar en contacto. </h5>
					<h3 class="naranja my-2">HAZ TU PREREGISTRO</h3>
					<div class="row justify-content-center">
						<div class="col-md-8">
							<input class="form-control my-2" type="text" name="nombre" id="nombre" placeholder="Nombres y apellidos">
							<input class="form-control my-2" type="email" name="correo" id="correo" placeholder="Correo electrónico">
							<input class="form-control my-2" type="text" name="celular" id="celular" placeholder="Número de celular">
						</div>
					</div>
					<div class="row justify-content-center">
						<button class="btn fondo-azul blanco m-0-auto" id="btnEnviar">
							ENVIAR
						</button>
					</div>
				</div>

			</div>

		</div>

		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row">
			<section class="col-12" id="banner-img-container">
				<div class="row">
					<div class="banner-layer col-12">
						<div class="row banner-layer-row bg-negro-70 justify-content-center align-items-center">
							<img id="logo-banner" src="/src/img/logo.png" alt="Funtraining Logo"
								title="Funtraining Logo">
						</div>

						<div class="row banner-layer-row bg-blanco-70">
						</div>
					</div>
				</div>
				<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" class="btn bg-azul btn-banner">
					COMIENZA HOY
				</a>
				<!-- <img src="/src/img/logo.jpg" alt="" style="position: absolute; top: 260px;left: 504px;width: 300px;"> -->
			</section>

			<section class="col-12 py-4">
				<div class="row justify-content-center my-4 px-1">
					<hr>
					<img src="/src/img/stars.svg" alt="Funtraining estrellas" title="Funtraining estrellas"
						id="stars-svg">
					<hr>

					<div class="col-md-7 ">
						<div class="row justify-content-center text-center py-4">
							<h2>
								<cite class="gris-oscuro"><span class="cita-1 naranja">FAMILIA,</span> UN EQUIPO QUE
									LUCHA UNIDO PARA LOGRAR SUS OBJETIVOS, <span class="cita-1 azul"> TU OBJETIVO
									</span>
								</cite>
							</h2>
						</div>
					</div>
				</div>
			</section>

			<section class="col-12 py-5" id="servicios-bg">
				<div class="row align-items-center justify-content-around h-100">
					<div class="col-md-5 col-10">
						<div class="row align-items-center">
							<h4 id="servicios-text">En <span class="naranja">FUN</span> <span
									class="azul">TRAINING</span> brindamos productos y servicios de Entrenamieto
								Presencial y Online que contribuyen con el desarrollo integral del cuerpo y la mente, a
								través de programas que promueven el bienestar y mejoran la calidad de vida de cada uno
								de los integrantes de nuestra gran familia.</h4>
						</div>
					</div>

					<div class="col-md-5">

						<div class="row justify-content-center">

							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/profesionales-especializados.svg"
												alt="Funtraining Servicios" title="Funtraining Servicios">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Profesionales</strong> <br>

												<span>Especializados</span>

											</div>

										</div>

									</div>

								</div>

							</div>



							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/equipo-moderno.svg"
												alt="Funtraining Equipo Moderno" title="Funtraining Equipo Moderno">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Equipo</strong>

												<span>Moderno</span>

											</div>

										</div>

									</div>

								</div>

							</div>



							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/asesoria-online.svg"
												alt="Funtraining Asesoría Online" title="Funtraining Asesoría Online">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Asesoría </strong>

												<span>Online</span>

											</div>

										</div>

									</div>

								</div>

							</div>



							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/asesoria-personalizada.svg"
												alt="Funtraining Asesoría Personalizada"
												title="Funtraining Asesoría Personalizada">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Asesoría </strong>

												<span>Personalizada</span>

											</div>

										</div>

									</div>

								</div>

							</div>



							<div class="col-5 my-2">

								<div class="row align-items-center ">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/orientacion-nutricional.svg"
												alt="">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Orientación </strong>

												<span>nutricional</span>

											</div>

										</div>

									</div>

								</div>

							</div>



							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/valoracion-fisica.svg"
												alt="Funtraining Valoración Física"
												title="Funtraining Valoración Física">

										</div>

									</div>



									<div class="col-12 col-md-4">

										<div class="row">

											<div class="col-12 text-center">

												<strong>Valoración </strong>

												<span>Física</span>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>



			<section class="col-12 py-4 my-4">

				<div class="row justify-content-center align-items-center py-4">

					<div class="col-md-3 text-center py-4">

						<img class="img-servicios" src="/src/img/clientes-felices.svg"
							alt="Funtraining Clientes Felices" title="Funtraining Clientes Felices">

						<p class="cifras my-0">+765</p>

						<h4 class="azul my-0">CLIENTES FELICES</h4>

						<p class="mes">CADA MES</p>

					</div>



					<div class="col-md-3 text-center borde-lateral-naranja py-4">

						<img class="img-servicios" src="/src/img/sesiones-online.svg" alt="Funtraining Sesiones Online"
							title="Funtraining Sesiones Online">

						<p class="cifras my-0">+525</p>

						<h4 class="azul my-0">SESIONES ONLINE</h4>

						<p class="mes">CADA MES</p>

					</div>



					<div class="col-md-3 text-center py-4">

						<img class="img-servicios" src="/src/img/planes-online.svg" alt="Funtraining Planes Online"
							title="Funtraining Planes Online">

						<p class="cifras my-0">+765</p>

						<h4 class="azul my-0">PLANES ONLINE</h4>

						<p class="mes">CADA MES</p>

					</div>

				</div>

			</section>



			<section class="col-12 my-2">

				<div class="row justify-content-end align-items-center text-center pos-relative">

					<img id="img-calcula-imm" src="/src/img/W1.jpg" alt="">
					<div class="trapecio pos-relative">


						<div class="offset-md-2 col-md-8 py-4" id="calcula-peso-container">

							<div class="row justify-content-center">

								<img class="img-servicios" src="/src/img/calcula-tu-imm.svg"
									alt="Funtraining Calcula tu IMM" title="Funtraining Calcula tu IMM">

							</div>



							<h3>CALCULA TU ÍNDICE</h3>



							<h3 class="naranja">DE MASA MUSCULAR</h3>



							<div class="row">

								<div class="col-md-6 borde-derecho-azul">

									<h3>ESTATURA EN <br> CENTÍMETROS</h3>

									<input type="text" id="estatura">

								</div>

								<div class="col-md-6">

									<h3>PESO EN <br> KILOGRAMOS</h3>

									<input type="text" id="peso">

								</div>

							</div>



							<div class="row justify-content-center align-items-center my-4">



								<div class="col-10 col-md-8">

									<div class="row text-center align-content-center" id="btn-resultado-container">

										<div class="col-3 btn-resultado">

											<img src="/src/img/corazon.svg" alt="Funtraining Resultado"
												title="Funtraining Resultado">

										</div>

										<div class="col-9">

											<div class="row h-100 justify-content-center align-items-center">

												<h3>RESULTADO</h3>

											</div>

										</div>

									</div>

								</div>

							</div>



						</div>

					</div>



				</div>

			</section>



			<section class="col-12 py-5">

				<div class="row justify-content-center">

					<div class="col-10">

						<div class="row justify-content-center text-center">

							<cite class="frase-gris">

								En FUN TRAINING nos preocupamos por ti, por esta razón ofrecemos servicios de alta
								calidad con sesiones de entrenamiento personalizadas y semipersonalizadas para grupos
								reducidos en espacios amplios y adecuados, siempre acompañados por profesionales
								enfocadas en la mejora de tus capacidades.

							</cite>

						</div>

					</div>

				</div>

			</section>



			<section class="col-12">

				<div class="row justify-content-around">
					<div class="col-md-4">
						<div class="row">
							<div class=" w-100 d-flex flex-column pos-relative">

								<img class="img-responsive" src="/src/img/PL1.jpg" alt="">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraing Plan Classic"
										title="Funtraing Plan Classic">

									<span class="blanco"><strong>FUN TRAINING</strong></span>

									<span class="naranja"><strong>BALANCE</strong></span>

								</div>

							</div>
						</div>

						<div class="row plan-container">
							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>12 sesiones</strong> de entrenamiento funcional dirigido por mes. Sin restricciones</p>

								</div>

								<div class="plan-item py-3">

									<p>Sesiones de entrenamiento de 60 minutos. Múltiples horarios al día. <strong>Sin restricciones.</strong></p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejora capacidades física</strong> (Resistencia, Fuerza, Velocidad y Movilidad)</p>

								</div>
								<div class="plan-item py-3">

									<p>Disfruta de la variedad en los horarios desde las 5 de la mañana hasta las 10 de la noche. </p>

								</div>

							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">

										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>
										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>


					</div>

					<div class="col-md-4">

						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">
								<img class="img-responsive" src="/src/img/PL2.jpg" alt="Funtraining Plan Power"
									title="Funtraining Plan Power">
								<div class="plan-description d-flex flex-column align-items-center">
									<img src="/src/img/plan.svg" alt="Funtraining Plan Power"
										title="Funtraining Plan Power">
									<span class="blanco mb-0"><strong>FUN TRAINING</strong></span>
									<span class="naranja"><strong>POWER</strong></span>
								</div>
							</div>
						</div>

						<div class="row plan-container">
							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>24 sesiones </strong> de entrenamiento funcional dirigido por mes. Sin
										restricciones.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Duración de 60 minutos </strong> por sesión de entrenamiento</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejora capacidades físicas</strong> (Resistencia, Fuerza, Velocidad y
										Movilidad).</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mayor volumen</strong> de trabajo por mes.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejores resultados</strong> en menor tiempo.</p>

								</div>

								<div class="plan-item py-3">
									<p>Disfruta de la variedad en los horarios desde las <strong>5 de la mañana hasta las 10 de la noche.</strong> </p>
								</div>
							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">
										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>

										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>


					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL3.jpg" alt="Funtraining Plan Home"
									title="Funtraining Plan Home">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="">

									<span class="blanco mb-0"><strong>FUN TRAINING</strong></span>

									<span class="naranja"><strong>HOME</strong></span>

								</div>
							</div>
						</div>

						<div class="row plan-container">
							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>12 sesiones</strong> de entrenamiento dirigido por mes.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Sesiones de entrenamiento </strong>Dirigidas a través de la plataforma
										zoom empresarial. En tiempo real.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Uso de elementos </strong>que se encuentran en el hogar.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Sesiones de entrenamiento </strong> de 60 minutos.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejora de capacidades físicas</strong> (Resistencia, Fuerza, Velocidad y
										Movilidad.</p>

								</div>



							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">
										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>

										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>


					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL3.jpg" alt="Funtraining Plan Power"
									title="Funtraining Plan Power">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraining Plan Power"
										title="Funtraining Plan Power">

									<span class="blanco mb-0"><strong>FUNCTIONAL COACHING</strong></span>

									<span class="naranja"><strong>SESSION</strong></span>

								</div>

							</div>
						</div>

						<div class="row plan-container">

							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>Valoración </strong> y baremación de datos obtenidos.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Valoración antropométrica </strong> (Peso, talla, perímetros, diámetros y
										pliegues cutáneos). </p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Capacidades básicas. </strong> (Resistencia, Fuerza, Velocidad y
										Movilidad).</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Entrenamiento mental.</strong> </p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Planificación </strong> a corde a losobjetivos.</p>

								</div>
							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">
										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>

										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>


					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">
								<img class="img-responsive" src="/src/img/PL2.jpg" alt="Funtraining Plan Power"
									title="Funtraining Plan Power">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraining Plan Power"
										title="Funtraining Plan Power">

									<span class="blanco mb-0"><strong>FUN TRAINING</strong></span>

									<span class="naranja text-center"><strong>PERSONAL ADVICE <h4>(Asesoría personalizada)</h4></strong></span>

								</div>
							</div>
						</div>
						<div class="row plan-container">
							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>Cambios </strong> rápidos y efectivos</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Acompañamiento</strong> personal en las sesiones de entrenamiento</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Acompañamiento</strong> vía WhatsApp 24/7.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Guía nutricional</strong> y suplementación individual acorde a los
										objetivos.</p>

								</div>
								<div class="plan-item py-3">

									<p>Entrenamientos acordes a tus necesidades y disponibilidad de tiempo. Disfruta de
										tiempo. Disfruta de 8, 12 o 16 sesiones de entrenamiento en el mes. Con el
										profesional que desees de nuestra familia y elige la hora del día en la que
										prefieres realizarlo.</p>

								</div>

							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">
										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>

										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL1.jpg" alt="Funtraining Plan Power"
									title="Funtraining Plan Power">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraining Plan Power"
										title="Funtraining Plan Power">

									<span class="blanco mb-0"><strong>FUN NUTRITIONAL</strong></span>

									<span class="naranja"><strong>GUIDE</strong></span>

								</div>
							</div>
						</div>

						<div class="row plan-container">
							<div class="col-12 px-3 px-md-5">

								<div class="plan-item py-3">

									<p><strong>Valoración </strong> y análisis de hábitos diarios.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Planificación </strong> seguimiento y control en la ingesta de alimentos al
										día.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Variabilidad</strong> en la ingesta de alimentos acorde a tus objetivos.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Programas sostenibles</strong> en el tiempo</p>

								</div>
								<div class="plan-item py-3">

									<p>Asesoría <strong>24/7</strong> vía Whatsapp.</p>

								</div>

							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank" class="btn btn-comprar">
										<svg style="width:48px;height:48px;" viewBox="0 0 24 24">
											<path fill="#fff"
												d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
										</svg>

										<span>COMPRAR</span>

									</a>

								</div>

							</div>
						</div>


					</div>

				</div>

			</section>



			<div class="col-12">

				<div class="row pos-relative">

					<div class="trapecio-invertido">

						<div class="col-md-5 cita-2">

							<div class="row justify-content-center">

								<cite>IR JUNTOS ES <br><strong class="azul">COMENZAR,</strong> <br> MANTENERSE <br>
									JUNTOS ES <br> <strong class="azul">PROGRESAR,</strong> TRABAJAR <br> JUNTOS ES <br>
									<strong class="naranja">TRIUNFAR</strong></cite>

							</div>

						</div>

						<div class="col-md-4 trapecio-invertido-img">

							<div class="row">

								<img class="img-responsive" src="/src/img/W3.jpg" alt="Funtraining Frase Motivacional"
									title="Funtraining Frase Motivacional">

							</div>

						</div>

					</div>

				</div>

			</div>

			<!-- <section class="col-12 my-5">

				<div class="row justify-content-center">

					<div class="col-md-6 text-center">

						<img id="plan-nutricional-img" src="/src/img/plan-nutricional.svg" alt="">

						<h4 class="gris-oscuro">FUN TRAINING</h4>

						<h2 class="azul" id="plan-nutricional-title">PLAN NUTRICIONAL</h2>



					</div>



				</div>



				<div class="row justify-content-center" class="plan-nutricional-container">

					<div
						class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2">



						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Mensual"
								title="Funtraining Plan Mensual">

						</div>

						<h2 class="gris-oscuro">MENSUAL</h2>

						<span class="azul">$99,900</span>



					</div>

					<div
						class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2 borde-lateral-naranja">



						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Bimensual"
								title="Funtraining Plan Bimensual">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Bimensual"
								title="Funtraining Plan Bimensual">

						</div>



						<h2 class="gris-oscuro">BIMENSUAL</h2>

						<span class="azul">$149,900</span>



					</div>

					<div
						class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2">



						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral"
								title="Funtraining Plan Trimestral">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral"
								title="Funtraining Plan Trimestral">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral"
								title="Funtraining Plan Trimestral">

						</div>



						<h2 class="gris-oscuro">TRIMESTRAL</h2>

						<span class="azul">$199,900</span>



					</div>

				</div>

			</section> -->

			<section class="col-12" id="section-descuento">

				<div class="row align-items-center justify-content-center ">

					<div class="col-md-6">

						<div class="row">

							<img src="/src/img/f1.png" alt="Funtraining Se Parte de La Familia"
								title="Funtraining Se Parte de La Familia" class="img-responsive">

						</div>

					</div>



					<div class="col-10 col-md-5" style="color: #ffff;">

						<div class="row">

							<h2>

								SE PARTE DE <br><span class="azul">LA FAMILIA</span> <br><span
									class="naranja">FUN</span> <span class="azul">TRAINING</span>

							</h2>

							<h3 class="mt-2">

								Lo que te impulsa, lo que más te motiva, <span class="azul">
									es el deseo de encontrar tus límites y
									extenderlos.
								</span>

							</h3>

							<p class="gris">

								

							</p>

						</div>

						<div class="row justify-content-center">

							<button class="btn btn-comprar">

								<a class="blanco" href="https://api.whatsapp.com/send?phone=573235220130&text=%C2%A1Hola!,%20quiero%20ser%20parte%20de%20la%20familia%20FUN%20TRAINING%20%F0%9F%91%8A%20%C2%BFMe%20puedes%20dar%20m%C3%A1s%20informaci%C3%B3n?" target="_blank">HAZTE MIEMBRO</a>

							</button>

						</div>

					</div>

				</div>

				<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>

			</section>

		</main>

	</div>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php';?>

</body>

</html>