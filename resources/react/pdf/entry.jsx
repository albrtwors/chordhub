import jsPDF from "jspdf";
import { createRoot } from "react-dom/client";

createRoot(document.getElementById("pdf-exporter")).render(<App />);

function App() {
    function exportPDF() {
        const doc = new jsPDF();

        const jsonsong = JSON.parse(document.getElementById("songjson").value);
        const title = document.querySelector("h1").innerText;
        const uploadedBy = document.querySelector(".uploadedby").innerText;
        const imageUrl =
            "https://tse3.mm.bing.net/th/id/OIP.YHRD6MPJQODJkNU3D2TGawHaHg?rs=1&pid=ImgDetMain&o=7&rm=3";

        fetch(imageUrl)
            .then((res) => res.blob())
            .then((blob) => {
                const reader = new FileReader();
                reader.onload = function () {
                    const base64Image = reader.result;

                    function addHeaderAndFooter() {
                        const pageCount = doc.getNumberOfPages();
                        for (let i = 1; i <= pageCount; i++) {
                            doc.setPage(i);
                            doc.addImage(base64Image, "JPEG", 10, 10, 30, 15);
                            doc.setFontSize(12);
                            doc.setFont("helvetica", "bold");
                            doc.text("Chordhub", 105, 20, { align: "center" });
                            doc.text(
                                "Iglesia Comunidad Cristiana Para la Familia",
                                105,
                                25,
                                { align: "center" }
                            );
                            doc.text(
                                "La Julia, Turmero Edo. - Aragua",
                                105,
                                30,
                                { align: "center" }
                            );
                            doc.text("Ministerio de Adoración", 105, 35, {
                                align: "center",
                            });
                            doc.setFontSize(10);
                            doc.text(`Página ${i} de ${pageCount}`, 105, 290, {
                                align: "center",
                            });
                            doc.text(
                                `Chordhub ${new Date().toLocaleDateString()}`,
                                105,
                                280,
                                { align: "center" }
                            );
                        }
                    }

                    let yPosition = 50;
                    const lineHeight = 10;
                    const pageHeight = 297;
                    const marginBottom = 20;

                    doc.setFontSize(20);
                    doc.setFont("helvetica", "bold");
                    doc.text(title, 105, yPosition, { align: "center" });
                    yPosition += 10;

                    doc.setFontSize(12);
                    doc.setFont("helvetica", "normal");
                    doc.text(uploadedBy, 105, yPosition, { align: "center" });
                    yPosition += 10;

                    function addTextBlock(title, text) {
                        const headerLines = [`${title}`];
                        const lines = doc.splitTextToSize(text, 180);
                        headerLines.forEach((line) => {
                            if (
                                yPosition + lineHeight >
                                pageHeight - marginBottom
                            ) {
                                doc.addPage();
                                yPosition = 50;
                            }
                            doc.setFont("helvetica", "bold");
                            doc.text(line, 20, yPosition);
                            yPosition += lineHeight;
                        });
                        lines.forEach((line) => {
                            if (
                                yPosition + lineHeight >
                                pageHeight - marginBottom
                            ) {
                                doc.addPage();
                                yPosition = 50;
                            }
                            doc.setFont("helvetica", "normal");
                            doc.text(line, 20, yPosition);
                            yPosition += lineHeight;
                        });
                    }

                    jsonsong.parts.forEach((part) => {
                        addTextBlock(part.type, part.text);
                        yPosition += lineHeight;
                        if (yPosition > pageHeight - marginBottom) {
                            doc.addPage();
                            yPosition = 50;
                        }
                    });

                    addHeaderAndFooter();

                    doc.save(
                        `${document.getElementById("songtitle").value}.pdf`
                    );
                };
                reader.readAsDataURL(blob);
            });
    }
    return (
        <button className="btn btn-primary" onClick={exportPDF}>
            Exportar
        </button>
    );
}
