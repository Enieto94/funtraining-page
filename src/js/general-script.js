$("#btn-resultado-container").click(function () {
	let estatura = $("#estatura").val();
	let peso = $("#peso").val();

	let imm = peso / ((estatura * estatura) / 10000);
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

});

$("#burger-menu").click(function () {
	$("header").toggleClass("active");
});

$("#btn-cerrar-popup").click(function () {
	$("#popup-container").removeClass("active")
});

$('#btnEnviar').click(function () {
	var url = 'http://localhost:8000/api/newsletterusers';
	var data = { name: 'isabel', email: 'isabel@gmail.com' };
	
	fetch(url, {
		method: 'POST', // or 'PUT'
		body: JSON.stringify(data), // data can be `string` or {object}!
		headers: {
			'Content-Type': 'application/json'
		}

	})
		.then(function (response) {
			if (response.ok) {
				return response.text()
			} else {
				throw "Error en la llamada Ajax";
			}

		})
		.then(function (texto) {
			console.log(texto);
		})
		.catch(function (err) {
			console.log(err);
		});
});