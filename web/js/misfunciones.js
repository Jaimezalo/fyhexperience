/**
 * Funciones auxiliares de javascripts
 */
function confirmarVolver() {
	if (confirm("¿Desea empezar de nuevo? \n Se perderán todos los cambios guardados")) {
		document.location.href = "?orden=Empezar";
	}
}

function avisoInterior() {
	alert('Esta opción no está disponible si escogiste "Sol y playa".')
}
