var type;

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
