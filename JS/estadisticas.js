document.addEventListener("DOMContentLoaded", function () {

var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['1', '2', '3', '4', '5'],
        datasets: [{
            data: [0, 0, 0, 0, 0], // Initialize with zeros or appropriate default values
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F']
        }]
    }
});

document.getElementById("boton_veh").addEventListener("click", function(){
    var select_veh = document.getElementById("select_veh");
    var selected_veh = select_veh.options[select_veh.selectedIndex];
    var value_veh = selected_veh.value;
    document.getElementById("titulo_stats").textContent = "Calificaciones de vehiculos";

    // Make an AJAX request to your PHP file
    $.ajax({
        url: 'PHP/estadisticas_veh.php',
        type: 'POST',
        data: {
            "value_veh" : value_veh
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            // Destroy the existing chart
            myPieChart.destroy();
            
            // Create a new chart with the updated data
            myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['1', '2', '3', '4', '5'],
                    datasets: [{
                        data: Object.values(data),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F'],
                        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F']
                    }]
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data: ', error);
        }
    });
});

document.getElementById("boton_cho").addEventListener("click", function(){
    var select_cho = document.getElementById("select_cho");
    var selected_cho = select_cho.options[select_coh.selectedIndex];
    var value_cho = selected_cho.value;
    document.getElementById("titulo_stats").textContent = "Calificaciones de conductores";
    // Make an AJAX request to your PHP file
    $.ajax({
        url: 'PHP/estadisticas_cho.php',
        type: 'POST',
        data: {
            "value_cho" : value_cho
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            // Destroy the existing chart
            myPieChart.destroy();
            
            // Create a new chart with the updated data
            myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['1', '2', '3', '4', '5'],
                    datasets: [{
                        data: Object.values(data),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F'],
                        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F']
                    }]
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data: ', error);
        }
    });
});

document.getElementById("boton_rec").addEventListener("click", function(){
    var select_rec = document.getElementById("select_rec");
    var selected_rec = select_rec.options[select_rec.selectedIndex];
    var value_rec = selected_rec.value;
    document.getElementById("titulo_stats").textContent = "Calificaciones de recorridos";
    // Make an AJAX request to your PHP file
    $.ajax({
        url: 'PHP/estadisticas_rec.php',
        type: 'POST',
        data: {
            "value_rec" : value_rec
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            // Destroy the existing chart
            myPieChart.destroy();
            
            // Create a new chart with the updated data
            myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['1', '2', '3', '4', '5'],
                    datasets: [{
                        data: Object.values(data),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F'],
                        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#51E82F', '#EA2F2F']
                    }]
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data: ', error);
        }
    });
})
});
