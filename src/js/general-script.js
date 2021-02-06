function ApiCall(endpointUri, httpMethod, dataToSend) {
	const API_URL = '../../../api';
	// const API_URL = 'https://api.funtraining.net/api';

	return fetch(`${API_URL}${endpointUri}`, {
		headers: {
			'Content-Type': 'application/json'
		},
		method: httpMethod, // or 'PUT'
		body: JSON.stringify(dataToSend), // data can be `string` or {object}!
	})
	.then((response) => response.json())
	.then((data) => {
		if (data.error) {
			throw error;
		}
		return data;
	})
	.catch(error => {
		return error;
	});
}

$("#btn-resultado-container").click(function () {
	if($("#estatura").val() === '' && $("#peso").val() === ''){
		alert('Los campos no pueden estar vacios');
	}else{

		let estatura = $("#estatura").val();
		let peso = $("#peso").val();
		let imm = parseFloat(peso) / (Math.pow(estatura,2) / 10000);
		
		$("#popup-container").addClass("active");
		$("#resultado-calculadora").html(imm.toFixed(3));
	
		if (imm < 18.5) {
	
			$("#diagnostico").html('Peso inferior al normal');
		} else if (imm < 24.5) {
			$("#diagnostico").html('Peso dentro de lo normal');
		} else if (imm < 30) {
			$("#diagnostico").html('Peso superior al normal');
		} else if (imm > 30) {
			$("#diagnostico").html('Sobrepeso');
	
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

	try {
		// const { name, email, created_at } = await ApiCall(
		const newsletterSuscribed = await ApiCall(
			'/newsletterusers',
			'POST',
			{
				name: nombre,
				email: correo
			}
			
			);
			// alert(`Hola ${name}, gracias por suscribirte.`);
			swal("Datos registrados", `Hola ${newsletterSuscribed.name}, gracias por suscribirte a nuestro newsletter`, "success");
	
			console.log("NEWSLETTER: ", newsletterSuscribed);
		

	} catch (error) {
		swal("Error", `${newsletterSuscribed.name}, el registro ya existe `, "error");
		console.warn(error);
	}
});