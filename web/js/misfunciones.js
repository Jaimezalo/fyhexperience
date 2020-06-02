/**
 * Funciones auxiliares de javascripts
 */
function confirmarVolver() {
	if (confirm("¿Desea empezar de nuevo? \n Se perderán todos los cambios guardados")) {
		document.location.href = "?orden=Empezar";
	}
}
