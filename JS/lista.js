var type;
var id;

function tipo(num){
     type = num;
}

document.addEventListener('DOMContentLoaded', function () {
    var rows = document.querySelectorAll('#tabla');

    rows.forEach(function (row) {
        row.addEventListener('click', function () {
            var value = this.getAttribute('value');

            $.ajax({

                url: "editar.php",
                method: "POST",
                data: {
                    "id" : value,
                    "type" : type
                },
                success: function(response){
                }

            })

        });
    });
});

// Event listener para abrir modal al hacer clic en el botón de Editar
$('.editar-btn').on('click', function () {
    var row = $(this).closest('.tabla'); 
    type = row.data('type');
    id = row.data('id');

        // Llenar los campos del formulario del modal según la entidad
        if (type === 1) { // Vehículo
            $('#placa').val(row.find('td:eq(0)').text());
            $('#modelo').val(row.find('td:eq(1)').text());
            // Otros campos según la entidad
        } else if (type === 2) { // Chofer
            $('#nombreChofer').val(row.find('td:eq(0)').text());
            $('#dniChofer').val(row.find('td:eq(1)').text());
            // Otros campos según la entidad
        } else if (type === 3) { // Recorrido
            $('#localidadInicio').val(row.find('td:eq(0)').text());
            $('#localidadFin').val(row.find('td:eq(1)').text());
            // Otros campos según la entidad
        }
    
        // Aquí puedes abrir el modal según el tipo de entidad
        if (type === 1) {
            $('#modalVehiculo').modal('show');
        } else if (type === 2) {
            $('#modalChofer').modal('show');
        } else if (type === 3) {
            $('#modalRecorrido').modal('show');
        }
});

// Event listener para hacer la solicitud AJAX cuando se hace clic en "Actualizar" dentro del modal
$('#updateVehiculoBtn').on('click', function () {
    var POSTid = id;
    var type = 1; // Tipo de entidad para vehículos

    // Aquí puedes hacer la solicitud AJAX para actualizar los datos en la base de datos
    $.ajax({
        url: 'modal.php',
        method: 'POST',
        data: {
            id: POSTid,
            type: type,
            // Agrega otros datos del formulario según la entidad (vehículo en este caso)
            placa: $('#placa').val(),
            modelo: $('#modelo').val(),
            // Otros campos según la entidad
        },
        success: function (response) {
            // Manejar la respuesta de la actualización (puede ser un mensaje de éxito o error)
            console.log(response);

            // Analizar la respuesta JSON
            var result = JSON.parse(response);

            // Mostrar SweetAlert según el resultado
            if (result.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización exitosa',
                    text: 'Los datos se actualizaron correctamente.',
                }).then((result) => {
                    // Recargar la página después de cerrar SweetAlert
                    if (result.isConfirmed || result.isDismissed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de actualización',
                    text: 'Hubo un error al actualizar los datos. Inténtalo de nuevo.',
                });
            }
        }
    });
});

// Event listener para hacer la solicitud AJAX cuando se hace clic en "Actualizar" dentro del modal para choferes
$('#updateChoferBtn').on('click', function () {
    var POSTid = id;
    var type = 2; // Tipo de entidad para choferes

    // Aquí puedes hacer la solicitud AJAX para actualizar los datos en la base de datos
    $.ajax({
        url: 'modal.php',
        method: 'POST',
        data: {
            id: POSTid,
            type: type,
            // Agrega otros datos del formulario según la entidad (chofer en este caso)
            nombreChofer: $('#nombreChofer').val(),
            dniChofer: $('#dniChofer').val(),
            // Otros campos según la entidad
        },
        success: function (response) {
            // Manejar la respuesta de la actualización (puede ser un mensaje de éxito o error)
            console.log(response);

            // Analizar la respuesta JSON
            var result = JSON.parse(response);

            // Mostrar SweetAlert según el resultado
            if (result.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización exitosa',
                    text: 'Los datos se actualizaron correctamente.',
                }).then((result) => {
                    // Recargar la página después de cerrar SweetAlert
                    if (result.isConfirmed || result.isDismissed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de actualización',
                    text: 'Hubo un error al actualizar los datos. Inténtalo de nuevo.',
                });
            }
        }
    });
});

// Event listener para hacer la solicitud AJAX cuando se hace clic en "Actualizar" dentro del modal para recorridos
$('#updateRecorridoBtn').on('click', function () {
    var POSTid = id;
    var type = 3; // Tipo de entidad para recorridos

    // Aquí puedes hacer la solicitud AJAX para actualizar los datos en la base de datos
    $.ajax({
        url: 'modal.php',
        method: 'POST',
        data: {
            id: POSTid,
            type: type,
            // Agrega otros datos del formulario según la entidad (recorrido en este caso)
            localidadInicio: $('#localidadInicio').val(),
            localidadFin: $('#localidadFin').val(),
            cooperativa: $('#cooperativa').val(),
            // Otros campos según la entidad
        },
        success: function (response) {
            // Manejar la respuesta de la actualización (puede ser un mensaje de éxito o error)
            console.log(response);

            // Analizar la respuesta JSON
            var result = JSON.parse(response);

            // Mostrar SweetAlert según el resultado
            if (result.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización exitosa',
                    text: 'Los datos se actualizaron correctamente.',
                }).then((result) => {
                    // Recargar la página después de cerrar SweetAlert
                    if (result.isConfirmed || result.isDismissed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de actualización',
                    text: 'Hubo un error al actualizar los datos. Inténtalo de nuevo.',
                });
            }
        }
    });
});

// Event listener para hacer clic en cualquier botón de Eliminar
$('.eliminar-btn').on('click', function () {
    var row = $(this).closest('.tabla');
    var id = row.data('id');
    var type = row.data('type');

    // Mostrar un SweetAlert de confirmación antes de realizar la eliminación
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción no se puede deshacer.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Hacer la solicitud AJAX para eliminar la entidad
            $.ajax({
                url: 'eliminar.php',
                method: 'POST',
                data: {
                    id: id,
                    type: type
                },
                success: function (response) {
                    // Analizar la respuesta JSON
                    var result = JSON.parse(response);

                    // Mostrar SweetAlert según el resultado
                    if (result.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Eliminación exitosa',
                            text: 'La entidad se eliminó correctamente.',
                        }).then((result) => {
                            // Recargar la página después de cerrar SweetAlert
                            if (result.isConfirmed || result.isDismissed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error de eliminación',
                            text: 'Hubo un error al eliminar la entidad. Inténtalo de nuevo.',
                        });
                    }
                }
            });
        }
    });
});
