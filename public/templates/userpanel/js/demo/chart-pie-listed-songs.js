// Set new default font family and font color to mimic Bootstrap's default styling
document.addEventListener("livewire:navigated", () => {
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    const mostListedSongsJSON = JSON.parse(
        document.getElementById("mostListedSongs").value
    );
    const colors = ["#09f", "#3da", "0fc"];
    if (mostListedSongsJSON.length >= 3) {
        const songNames = mostListedSongsJSON.map((song) => song.name);

        const ctxSongs = document.getElementById("myListedChart");

        const topSongsPieChart = new Chart(ctxSongs, {
            type: "pie",
            data: {
                labels: [
                    mostListedSongsJSON[0].song.name,
                    mostListedSongsJSON[1].song.name,
                    mostListedSongsJSON[2].song.name,
                ],
                datasets: [
                    {
                        data: [
                            mostListedSongsJSON[0].count,
                            mostListedSongsJSON[1].count,
                            mostListedSongsJSON[2].count,
                        ],
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
                            const label = "Listada ";
                            const value = Math.round(
                                data.datasets[0].data[index] || 0
                            );
                            return (
                                label + value + (value > 1 ? " veces" : " vez")
                            );
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
