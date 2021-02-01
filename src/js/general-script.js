$(document).ready(function(){
	
	
	$("#btn-resultado-container").click(function(){
		let estatura = $("#estatura").val();
		let peso = $("#peso").val();
	
		let imm = peso / ((estatura * estatura)/10000);
		$("#popup-container").addClass("active");
		$("#resultado-calculadora").html(imm.toFixed(3));

		if(imm < 18.5){

			$("#diagnostico").html('Tu peso es menor al normal');
		}else if(imm < 24.5){
			$("#diagnostico").html('normal');
		}else if(imm < 30){
			$("#diagnostico").html('cuidado');
		}else if(imm > 30){
			$("#diagnostico").html('Sobrepeso');

		}

	});

	$("#btn-cerrar-popup").click(function(){
		$("#popup-container").removeClass("active")
	})
});