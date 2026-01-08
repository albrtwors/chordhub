import jsPDF from "jspdf";
import { createRoot } from "react-dom/client";
import { autoTable } from "jspdf-autotable";

createRoot(document.getElementById("pdf-exporter")).render(<App />);

function App() {
    function exportPDF(mode) {
        if (mode === "all") {
            const doc = new jsPDF();

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
                                doc.addImage(
                                    base64Image,
                                    "JPEG",
                                    10,
                                    10,
                                    30,
                                    15
                                );
                                doc.setFontSize(12);
                                doc.setFont("helvetica", "bold");
                                doc.text("Chordhub", 105, 20, {
                                    align: "center",
                                });
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
                                doc.text(
                                    `Página ${i} de ${pageCount}`,
                                    105,
                                    290,
                                    { align: "center" }
                                );
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

                        fetch("/api/logs")
                            .then((res) => res.json())
                            .then((logs) => {
                                autoTable(doc, {
                                    head: [
                                        ["ID", "Nombre", "Usuario", "Fecha"],
                                    ],
                                    body: logs.logs.map((log) => [
                                        log.id,
                                        log.name,
                                        log.user.name,
                                        log.created_at,
                                    ]),
                                    startY: yPosition + 20,
                                    theme: "grid",
                                    styles: { fontSize: 8 },
                                    headStyles: { fillColor: [22, 160, 133] },
                                    margin: { bottom: 10 },
                                });
                                addHeaderAndFooter();
                                doc.save(`${new Date()}.pdf`);
                            })
                            .catch((error) => {
                                console.error("Error fetching logs:", error);
                                addHeaderAndFooter();
                                doc.save(
                                    `${
                                        document.getElementById("songtitle")
                                            .value
                                    }.pdf`
                                );
                            });
                    };
                    reader.readAsDataURL(blob);
                });
        } else if (mode === "visible") {
            const inputValue = document.getElementById("visible-data").value;
            let dataArray;
            try {
                dataArray = JSON.parse(inputValue);
            } catch (e) {
                console.error("Error parsing visible-data JSON:", e);
                return;
            }

            const doc = new jsPDF();

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
                                doc.addImage(
                                    base64Image,
                                    "JPEG",
                                    10,
                                    10,
                                    30,
                                    15
                                );
                                doc.setFontSize(12);
                                doc.setFont("helvetica", "bold");
                                doc.text("Chordhub", 105, 20, {
                                    align: "center",
                                });
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
                                doc.text(
                                    `Página ${i} de ${pageCount}`,
                                    105,
                                    290,
                                    { align: "center" }
                                );
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

                        const bodyData = dataArray.map((log) => [
                            log.id,
                            log.name,
                            log.user.name,
                            log.created_at,
                        ]);

                        autoTable(doc, {
                            head: [["ID", "Nombre", "Usuario", "Fecha"]],
                            body: bodyData,
                            startY: yPosition + 20,
                            theme: "grid",
                            styles: { fontSize: 8 },
                            headStyles: { fillColor: [22, 160, 133] },
                            margin: { bottom: 10 },
                        });

                        addHeaderAndFooter();
                        doc.save(`${new Date()}.pdf`);
                    };
                    reader.readAsDataURL(blob);
                });
        }
    }
    return (
        <div className="d-flex">
            <button
                className="btn btn-primary"
                onClick={() => exportPDF("visible")}
            >
                Exportar Solo el Contenido Visible
            </button>{" "}
            <button
                className="ms-3 btn btn-success"
                onClick={() => exportPDF("all")}
            >
                Exportar Todo
            </button>
        </div>
    );
}
