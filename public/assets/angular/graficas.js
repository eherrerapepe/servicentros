$(document).ready(function () {
    var ctx = document.getElementById("graphicBar");
    var myFirstBar = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Colombia", "Ecuador", "Peru", "Chile"],
            datasets: [{
                label: '# de Servicentros',
                data: [12, 19, 3, 5]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});