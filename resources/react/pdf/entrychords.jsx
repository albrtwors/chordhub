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

                            doc.addImage(base64Image, "JPEG", 10, 10, 30, 15); // posición y tamaño ajustables

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
                                {
                                    align: "center",
                                }
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

                    // Imprimir título
                    if (title) {
                        if (yPosition + 10 > pageHeight - marginBottom) {
                            doc.addPage();
                            yPosition = 50;
                        }
                        doc.setFontSize(20);
                        doc.setFont("helvetica", "bold");
                        doc.text(title, 105, yPosition, { align: "center" });
                        yPosition += 15; // ajustado para menor separación
                    }

                    // Imprimir uploadedBy
                    if (uploadedBy) {
                        if (yPosition + 10 > pageHeight - marginBottom) {
                            doc.addPage();
                            yPosition = 50;
                        }
                        doc.setFontSize(12);
                        doc.setFont("helvetica", "normal");
                        doc.text(uploadedBy, 105, yPosition, {
                            align: "center",
                        });
                        yPosition += 10;
                    }

                    function parseLine(line) {
                        const regex = /\[([^\]]+)\]/g;
                        let match;
                        let segments = [];
                        let lastIndex = 0;

                        while ((match = regex.exec(line)) !== null) {
                            if (match.index > lastIndex) {
                                segments.push({
                                    text: line.substring(
                                        lastIndex,
                                        match.index
                                    ),
                                    chord: null,
                                });
                            }
                            segments.push({ text: "", chord: match[1] });
                            lastIndex = regex.lastIndex;
                        }
                        if (lastIndex < line.length) {
                            segments.push({
                                text: line.substring(lastIndex),
                                chord: null,
                            });
                        }
                        return segments;
                    }

                    function printLine(line) {
                        const segments = parseLine(line);
                        let xPos = 20;
                        segments.forEach((segment) => {
                            const text = segment.text;
                            const width = doc.getTextWidth(text);
                            if (segment.chord) {
                                if (yPosition - 4 > 0) {
                                    doc.setFontSize(8);
                                    doc.setFont("helvetica", "bold");
                                    doc.text(
                                        segment.chord,
                                        xPos,
                                        yPosition - 5,
                                        { align: "left" }
                                    );
                                }
                            }
                            if (
                                yPosition + lineHeight >
                                pageHeight - marginBottom
                            ) {
                                doc.addPage();
                                yPosition = 50;
                            }
                            doc.setFontSize(10);
                            doc.setFont("helvetica", "normal");
                            doc.text(text, xPos, yPosition);
                            xPos += width;
                        });
                        yPosition += lineHeight;
                    }

                    jsonsong.parts.forEach((part) => {
                        if (part.type) {
                            if (yPosition + 10 > pageHeight - marginBottom) {
                                doc.addPage();
                                yPosition = 50;
                            }
                            doc.setFontSize(12);
                            doc.setFont("helvetica", "bold");
                            doc.text(part.type.toUpperCase(), 20, yPosition);
                            yPosition += lineHeight;
                        }
                        const lines = part.text.split("\n");
                        lines.forEach((line) => {
                            printLine(line);
                        });
                        yPosition += lineHeight;
                        if (yPosition > pageHeight - marginBottom) {
                            doc.addPage();
                            yPosition = 50;
                        }
                    });

                    addHeaderAndFooter();

                    doc.save(`${document.querySelector("h1").innerText}.pdf`);
                };
                reader.readAsDataURL(blob);
            });
    }
    return (
        <button class="ms-5 btn btn-primary" onClick={exportPDF}>
            Exportar
        </button>
    );
}
