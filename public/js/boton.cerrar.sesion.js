/*  Exit system buttom */
	$('.btn-exit-system').on('click', function(e){
		e.preventDefault();
		Swal.fire({
			title:'Estas seguro que deseas cerrar sesion?',
			text:"Estas a punto de cerrar sesion y salir del sistema",
			type: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, salir!',
			cancelButtonText: 'No, cancelar',
		}).then((result) => {
			if (result.value) {
				$("#logout").submit();
			}
		});
	});
