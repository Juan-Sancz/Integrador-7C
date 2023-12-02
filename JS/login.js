var log = document.getElementById("log");
var log_pass = document.getElementById("log_pass");

 console.log(log);

 

var enviar = document.getElementById("enviar");
enviar.addEventListener("click", function(){

    var data = {
        "log" : log.value,
        "log_pass" : log_pass.value
    }

    $.ajax({
        url: "../login/verif_login.php",
        type: "POST",
        data: data,
        success: function(result){
            console.log(result);
            let timerInterval;
            Swal.fire({
                title: 'Cargando...',
                timer: 1000,
                didOpen: () => {
                    Swal.showLoading();
                    const b = Swal.getHtmlContainer().querySelector('b');
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft();
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Sesion iniciada',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location.replace("../index.php");
                    });
                }
            });
        }
    })
})