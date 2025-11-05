const songName = document.querySelector("h1").innerText;

$(document).ready(function () {
    $("#export").on("click", function () {
        var element = document.getElementById("structure");
        var opt = {
            margin: 0.5,
            filename: `${songName}.pdf`,
            image: { type: "jpeg", quality: 0.98 },
            pagebreak: { mode: "avoid-all", after: ".avoid-break" },
            html2canvas: { scale: 1, ignoreElements: () => false },
            jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
        };

        html2pdf()
            .set(opt)
            .from(element)
            .toPdf()
            .get("pdf")
            .then(function (pdf) {})
            .save();
    });
});
