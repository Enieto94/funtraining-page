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
					<path fill="#fff" d="M8.27,3L3,8.27V15.73L8.27,21H15.73L21,15.73V8.27L15.73,3M8.41,7L12,10.59L15.59,7L17,8.41L13.41,12L17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41" />
				</svg>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 p-4" id="resultado-container">
					<h2>Tu Índice de masa muscular es de <span class="azul" id="resultado-calculadora"></span> <div class="naranja" id="diagnostico"></div></h2>
					<h3>Gracias por usar nuestra calculadora, si deseas una asesoría más personalizada déjanos tu nombre y correo electrónico para estar en contacto</h3>
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

			<section class="col-12"  id="banner-img-container">

				<div class="row">

					<div class="banner-layer col-12">

						<div class="row banner-layer-row bg-negro-70 justify-content-center align-items-center" >

							<img id="logo-banner" src="/src/img/logo.png" alt="Funtraining Logo" title="Funtraining Logo">



						</div>



						<div class="row banner-layer-row bg-blanco-70" >



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

					<img src="/src/img/stars.svg" alt="Funtraining estrellas" title="Funtraining estrellas" id="stars-svg">

					<hr>

					<div class="col-md-7 ">

						<div class="row justify-content-center text-center py-4">

							<h2>

								<cite class="gris-oscuro"><span class="cita-1 naranja">FAMILIA,</span> BÁSICAMENTE UN EQUIPO, EL MÁS UNIDO, EN EL QUE TODOS SE APOYAN PARA LOGRAR UN OBJETIVO, <span class="cita-1 azul">TU OBJETIVO</span></cite>

							</h2>

						</div>

					</div>

				</div>

			</section>



			<section class="col-12 py-5" id="servicios-bg">

				<div class="row align-items-center justify-content-around h-100">

					<div class="col-md-5 col-10">

						<div class="row align-items-center">

							<h4 id="servicios-text">En <span class="naranja">FUN</span> <span class="azul">TRAINING</span> brindamos productos y servicios de Entrenamieto Presencial y Online que contribuyen con el desarrollo integral del cuerpo y la mente, a través de programas que promueven el bienestar y mejoran la calidad de vida de cada uno de los integrantes de nuestra gran familia.</h4>

						</div>

					</div>

					<div class="col-md-5">

						<div class="row justify-content-center">

							<div class="col-5 my-2">

								<div class="row align-items-center">

									<div class="col-12 col-md-3">

										<div class="row">

											<img class="img-servicios" src="/src/img/profesionales-especializados.svg" alt="Funtraining Servicios" title="Funtraining Servicios">

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

											<img class="img-servicios" src="/src/img/equipo-moderno.svg" alt="Funtraining Equipo Moderno" title="Funtraining Equipo Moderno">

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

											<img class="img-servicios" src="/src/img/asesoria-online.svg" alt="Funtraining Asesoría Online" title="Funtraining Asesoría Online">

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

											<img class="img-servicios" src="/src/img/asesoria-personalizada.svg" alt="Funtraining Asesoría Personalizada" title="Funtraining Asesoría Personalizada">

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

											<img class="img-servicios" src="/src/img/orientacion-nutricional.svg" alt="">

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

											<img class="img-servicios" src="/src/img/valoracion-fisica.svg" alt="Funtraining Valoración Física" title="Funtraining Valoración Física">

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

						<img class="img-servicios" src="/src/img/clientes-felices.svg" alt="Funtraining Clientes Felices" title="Funtraining Clientes Felices">

						<p class="cifras my-0">+765</p>

						<h4 class="azul my-0">CLIENTES FELICES</h4>

						<p class="mes">CADA MES</p>

					</div>



					<div class="col-md-3 text-center borde-lateral-naranja py-4" >

						<img class="img-servicios" src="/src/img/sesiones-online.svg" alt="Funtraining Sesiones Online" title="Funtraining Sesiones Online">

						<p class="cifras my-0">+525</p>

						<h4 class="azul my-0">SESIONES ONLINE</h4>

						<p class="mes">CADA MES</p>

					</div>



					<div class="col-md-3 text-center py-4">

						<img class="img-servicios" src="/src/img/planes-online.svg" alt="Funtraining Planes Online" title="Funtraining Planes Online">

						<p class="cifras my-0">+765</p>

						<h4 class="azul my-0">PLANES ONLINE</h4>

						<p class="mes">CADA MES</p>

					</div>

				</div>

			</section>



			<section class="col-12 my-2">

				<div class="row justify-content-end align-items-center text-center">

					<div class="trapecio pos-relative">

						<img id="img-calcula-imm" src="/src/img/W1.jpg" alt="">

						<div class="col-md-6 py-4 h-100" id="calcula-peso-container">

							<div class="row justify-content-center">

								<img class="img-servicios" src="/src/img/calcula-tu-imm.svg" alt="Funtraining Calcula tu IMM" title="Funtraining Calcula tu IMM">

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

											<img src="/src/img/corazon.svg" alt="Funtraining Resultado" title="Funtraining Resultado">

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

					<div class="col-10 col-md-6">

						<div class="row justify-content-center text-center">

							<cite class="frase-gris">

								TENGO EL PODER DE CREAR LA VIDA QUE DESEO

							</cite>

						</div>

					</div>

				</div>

			</section>



			<section class="col-12">

				<div class="row justify-content-around">

					<div class="col-md-4">

						<div class="row">

							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL1.jpg" alt="">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraing Plan Classic" title="Funtraing Plan Classic">

									<span class="blanco"><strong>FUN TRAINING</strong></span>

									<span class="naranja"><strong>CLASSIC</strong></span>

								</div>

							</div>

							<div class="w-100 planes-precio d-flex-flex-column px-3 px-md-5">

								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">MENSUAL</span><span class="precio">$120.000</span>

								</p>

								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">TRIMESTRAL</span><span class="precio">$300.000</span>

								</p>

								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">SEMESTRAL</span><span class="precio">$540.000</span>

								</p>

								<div class="plan-item py-3">

									<p><strong>12 sesiones</strong> de entrenamiento semipersonalizado por mes</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>1 Open</strong> para que entrenes con un acompañante los días sábados</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Bono de $20.000</strong>para la valoración inicial</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>Bono de $30.000</strong> para la valoración inicial</p>

								</div>

							</div>

						</div>

						<div class="col-12">

							<div class="row justify-content-center py-4">

								<div class="btn btn-comprar">

									COMPRAR

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="row">

							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL2.jpg" alt="Funtraining Plan Power" title="Funtraining Plan Power">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="Funtraining Plan Power" title="Funtraining Plan Power">

									<span class="blanco mb-0"><strong>FUN TRAINING</strong></span>

									<span class="naranja"><strong>POWER</strong></span>

								</div>



							</div>

							<div class="w-100 planes-precio d-flex-flex-column px-3 px-md-5">

								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">MENSUAL</span><span class="precio">$150.000</span>

								</p>



								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">TRIMESTRAL</span><span class="precio">$390.000</span>

								</p>



								<p class="w-100 d-flex flex-row justify-content-between">

									<span class="naranja">SEMESTRAL</span><span class="precio">$720.000</span>

								</p>



								<div class="plan-item py-3">

									<p><strong>Sesiones ilimitadas</strong> de entrenamiento semipersonalizado por mes</p>

								</div>



								<div class="plan-item py-3">

									<p><strong>1 Open</strong> para que entrenes con un acompañante los días sábados</p>

								</div>



								<div class="plan-item py-3">

									<p><strong>Bono de $40.000</strong> para la valoración inicial</p>

								</div>



								<div class="plan-item py-3">

									<p><strong>Bono de $70.000</strong> para el plan nutricional trimestral</p>

								</div>

							</div>

						</div>

						<div class="col-12">

							<div class="row justify-content-center py-4">

								<div class="btn btn-comprar">

									COMPRAR

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="row">

							<div class="d-flex flex-column w-100 pos-relative">

								<img class="img-responsive" src="/src/img/PL3.jpg" alt="Funtraining Plan Home" title="Funtraining Plan Home">

								<div class="plan-description d-flex flex-column align-items-center">

									<img src="/src/img/plan.svg" alt="">

									<span class="blanco mb-0"><strong>FUN TRAINING</strong></span>

									<span class="naranja"><strong>HOME</strong></span>

								</div>



							</div>

							<div class="w-100 planes-precio d-flex-flex-column px-3 px-md-5">

								<p class="w-100 d-flex flex-row justify-content-between" style="margin-top: 35px; margin-bottom: 35px;">

									<span class="naranja">CLASES ONLINE</span><span class="precio">$120.000</span>

								</p>

								<div class="plan-item py-3">

									<p><strong>12 sesiones</strong> de entrenamiento semipersonalizado por mes <span class="azul">Lunes, Miércoles y Viernes</span> 6:30 a.m - 7:30 a.m ó 7:00 p.m. a 8:00 p.m.</p>

								</div>

								<div class="plan-item py-3">

									<p><strong>1 open</strong> para que entrenes con un acompañante los días sábados</p>

								</div>

								

								<div class="plan-item py-3">

									<p><strong>Bono de $20.000</strong> para la valoración inicial</p>

								</div>



								<div class="plan-item py-3">

									<p><strong>Bono de $30.000 </strong> para el plan nutricional trimestral</p>

								</div>



							</div>

						</div>

						<div class="col-12">

							<div class="row justify-content-center py-4">

								<div class="btn btn-comprar">

									COMPRAR

								</div>

							</div>

						</div>

					</div>

					

				</div>

			</section>



			<div class="col-12 my-2">

				<div class="row">

					<div class="trapecio-invertido pos-relative">

						<div class="col-md-5 cita-2" >

							<div class="row justify-content-center">

								<cite>IR JUNTOS ES <br><strong class="azul">COMENZAR,</strong> <br> MANTENERSE <br> JUNTOS ES <br> <strong class="azul">PROGRESAR,</strong> TRABAJAR <br> JUNTOS  ES <br> <strong class="naranja">TRIUNFAR</strong></cite>

							</div>

						</div>

						<div class="col-md-4 trapecio-invertido-img">

							<div class="row">

								<img class="img-responsive" src="/src/img/W3.jpg" alt="Funtraining Frase Motivacional" title="Funtraining Frase Motivacional">

							</div>

						</div>

					</div>

				</div>

			</div>



			<div class="col-12 my-5">

				<div class="row justify-content-center">

					<div class="col-md-6 text-center">

						<img id="plan-nutricional-img" src="/src/img/plan-nutricional.svg" alt="">

						<h4 class="gris-oscuro">FUN TRAINING</h4>

						<h2 class="azul" id="plan-nutricional-title">PLAN NUTRICIONAL</h2>



					</div>

					

				</div>

				

				<div class="row justify-content-center" class="plan-nutricional-container">

					<div class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2">

						

						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Mensual" title="Funtraining Plan Mensual">

						</div>

						<h2 class="gris-oscuro">MENSUAL</h2>

						<span class="azul">$99,900</span>

						

					</div>

					<div class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2 borde-lateral-naranja">

						

						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Bimensual" title="Funtraining Plan Bimensual">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Bimensual" title="Funtraining Plan Bimensual">

						</div>



						<h2 class="gris-oscuro">BIMENSUAL</h2>

						<span class="azul">$149,900</span>

						

					</div>

					<div class="plan-nutricional-item d-flex flex-column justify-content-center col-md-3 text-center py-2">

						

						<div class="row justify-content-center">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral" title="Funtraining Plan Trimestral">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral" title="Funtraining Plan Trimestral">

							<img class="estrella" src="/src/img/estrella.svg" alt="Funtraining Plan Trimestral" title="Funtraining Plan Trimestral">

						</div>



						<h2 class="gris-oscuro">TRIMESTRAL</h2>

						<span class="azul">$199,900</span>

						

					</div>

				</div>

			</div>



			<section class="col-12" id="section-descuento">

				<div class="row align-items-center justify-content-center ">

					<div class="col-md-6">

						<div class="row">

							<img src="/src/img/f1.png" alt="Funtraining Se Parte de La Familia" title="Funtraining Se Parte de La Familia" class="img-responsive">

						</div>

					</div>



					<div class="col-10 col-md-5" style="color: #ffff;">

						<div class="row">

							<h2>

								SE PARTE DE  <br><span class="azul">LA FAMILIA</span> <br><span class="naranja">FUN</span> <span class="azul">TRAINING</span>

							</h2>

							<h3>

								Ingresa ahora y obtén hasta un <span class="naranja">10% de descuento</span> en todos nuestros planes.

							</h3>

							<p class="gris">

								Lo que te impulsa, lo que más te motiva es el deseo de encontrar tus límites, y extenderlos.

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