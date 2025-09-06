// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

const topGenres = JSON.parse(document.getElementById("topGenresValue").value);

// Crear el gráfico
var ctxd = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctxd, {
    type: "bar",
    data: {
        labels: [topGenres[0].name, topGenres[1].name, topGenres[2].name],
        datasets: [
            {
                label: "Cantidad de visitas",
                data: [
                    topGenres[0].visits,
                    topGenres[1].visits,
                    topGenres[2].visits,
                ],
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1,
            },
        ],
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0,
            },
        },
        scales: {
            xAxes: [
                {
                    time: { unit: "date" },
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2],
                    },
                    ticks: {
                        beginAtZero: true,
                        precision: 0, // Sin decimales
                        // Opcional: puedes agregar stepSize: 1000, para controlar los saltos
                        // stepSize: 1000,
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
