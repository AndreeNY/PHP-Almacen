$(document).ready(function(){

	$("form").submit(validarForm);

});


function validarForm() {
	// verifcar campos que son requeridos

	// mostrar alerta
	$(".alert").show();
	// return false hace que el formulario no se envíe
	return false;
}