const songName = document.querySelector("h1").innerText;
const bod = document.createElement("div");
//pdf header
const header = document.createElement("div");
header.style =
    "font-weight:bold; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%";
const headerH6 = document.createElement("h6");
headerH6.style = "font-weight:bold";
headerH6.innerText = "Iglesia Comunidad Cristiana para la Familia";
const header2h6 = document.createElement("h6");
header2h6.style = "font-weight:bold";
header2h6.innerText = "Ministerio de Adoración El Rey Ya Viene";
const header3h6 = document.createElement("h6");
header3h6.style = "font-weight:bold";
header3h6.innerText = "La Julia, Turmero Estado Aragua";
header.appendChild(header3h6);
header.appendChild(headerH6);
header.appendChild(header2h6);

//pdf footer
const footer = document.createElement("h1");
footer.innerText = "";

const songStructure = document.getElementById("structure");
$(document).ready(function () {
    $("#export").on("click", function () {
        var element = songStructure.cloneNode(true);
        bod.appendChild(header);
        bod.appendChild(element);
        bod.appendChild(footer);
        var opt = {
            margin: 0.5,
            filename: `${songName}.pdf`,
            image: { type: "jpeg", quality: 2.5 },
            pagebreak: { mode: "avoid-all", after: ".avoid-break" },
            html2canvas: { scale: 1, ignoreElements: () => false },
            jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
        };
        html2pdf()
            .set(opt)
            .from(bod)
            .toPdf()
            .get("pdf")
            .then(function (pdf) {})
            .save();
    });
});
