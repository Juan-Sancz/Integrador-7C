var username = document.getElementById("username");
var email = document.getElementById("email");
var password = document.getElementById("password");

 console.log(username);

 

var enviar = document.getElementById("enviar");
enviar.addEventListener("click", function(){

    var data = {
        "username" : username.value,
        "email" : email.value,
        "password" : password.value
    }

    $.ajax({
        url: "../login/modulo_reg.php",
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
                        title: 'Registrado con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        // Use window.location.replace() instead of assigning to it
                        window.location.replace("../index.php");
                    });
                }
            });
        },
        error: function(error){
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
                        icon: 'error',
                        title: 'Email repetido',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        // Use window.location.replace() instead of assigning to it
                        window.location.replace("register.php");
                    });
                }
            });
        }
    })
})