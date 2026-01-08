// Set new default font family and font color to mimic Bootstrap's default styling
document.addEventListener("livewire:navigated", () => {
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    function number_format(number, decimals = 0, dec_point, thousands_sep) {
        number = (number + "").replace(",", "").replace(" ", "");
        var n = !isFinite(+number) ? 0 : +number;
        var sep = typeof thousands_sep === "undefined" ? "," : thousands_sep;
        var dec = typeof dec_point === "undefined" ? "." : dec_point;

        var roundedNumber = Math.round(n);
        var s = roundedNumber.toString();

        if (s.length > 3) {
            s = s.replace(/\B(?=(\d{3})+(?!\d))/g, sep);
        }

        return s;
    }

    const topVisits = JSON.parse(
        document.getElementById("topSongVisitsValue").value
    );

    if (topVisits.length < 6) {
        if (window.innerWidth <= 1700) {
            var ctx = document.getElementById("myAreaSongChart");
            var myLineChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        topVisits[0].name,
                        topVisits[1].name,
                        topVisits[2].name,
                    ],
                    datasets: [
                        {
                            label: "Cantidad de visitas",
                            data: [
                                topVisits[0].visits,
                                topVisits[1].visits,
                                topVisits[2].visits,
                            ],
                            backgroundColor: "rgba(255, 182, 193, 0.3)", // rosa pastel con más transparencia
                            borderColor: "rgba(255, 182, 193, 1)",
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
                                time: {
                                    unit: "date",
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                },

                                ticks: {
                                    maxTicksLimit: 7,
                                    autoSkip: true,

                                    autoSkip: true,
                                    maxRotation: 45,
                                    minRotation: 0,

                                    fontSize: 10,
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
                                    precision: 0,
                                    fontSize: 20,
                                    callback: function (value) {
                                        return number_format(value);
                                    },
                                },
                            },
                        ],
                    },
                    legend: {
                        display: false,
                    },
                },
            });
        } else {
            var ctx = document.getElementById("myAreaSongChart");
            var myLineChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        topVisits[0].name,
                        topVisits[1].name,
                        topVisits[2].name,
                        topVisits[3].name,
                        topVisits[4].name,
                    ],
                    datasets: [
                        {
                            label: "Cantidad de visitas",
                            data: [
                                topVisits[0].visits,
                                topVisits[1].visits,
                                topVisits[2].visits,
                                topVisits[3].visits,
                                topVisits[4].visits,
                            ],
                            backgroundColor: "rgba(255, 182, 193, 0.3)", // rosa pastel con más transparencia
                            borderColor: "rgba(255, 182, 193, 1)",
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
                                time: {
                                    unit: "date",
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                },

                                ticks: {
                                    maxTicksLimit: 7,
                                    autoSkip: false,

                                    maxRotation: 45,
                                    minRotation: 0,

                                    fontSize: 10,
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
                                    precision: 0,
                                    fontSize: 20,
                                    callback: function (value) {
                                        return number_format(value);
                                    },
                                },
                            },
                        ],
                    },
                    legend: {
                        display: false,
                    },
                },
            });
        }

        window.onresize = () => {
            if (window.innerWidth < 1400) {
                myLineChart.options.scales.xAxes[0].ticks.autoSkip = false;
                myLineChart.data.labels = [
                    topVisits[0].name,
                    topVisits[1].name,
                    topVisits[2].name,
                ];
                myLineChart.data.datasets[0].data = [
                    topVisits[0].visits,
                    topVisits[1].visits,
                    topVisits[2].visits,
                ];
            } else {
                myLineChart.options.scales.xAxes[0].ticks.autoSkip = true;
                myLineChart.options.scales.xAxes[0].ticks.maxRotation = 0;
                myLineChart.data.labels = [
                    topVisits[0].name,
                    topVisits[1].name,
                    topVisits[2].name,
                    topVisits[3].name,
                    topVisits[4].name,
                ];
                myLineChart.data.datasets[0].data = [
                    topVisits[0].visits,
                    topVisits[1].visits,
                    topVisits[2].visits,
                    topVisits[3].visits,
                    topVisits[4].visits,
                ];
            }
        };
    }
});
