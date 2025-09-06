export { Chord };

class Chord {
    constructor() {
        this.tuneDownHalfButton = document.getElementById("chord_down_half");
        this.tuneDownOneButton = document.getElementById("chord_down_one");
        this.tuneUpHalfButton = document.getElementById("chord_up_half");
        this.tuneUpOneButton = document.getElementById("chord_up_one");
        this.addChordButton = document.getElementById("addchord");

        this.chords = document.getElementById("chords");
        this.chordArea = document.getElementById("area");
        this.output = document.getElementById("structure");
        this.caretposition = null;
        this.chordRegex =
            /\[(?<chord>[A-Ga-g][#b]?((maj|m|dim|aug|sus[2-4]|7|9|11|13)?))\]/g;

        this.minChords = [
            "Cdim",
            "C#dim",
            "Ddim",
            "D#dim",
            "Edim",
            "Fdim",
            "F#dim",
            "Gdim",
            "G#dim",
            "Adim",
            "A#dim",
            "Bdim",
        ];
        this.majorChords = [
            "C",
            "C#",
            "D",
            "D#",
            "E",
            "F",
            "F#",
            "G",
            "G#",
            "A",
            "A#",
            "B",
        ];
        this.minorChords = [
            "Cm",
            "C#m",
            "Dm",
            "D#m",
            "Em",
            "Fm",
            "F#m",
            "Gm",
            "G#m",
            "Am",
            "A#m",
            "Bm",
        ];
    }

    addChord(position) {
        let chord = this.chords.value;
        let areacontent = this.chordArea.value;
        let formattedString =
            areacontent.substring(0, position) +
            chord +
            areacontent.substring(position);

        this.chordArea.value = formattedString;
    }
    formatChord(output) {
        let outputcontent = output.innerHTML;
        let newoutput = outputcontent.replace(
            /\[(?<chord>[A-Ga-g][#b]?((maj|m|dim|aug|sus[2-4]|7|9|11|13)?))\]/g,
            "<span class='chord'>$<chord></span>"
        );
        output.innerHTML = newoutput;
    }

    getCaretPosition() {
        this.caretposition = this.chordArea.selectionStart;
        return this.caretposition;
    }

    tuneUp() {
        let chords = document.querySelectorAll(".chord");
        chords.forEach((chord) => {
            const indexMajor = this.majorChords.indexOf(chord.textContent);
            if (indexMajor !== -1) {
                const nextIndex = (indexMajor + 1) % this.majorChords.length; // para que vuelva al inicio si es el último
                chord.textContent = this.majorChords[nextIndex];
            }

            const indexMinor = this.minorChords.indexOf(chord.textContent);
            if (indexMinor !== -1) {
                const nextIndex = (indexMinor + 1) % this.minorChords.length;
                chord.textContent = this.minorChords[nextIndex];
            }

            const indexMin = this.minChords.indexOf(chord.textContent);
            if (indexMin !== -1) {
                const nextIndex = (indexMin + 1) % this.minChords.length;
                chord.textContent = this.minChords[nextIndex];
            }
        });
    }
    tuneDown() {
        let chords = document.querySelectorAll(".chord");
        chords.forEach((chord) => {
            const currentText = chord.textContent;

            const indexMajor = this.majorChords.indexOf(currentText);
            if (indexMajor !== -1) {
                const prevIndexMajor =
                    indexMajor === 0
                        ? this.majorChords.length - 1
                        : indexMajor - 1;
                chord.textContent = this.majorChords[prevIndexMajor];
            }

            const indexMinor = this.minorChords.indexOf(currentText);
            if (indexMinor !== -1) {
                const prevIndexMinor =
                    indexMinor === 0
                        ? this.minorChords.length - 1
                        : indexMinor - 1;
                chord.textContent = this.minorChords[prevIndexMinor];
            }
            const indexMin = this.minChords.indexOf(currentText);
            if (indexMin !== -1) {
                const prevIndexMin =
                    indexMin === 0 ? this.minChords.length - 1 : indexMin - 1;
                chord.textContent = this.minChords[prevIndexMin];
            }
        });
    }
}
