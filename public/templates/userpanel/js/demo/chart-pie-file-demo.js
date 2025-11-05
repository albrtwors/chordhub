// Set new default font family and font color to mimic Bootstrap's default styling
document.addEventListener("livewire:navigated", () => {
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    const topFilesJSON = JSON.parse(
        document.getElementById("topFilesValue").value
    );
    if (topFilesJSON.length >= 4) {
        const fileNames = topFilesJSON.map((file) => file.name);
        const fileValues = topFilesJSON.map((file) => Math.round(file.visits));
        const ctxFiles = document.getElementById("myAreaFileChart");
        const colors = ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0"];

        var topFilesChart = new Chart(ctxFiles, {
            type: "polarArea",
            data: {
                labels: fileNames,
                datasets: [
                    {
                        data: fileValues,
                        backgroundColor: colors,
                        hoverBackgroundColor: colors.map((color) =>
                            shadeColor(color, -20)
                        ),
                        borderColor: "white",
                        borderWidth: 2,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            const index = tooltipItem.index;
                            const label = data.labels[index] || "";
                            const value = Math.round(
                                data.datasets[0].data[index] || 0
                            );
                            return label + ": " + value + " visitas";
                        },
                    },
                },
            },
        });

        function shadeColor(color, percent) {
            let R = parseInt(color.substring(1, 3), 16);
            let G = parseInt(color.substring(3, 5), 16);
            let B = parseInt(color.substring(5, 7), 16);

            R = Math.round((R * (100 + percent)) / 100);
            G = Math.round((G * (100 + percent)) / 100);
            B = Math.round((B * (100 + percent)) / 100);

            R = R < 255 ? R : 255;
            G = G < 255 ? G : 255;
            B = B < 255 ? B : 255;

            const RR = R.toString(16).padStart(2, "0");
            const GG = G.toString(16).padStart(2, "0");
            const BB = B.toString(16).padStart(2, "0");

            return "#" + RR + GG + BB;
        }
    }
});
