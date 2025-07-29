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

        this.songOutputValue = document.getElementById("valueofstructure");
        this.songOutput = document.getElementById("structure");
        this.cloneButton = document.getElementById("clone");
        this.clearButton = document.getElementById("clear");
        this.submitButton = document.getElementById("sub");
        this.songArea = document.getElementById("area");
    }

    checkIfItsFirst(areavalue, word) {
        if (areavalue.value.trim() === "") {
            areavalue.value += `${word}\n`;
        } else {
            areavalue.value += `\n${word}\n`;
        }
    }

    formatOutput() {
        const text = this.songArea.value;
        const palabrasClave = [
            "Estrofa",
            "PreCoro",
            "Coro",
            "Interludio",
            "Puente",
            "Intro",
            "Verso",
        ];

        const regex = new RegExp(
            "\\b(" + palabrasClave.join("|") + ")\\b",
            "gi"
        );

        const formattedText = text.replace(
            regex,
            (match) => `<h3 class='d-inline'>${match}</h3>`
        );

        const textWithJumps = formattedText.replace(/\n/g, "<br>");

        this.songOutput.innerHTML = textWithJumps;
        this.songOutputValue.value = this.songOutput.innerHTML;
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
