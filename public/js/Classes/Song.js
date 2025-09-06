export { Song };

class Song {
    constructor() {
        this.addButtons = {
            intro: document.getElementById("intro"),
            estro: document.getElementById("estro"),
            precor: document.getElementById("precor"),
            coro: document.getElementById("coro"),
            inter: document.getElementById("puente"),
        };
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

        lines.forEach((line) => {
            if (!line) return;
            if (
                /^(Intro|Estrofa|Coro|PreCoro|Puente|Interludio|Verso)$/i.test(
                    line
                )
            ) {
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

        console.log(result);
        this.songOutputValue.value = JSON.stringify(result);
        return result;
    }

    saveCaretPosition() {
        this.caretposition = this.songArea.selectionStart;
    }
    renderOutput(songJSON) {
        const container = this.songOutput;
        container.innerHTML = "";

        songJSON.parts.forEach((part) => {
            let h3Element;

            switch (part.type) {
                case "intro":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Intro";
                    break;
                case "estrofa":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Estrofa";
                    break;
                case "coro":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Coro";
                    break;
                case "precoro":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "PreCoro";
                    break;
                case "verso":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Verso";
                    break;
                case "puente":
                    h3Element = document.createElement("h3");

                    h3Element.textContent = "Puente";
                    break;
                case "interludio":
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Interludio";
                    break;
                default:
                    h3Element = document.createElement("h3");
                    h3Element.textContent = "Intro";
                    break;
            }
            h3Element.classList.add("fw-bold");
            h3Element.classList.add("my-3");
            const fragment = document.createDocumentFragment();

            const lineas = part.text.split("\n");

            lineas.forEach((line) => {
                const divLinea = document.createElement("div");
                divLinea.style = "margin:20px 20px 0px; position:relative; ";
                divLinea.textContent = line;
                fragment.appendChild(divLinea);
            });

            container.appendChild(h3Element);
            container.appendChild(fragment);
        });
    }

    deleteSongFromDom(button) {
        button.parentNode.parentNode.remove();
    }

    checkIfItsFirst(areavalue, word) {
        if (this.caretposition === null) {
            if (areavalue.value.trim() === "") {
                areavalue.value += `${word}`;
            } else {
                areavalue.value += `\n\n${word}`;
            }
        } else {
            const formattedString =
                areavalue.value.substring(0, this.caretposition) +
                word +
                areavalue.value.substring(this.caretposition);

            areavalue.value = formattedString;
        }
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
