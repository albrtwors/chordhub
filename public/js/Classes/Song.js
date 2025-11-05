export { Song };

class Song {
    constructor() {
        this.editMenu = document.getElementById("editMenu");

        this.addButtons = {
            repetitions: document.getElementById("repetitions"),
            intro: document.getElementById("intro"),
            estro: document.getElementById("estro"),
            precor: document.getElementById("precor"),
            coro: document.getElementById("coro"),
            inter: document.getElementById("puente"),
            outro: document.getElementById("outro"),
        };
        this.SortableInit = new Sortable(this.editMenu, {
            animation: 150,
            onEnd: () => this.loadSort(),
        });

        this.chordArea = document.getElementById("chordArea");
        this.caretposition = null;
        this.songOutputValue = document.getElementById("valueofstructure");
        this.songOutput = document.getElementById("structure");
        this.cloneButton = document.getElementById("clone");
        this.clearButton = document.getElementById("clear");
        this.submitButton = document.getElementById("sub");
        this.songArea = document.getElementById("area");
    }

    songToJson() {
        const text = this.songArea.value;
        const lines = text.split("\n");
        const result = { parts: [] };
        let actualPart = null;
        const pattern =
            /^(Intro|Estrofa|Coro|PreCoro|Puente|Interludio|Verso|Outro)(\s*\d+)?$/i;

        lines.forEach((line) => {
            if (!line) return;
            if (pattern.test(line)) {
                if (actualPart) {
                    result.parts.push(actualPart);
                }
                actualPart = {
                    type: line.toLowerCase(),
                    text: "",
                };
            } else {
                if (actualPart) {
                    if (actualPart.text) {
                        actualPart.text += "\n" + line;
                    } else {
                        actualPart.text = line;
                    }
                }
            }
        });

        if (actualPart) {
            result.parts.push(actualPart);
        }

        if (this.editMenu) {
            this.loadWinBox({ result });
        }
        this.songOutputValue.value = JSON.stringify(result);
        return result;
    }

    loadSort() {
        const elements = document.querySelectorAll(".sorted-elements");
        this.editMenu.innerHTML = ``;
        let newStructure = { parts: [] };
        elements.forEach((element, index) => {
            element.setAttribute("id", index);
            newStructure = {
                parts: [
                    ...newStructure.parts,
                    {
                        type: element.innerText.toLowerCase(),
                        text: element.getAttribute("value"),
                    },
                ],
            };

            this.editMenu.appendChild(element);
        });

        this.songArea.value = this.initAreaValue(newStructure);
        this.renderOutput(newStructure);
        this.songOutputValue.value = JSON.stringify(newStructure);
    }

    loadWinBox({ result }) {
        this.editMenu.innerHTML = ``;
        const listItems = result.parts.map((part, index) => {
            const li = document.createElement("p");
            li.setAttribute("id", index);
            li.setAttribute("draggable", true);
            li.style = "cursor:pointer";
            li.textContent = part.type.toUpperCase();
            li.classList.add(
                "fw-bold",
                "sorted-elements",
                "border",
                "rounded",
                "bg-primary",
                "text-white",
                "p-2"
            );
            const copyButton = document.createElement("i");
            copyButton.style = "cursor:pointer";
            copyButton.classList.add(
                "fas",
                "fa-copy",
                "bg-success",
                "p-2",
                "text-white",
                "rounded-circle",
                "ms-2",
                "cursor-pointer"
            );
            copyButton.addEventListener("click", () => {
                navigator.clipboard.writeText(part.text);
            });
            li.setAttribute("value", part.text);
            li.appendChild(copyButton);
            return li;
        });
        listItems.map((li) => this.editMenu.appendChild(li));
    }
    saveCaretPosition() {
        this.caretposition = this.songArea.selectionStart;
    }

    renderOutput(songJSON) {
        const container = this.songOutput;
        container.innerHTML = "";

        const getTypeLabel = (type) => {
            const typeMap = {
                intro: "Intro",
                estrofa: "Estrofa",
                coro: "Coro",
                precoro: "PreCoro",
                verso: "Verso",
                puente: "Puente",
                interludio: "Interludio",
                outro: "Outro",
            };
            const parts = type.split(" ");
            const baseType = parts[0];
            const number = parts[1];
            const labelBase = typeMap[baseType] || "Intro";
            return number ? `${labelBase} ${number}` : labelBase;
        };

        songJSON.parts.forEach((part) => {
            let h3Element;
            const labelText = getTypeLabel(part.type.toLowerCase());
            h3Element = document.createElement("h3");
            h3Element.textContent = labelText;
            h3Element.classList.add("fw-bold", "my-3", "song-text");
            const fragment = document.createDocumentFragment();
            fragment.appendChild(h3Element);
            const lineas = part.text.split("\n");
            lineas.forEach((line) => {
                const divLinea = document.createElement("div");
                divLinea.style = "margin:20px 20px 0px; position:relative;";
                divLinea.classList.add("song-paragraph", "song-text");
                divLinea.textContent = line;
                fragment.appendChild(divLinea);
            });
            container.appendChild(fragment);
        });
        const allElements = document.querySelectorAll(".song-text");
        let count = 0;
        allElements.forEach((el) => {
            count++;
            if (el.tagName.toLowerCase() !== "h3") {
                if (count % 16 === 0 || count > 16) {
                    el.classList.add("avoid-break");
                    count = 0;
                }
            }
        });

        if (this.editMenu) {
            this.loadWinBox({ result: songJSON });
        }
        if (this.chordArea) {
            this.chordArea.value = this.initAreaValue(songJSON);
        }
    }
    deleteSongFromDom(button) {
        button.parentNode.parentNode.remove();
    }

    checkIfItsFirst(areavalue, word) {
        if (this.caretposition === null) {
            if (
                this.addButtons.repetitions.value > 1 &&
                this.addButtons.repetitions.value < 10
            ) {
                let reps = "";
                for (let i = 0; i < this.addButtons.repetitions.value; i++) {
                    reps += "/";
                }
                if (areavalue.value.trim() === "") {
                    areavalue.value += `${word}\n${reps}\n\n${reps}`;
                } else {
                    areavalue.value += `\n\n${word}\n${reps}\n\n${reps}`;
                }
            } else {
                if (areavalue.value.trim() === "") {
                    areavalue.value += `${word}`;
                } else {
                    areavalue.value += `\n\n${word}`;
                }
            }
        } else {
            const formattedString =
                areavalue.value.substring(0, this.caretposition) +
                word +
                areavalue.value.substring(this.caretposition);

            areavalue.value = formattedString;
        }
        this.renderOutput(this.songToJson());
    }

    initAreaValue(songjson) {
        let text = "";
        songjson.parts.forEach((part) => {
            text +=
                part.type.charAt(0).toUpperCase() + part.type.slice(1) + "\n";

            text += part.text + "\n\n";
        });
        return text.trim();
    }

    formatStructure() {
        this.addButtons.coro.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "Coro");
        });
        this.addButtons.estro.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "Estrofa");
        });
        this.addButtons.inter.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "Interludio");
        });
        this.addButtons.precor.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "PreCoro");
        });
        this.addButtons.intro.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "Intro");
        });

        this.addButtons.outro.addEventListener("click", () => {
            this.checkIfItsFirst(this.songArea, "Outro");
        });
    }

    clearStructure() {
        this.clearButton.addEventListener("click", () => {
            this.songArea.value = "";
        });
    }

    cloneStructure() {
        this.cloneButton.addEventListener("click", () => {
            this.songArea.value += "\n" + this.songArea.value;
        });
    }
}
