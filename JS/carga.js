$(document).ready(function() {
    // Eventos de click y envío de formularios
    $("#formCargaVehiculo").submit(function(event) {
        event.preventDefault();
        cargarDatos("PHP/carga/cargar_vehiculo.php", $(this));
    });

    $("#formCargaChofer").submit(function(event) {
        event.preventDefault();
        cargarDatos("PHP/carga/cargar_chofer.php", $(this));
    });

    $("#formCargaRecorrido").submit(function(event) {
        event.preventDefault();
        cargarDatos("PHP/carga/cargar_recorrido.php", $(this));
    });

    // Función para enviar datos por AJAX
    function cargarDatos(url, formulario) {
        $.ajax({
            type: "POST",
            url: url,
            data: new FormData(formulario[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                response = JSON.parse(response);
                if (response.status === "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: response.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            }
        });
    }
});