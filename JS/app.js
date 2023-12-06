var recorrido_id = document.getElementById("recorrido_id");
    var usuario_id = document.getElementById("usuario_id");

function rateV(value) {

    data = {
        "value" : value,
        "recorrido_id" : recorrido_id.value,
        "usuario_id" : usuario_id.value
    }
   
    $.ajax({

        url: "PHP/modulos_carga/cal_vehiculo.php",
        type: "POST",
        data: data,
        success: function (response){
            console.log(response);
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "Gracias por su aporte!",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

  }
  function rateC(valueC) {

    data = {
        "value" : valueC,
        "recorrido_id" : recorrido_id.value,
        "usuario_id" : usuario_id.value
    }
   
    $.ajax({

        url: "PHP/modulos_carga/cal_conductor.php",
        type: "POST",
        data: data,
        success: function (response){
            console.log(response);
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "Gracias por su aporte!",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

  }
  function rateR(valueR) {

    data = {
        "value" : valueR,
        "recorrido_id" : recorrido_id.value,
        "usuario_id" : usuario_id.value
    }
   
    $.ajax({

        url: "PHP/modulos_carga/cal_recorrido.php",
        type: "POST",
        data: data,
        success: function (response){
            console.log(response);
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "Gracias por su aporte!",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

  }


  