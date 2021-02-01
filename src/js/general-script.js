$(document).ready(function(){
	
	
	$("#btn-resultado-container").click(function(){
		let estatura = $("#estatura").val();
		let peso = $("#peso").val();
	
		let imm = peso / ((estatura * estatura)/10000);
		$("#popup-container").addClass("active");
		$("#resultado-calculadora").html(imm.toFixed(3));

		if(imm < 18.5){

			$("#diagnostico").html('Peso inferior al normal');
		}else if(imm < 24.5){
			$("#diagnostico").html('Peso dentro de lo normal');
		}else if(imm < 30){
			$("#diagnostico").html('Peso superior al normal');
		}else if(imm > 30){
			$("#diagnostico").html('Sobrepeso');

		}

	});

	$("#burger-menu").click(function(){
		$("header").toggleClass("active");
	})

	$("#btn-cerrar-popup").click(function(){
		$("#popup-container").removeClass("active")
	})
});