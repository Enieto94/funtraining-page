const API_URL = 'http://localhost:8000/api';
// const API_URL = 'https://api.funtraining.net/api';

$("#btn-resultado-container").click(function () {
	if($("#estatura").val() === '' && $("#peso").val() === ''){
		alert('Los campos no pueden estar vacios');
	}else{

		let estatura = $("#estatura").val();
		let peso = $("#peso").val();
		let imm = parseFloat(peso) / (Math.pow(estatura,2) / 10000);
		
		$("#popup-container").addClass("active");
		$("#resultado-calculadora").html(imm.toFixed(3));
	
		if (imm < 18.4) {
	
			$("#diagnostico").html('Peso bajo: Estar por debajo de un peso ideal no es estar saludable es hora de aumentar la masa muscular. <br> <br> Con <span class="naranja">FUN TRAINING</span> consigue el peso ideal y alcanza tus objetivos. No lo pienses ');
		} else if (imm < 24.9) {
			$("#diagnostico").html('Peso Normal: Felicidades estas en un peso adecuado, no lo descuides sigue esforzándote. <br> <br> Con <span class="naranja">FUN TRAINING</span>  Mantendrás tu peso y mejoraras tus habilidades. No lo pienses más ');
		} else if (imm < 30) {
			$("#diagnostico").html('Sobrepeso superior al normal. Es Hora de prestarle atención a tus hábitos  diarios, realiza como mínimo actividad física 3 veces por semana.  <br> <br> Con <span class="naranja">FUN TRAINING</span> BALANCE dale un cambio a tu vida y mejora tu bienestar');
		} else if (imm < 34.9) {
			$("#diagnostico").html('Obesidad Grado 3: Un IMC elevado es un importante factor de riesgo de enfermedades no transmisibles. <br> <br> Con <span class="naranja">FUN TRAINING</span> disminuye el riesgo de enfermedades y luce el cuerpo que quieres. No lo pienses más ');
	
		}else if (imm < 39) {
			$("#diagnostico").html('Obesidad Grado II: Cuida y selecciona mejor tus alimentos en el día a día. Realiza actividad física con mayor frecuencia. En  <span class="naranja">FUN TRAINING</span> encontraras el apoyo que necesitas para mejorar tus hábitos y lograr tus objetivos.');
	
		}else if (imm > 40) {
			$("#diagnostico").html('Obesidad Grado III: ALERTA ROJA el exceso de peso puede ocasionar grandes problemas de salud. Inicia con pequeños cambios y actividad física a diario.  En  <span class="naranja">FUN TRAINING</span> encontraras el apoyo  que necesitas para mejorar tus hábitos y lograr tus objetivos.');
	
		}
	}

});

$("#burger-menu").click(function () {
	$("header").toggleClass("active");
});

$("#btn-cerrar-popup").click(function () {
	$("#popup-container").removeClass("active")
});

$('#btnEnviar').click(async function (e) {
	let nombre = $('#nombre').val();
	nombre.toUpperCase();
	const correo = $('#correo').val();
	const cellphone = $('#celular').val();
	
	try {
		const serverResponse = await axios.post(`${API_URL}/newsletterusers`, { name: nombre, email : correo, cellphone: cellphone});
		swal("Datos registrados", `Hola ${serverResponse.data.name}, gracias por suscribirte a nuestro newsletter`, "success");

	} catch (error) {
		console.warn(error);
		swal({
			icon: "error",
			title: "Ups...",
			text: "Ha surgido un error interno, intentalo mas tarde"
		});
	}
	$('input').val("");
});