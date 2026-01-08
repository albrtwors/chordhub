// Set new default font family and font color to mimic Bootstrap's default styling
document.addEventListener("livewire:navigated", () => {
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    // Pie Chart Example
    const contributors = document.getElementById("topContributors").value;
    const contributorsJSON = JSON.parse(contributors);
    console.log(contributorsJSON);
    if (contributorsJSON.length >= 2) {
        const totalSongsPercent =
            parseInt(contributorsJSON[0].songs) +
            parseInt(contributorsJSON[1].songs) +
            parseInt(contributorsJSON[2].songs);

        const SongsPercents = [
            (parseInt(contributorsJSON[0].songs) / totalSongsPercent) * 100,
            (parseInt(contributorsJSON[1].songs) / totalSongsPercent) * 100,
            (parseInt(contributorsJSON[2].songs) / totalSongsPercent) * 100,
        ];

        var ctx = document.getElementById("myPieContributorChart");
        var myPieChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: [
                    contributorsJSON[0].name,
                    contributorsJSON[1].name,
                    contributorsJSON[2].name,
                ], // tonalidades
                datasets: [
                    {
                        data: [
                            parseInt(contributorsJSON[0].songs),
                            parseInt(contributorsJSON[1].songs),
                            parseInt(contributorsJSON[2].songs),
                        ], // porcentaje de uso
                        backgroundColor: ["#09f", "#1cc88a", "#f5a"],
                        hoverBackgroundColor: ["#2e59d9", "#17a673", "#2c9faf"],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, data) {
                            const label = "Canciones";
                            const value =
                                data.datasets[0].data[tooltipItem.index] || 0;
                            return label + ": " + value;
                        },
                        labelColor: function (tooltipItem, chart) {
                            return {
                                borderColor:
                                    chart.data.datasets[0].backgroundColor[
                                        tooltipItem.index
                                    ],
                                backgroundColor:
                                    chart.data.datasets[0].backgroundColor[
                                        tooltipItem.index
                                    ],
                            };
                        },
                    },
                },
                legend: {
                    display: true,
                    position: "bottom",
                },
                cutoutPercentage: 80,
            },
        });
    }
});
