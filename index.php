<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
							<input class="form-control my-2" type="text" name="" id="nombre" placeholder="Nombres y apellidos">
							<input class="form-control my-2" type="email" name="" id="correo" placeholder="Correo electrónico">
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
				<a href="" class="btn bg-azul btn-banner">
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

									<p>Sesiones de entrenamiento funcional dirigido por mes.<strong>Sin restricciones.</strong></p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejora capacidades física</strong> (Resistencia, Fuerza, Velocidad y Movilidad)</p>

								</div>

							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20Classic" target="_blank" class="btn btn-comprar">

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

									<p><strong>Entradas ilimitadas </strong> en open season.</p>

								</div>



								<div class="plan-item py-3">

									<p><strong>Duración de 60 minutos </strong> Por sesión de entrenamiento.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mejora capacidades físicas</strong> (Resistencia, Fuerza, Velocidad y
										Movilidad).</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Mayor volumen</strong> de trabajo por mes.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>mejores resultados</strong> en menor tiempo.</p>

								</div>
							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20Power" target="_blank" class="btn btn-comprar">
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

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20Home" target="_blank" class="btn btn-comprar">
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

					<div class="col-md-12">
						<section class="row align-items-center">
		                    <div class="col-md-8">
		                        <div class="row justify-content-center">
		                            <img src="/src/img/W3.jpg" alt="" style="width: 50%;max-height: 80vh;">
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="row justify-content-center">
		                            <h2>Comentarios</h2>
		                        </div>
		                        <div class="row justify-content-center my-3">

		                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="16" height="16"
		                                viewBox="0 0 1792 1792">
		                                <path
		                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
		                                    fill="#0BC9FF"></path>
		                            </svg>
		                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="16" height="16"
		                                viewBox="0 0 1792 1792">
		                                <path
		                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
		                                    fill="#0BC9FF"></path>
		                            </svg>
		                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="16" height="16"
		                                viewBox="0 0 1792 1792">
		                                <path
		                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
		                                    fill="#0BC9FF"></path>
		                            </svg>
		                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="16" height="16"
		                                viewBox="0 0 1792 1792">
		                                <path
		                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
		                                    fill="#0BC9FF"></path>
		                            </svg>
		                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="16" height="16"
		                                viewBox="0 0 1792 1792">
		                                <path
		                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
		                                    fill="#0BC9FF"></path>
		                            </svg>
		                        </div>
		                        <div class="row p-3">
		                            <p>
		                                Los <strong>comentarios</strong> son opiniones acerca de nuestro servicio que los
		                                miembros de nuestra gran familia nos comparten. El principal objetivo de FUN TRAINING es
		                                el bienestar de los miembros de la familia y su opinión nos ayuda a estar más unidos y
		                                comprometidos con el mejoramiento continuo. Conócenos, <strong>se parte de esta gran
		                                    familia y danos tu opinión en nuestro fan page</strong> FUN TRANING GYM. <strong
		                                    class="naranja">FUN TRANING GYM</strong>
		                            </p>
		                        </div>

		                    </div>

               			 </section>

		                <section class="row justify-content-around my-4">
		                    <div class="col-md-4">
		                        <div class="row">
		                            <div class="col-12 text-center">
		                                <img src="/src/img/fb.svg" alt="" style="width: 48px;height: 48px; margin: 0 auto;">
		                                <h4 class="azul">
		                                    Facebook
		                                </h4>
		                            </div>
		                        </div>
		                        <div class="row justify-content-center">
		                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffuntraininggym%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="row justify-content-center">
		                            <div class="col-12 text-center">
		                                <img src="/src/img/ig.svg" alt="" style="width: 48px;height: 48px; margin: 0 auto;">
		                                <h4 class="azul">
		                                    Instagram
		                                </h4>
		                            </div>
		                        </div>
		                        <div class="row justify-content-center">
		                            <blockquote style="width: 300px; height: 500px;" class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CC4SXpND1RG/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CC4SXpND1RG/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CC4SXpND1RG/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por Funtraining (@funtraininggym)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
		                        </div>
		                    </div>
		                </section>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL2.jpg" alt="Funtraining Plan Power"
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

									<p><strong>Capacidades básicas. </strong> (Resistencia, Fuerz, Velocidad y
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

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20Functional%20Coaching%20Session" target="_blank" class="btn btn-comprar">
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

									<span class="naranja text-center"><strong>PERSONAL ADVICE</strong></span>

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

									<p>Entrenamientos acordes a tus necesidades y disponibilidad detiempo. Disfruta de
										tiempo. Disfruta de 9, 12 o 16 sesiones de entrenamiento en el mes. Con el
										profesional que desees de nuestra familia y elige la hora del día en la que
										prefieres realizarlo.</p>

								</div>

							</div>

							<div class="col-12 ">

								<div class="row justify-content-center py-4">

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20functional%20Coaching%20Session" target="_blank" class="btn btn-comprar">
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

									<a href="https://api.whatsapp.com/send?phone=3235220130&text=Hola,%20estoy%20interesad@%20en%20el%20plan%20Fun%20%Nutritional" target="_blank" class="btn btn-comprar">
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



			<div class="col-12 my-2">

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
									es el deseo de encontrar tus límites, y
									extenderlos.
								</span>

							</h3>

							<p class="gris">

								

							</p>

						</div>

						<div class="row justify-content-center">

							<button class="btn btn-comprar">

								HAZTE MIEMBRO

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