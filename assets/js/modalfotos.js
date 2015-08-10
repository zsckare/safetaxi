function mostrareldiv() {
document.getElementById("modal").style.display = "block" ; 
$("#cortina").removeClass("no-mostrar");
$("#cortina").addClass("cortina");
}

function ocultareldiv() {
document.getElementById("modal").style.display = "none" ; 
$("#cortina").removeClass("cortina");
$("#cortina").addClass("no-mostrar");
}
function selectImage(ruta) {
	console.log(""+ruta);
	var anterior=document.getElementById("imagenoculta").value;
	console.log("anterior"+anterior);

	document.getElementById("imagenoculta").value=ruta;
	var nueva=document.getElementById("imagenoculta").value;
	console.log("nueva"+nueva);
	ocultareldiv();
    sweetAlert("Fotografia Seleccionada","", "info");
}