function exportDivToPNG(divId) {
    const div = document.getElementById(divId);

    html2canvas(div).then((canvas) => {
        const dataURL = canvas.toDataURL("image/png");

        const link = document.createElement("a");
        link.href = dataURL;
        link.download = "mi_div.png";
        link.click();
    });
}
