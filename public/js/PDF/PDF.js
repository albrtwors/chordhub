$(document).ready(function () {
    $("#export").on("click", function () {
        var element = document.getElementById("structure");
        var opt = {
            margin: 0.1,
            filename: "mi-documento.pdf",
            image: { type: "jpeg", quality: 0.98 },
            html2canvas: { scale: 1, ignoreElements: () => false }, // puedes ajustar si quieres
            jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
            // Añadido para exportar como texto, no como imagen
            // La opción 'html2pdf' no tiene opción explícita para "solo texto" pero
            // si quieres que sea solo texto, simplemente no configures html2canvas para convertir todo a imagen
        };

        // Uso correcto para exportar contenido HTML como texto ajustado
        html2pdf()
            .set(opt)
            .from(element)
            .toPdf()
            .get("pdf")
            .then(function (pdf) {
                // Aquí puedes ajustar estilos, márgenes, etc.
                // Para mejorar el ajuste, puedes modificar los estilos CSS en #structure
                // o usar pdf.text() para agregar contenido adicional programáticamente
            })
            .save();
    });
});
