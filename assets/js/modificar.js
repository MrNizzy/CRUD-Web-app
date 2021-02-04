function eliminar() {
    Swal.fire({
        title: '¿Deseas eliminar el registro?',
        text: "¡Esta acción es irreversible!",
        icon: 'warning',
        showCancelButton: true,
        position: 'top',
        confirmButtonColor: '#5e83a8',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: '¡Eliminada!',
                text: 'La entrada ha sido eliminada.',
                icon: 'success',
                position: 'top',
            })
        }
    })
}

function SaveSuccess() {
    Swal.fire({
        icon: 'success',
        title: 'Entrada creada correctamente',
        showConfirmButton: false,
        timer: 2000
    })
}

function configSuccess() {
    Swal.fire({
        icon: 'success',
        title: 'Datos actualizados',
        showConfirmButton: false,
        timer: 2000
    })
}
