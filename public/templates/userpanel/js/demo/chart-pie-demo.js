// Set new default font family and font color to mimic Bootstrap's default styling
document.addEventListener("livewire:navigated", () => {
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    // Pie Chart Example
    const tonalities = document.getElementById("topTonalities").value;
    const tonalitiesJSON = JSON.parse(tonalities);

    if (tonalitiesJSON.original.length >= 3) {
        const totalPercent =
            parseInt(tonalitiesJSON.original[0].times_used) +
            parseInt(tonalitiesJSON.original[1].times_used) +
            parseInt(tonalitiesJSON.original[2].times_used);

        const percents = [
            (parseInt(tonalitiesJSON.original[0].times_used) / totalPercent) *
                100,
            (parseInt(tonalitiesJSON.original[1].times_used) / totalPercent) *
                100,
            (parseInt(tonalitiesJSON.original[2].times_used) / totalPercent) *
                100,
        ];

        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: [
                    tonalitiesJSON.original[0].name,
                    tonalitiesJSON.original[1].name,
                    tonalitiesJSON.original[2].name,
                ], // tonalidades
                datasets: [
                    {
                        data: [percents[0], percents[1], percents[2]], // porcentaje de uso
                        backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc"],
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
