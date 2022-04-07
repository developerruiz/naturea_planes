formulario.addEventListener('submit', (e) => {
	// e.preventDefault();

	const terminos = document.getElementById('terminos');
	
	if (terminos.checked) {
		// formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 10000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
	e.preventDefault();

		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});
