$(document).ready(function(){

	$("form").submit(validarForm);

});


function validarForm() {
	// verifcar campos que son requeridos

	// mostrar alerta
	var codigo = $("input[name=codigo]").val();
	var nombre = $("input[name=nombre]").val();
	var marca = $("input[name=marca]").val();
	if (codigo == "" || nombre == "" || marca == "") {
		$(".alert ul").html("");
		if (codigo == "") {
			$("<li></li>").html("Falta Código").appendTo(".alert ul");
		}
		if (nombre == "") {
			$("<li></li>").html("Falta Nombre").appendTo(".alert ul");
		}
		if (marca == "") {
			$("<li></li>").html("Falta Marca").appendTo(".alert ul");
		}
		$(".alert").show();
		// return false hace que el formulario no se envíe
		return false;
	}
}