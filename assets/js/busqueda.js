

function modalbusqueda () {
	$("#cortina").removeClass("no-mostrar");
	$("#cortina").addClass("mostrar");
	$("#modalbusqueda").removeClass("no-mostrar");
	$("#modalbusqueda").addClass("mostrar");
	document.getElementById('icon_prefix').focus();
}
function ocultar() {
	$("#cortina").removeClass("mostrar");
	$("#cortina").addClass("no-mostrar");
	$("#modalbusqueda").removeClass("mostrar");
	$("#modalbusqueda").addClass("no-mostrar");
}