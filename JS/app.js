function rate(value) {
   

    $.ajax({

        url: "../PHP/modulos_carga/cal_vehiculo.php",
        type: "POST",
        data: {"value" : value},
        success: function (response){
            console.log(response);
        }

    })

  }
  