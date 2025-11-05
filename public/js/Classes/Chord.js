export { Chord };

class Chord {
    constructor() {
        this.lastChordRecord = null;
        this.tuneDownHalfButton = document.getElementById("chord_down_half");
        this.tuneDownOneButton = document.getElementById("chord_down_one");
        this.multiple = false;
        this.selectedPartsAndChords = [];
        this.addMultiple = document.getElementById("addMultiple");
        this.selectedParts = [];
        this.partsCounter = this.selectedParts.length;
        this.tuneUpHalfButton = document.getElementById("chord_up_half");
        this.tuneUpOneButton = document.getElementById("chord_up_one");
        this.addChordButton = document.getElementById("addchord");
        this.multipleSelButton = document.getElementById("multipleSelButton");
        this.chords = document.getElementById("chords");
        this.chordSelectEditArea = document.getElementById(
            "chordSelectEditArea"
        );
        this.isUsingMultipleSelection = false;
        this.posChordLabel = document.getElementById("posChordLabel");
        this.intChordInput = document.getElementById("intChordInput");
        this.chordEditArea = document.getElementById("chordArea");
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

        this.min7Chords = [
            "Cmin7",
            "C#min7",
            "Dmin7",
            "D#min7",
            "Emin7",
            "Fmin7",
            "F#min7",
            "Gmin7",
            "G#min7",
            "Amin7",
            "A#min7",
            "Bmin7",
        ];

        // Acordes séptima mayor (7)
        this.major7Chords = [
            "C7",
            "C#7",
            "D7",
            "D#7",
            "E7",
            "F7",
            "F#7",
            "G7",
            "G#7",
            "A7",
            "A#7",
            "B7",
        ];

        // Acordes menores séptima con séptima menor (min7b5 o m7b5, a veces llamado semidisminuido)
        this.min7b5Chords = [
            "Cmin7b5",
            "C#min7b5",
            "Dmin7b5",
            "D#min7b5",
            "Emin7b5",
            "Fmin7b5",
            "F#min7b5",
            "Gmin7b5",
            "G#min7b5",
            "Amin7b5",
            "A#min7b5",
            "Bmin7b5",
        ];

        // Acordes suspensos 2 (sus2)
        this.sus2Chords = [
            "Csus2",
            "C#sus2",
            "Dsus2",
            "D#sus2",
            "Esus2",
            "Fsus2",
            "F#sus2",
            "Gsus2",
            "G#sus2",
            "Asus2",
            "A#sus2",
            "Bsus2",
        ];

        // Acordes séptima mayor con séptima mayor (maj7)
        this.maj7Chords = [
            "Cmaj7",
            "C#maj7",
            "Dmaj7",
            "D#maj7",
            "Emaj7",
            "Fmaj7",
            "F#maj7",
            "Gmaj7",
            "G#maj7",
            "Amaj7",
            "A#maj7",
            "Bmaj7",
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

    addMultipleChord(position) {
        let chord = this.chords.value;

        let areacontent = this.chordEditArea.value;
        let formattedString =
            areacontent.substring(0, position) +
            chord +
            areacontent.substring(position);

        this.chordEditArea.value = formattedString;
    }
    addMultipleChordsInt(position, chord) {
        let areacontent = this.chordEditArea.value;
        let formattedString =
            areacontent.substring(0, position) +
            chord +
            areacontent.substring(position);

        this.chordEditArea.value = formattedString;
    }

    multipleSelection() {
        if (this.multiple) {
            this.posChordLabel.innerText = `Posiciones: ${
                this.selectedParts.length + 1
            }`;
            this.selectedParts.push(this.chordEditArea.selectionStart);
            this.partsCounter = this.selectedParts.length;
            console.log(this.selectedParts);
        }
    }

    formatChord(output) {
        let outputcontent = output.innerHTML;
        let newoutput = outputcontent.replace(
            /\[(?<chord>[A-Ga-g][#b]?((maj|m|dim|aug|sus[2-4]|7|9|11|13)?))\]/g,
            (match, chord) => {
                const className =
                    chord.length >= 3 ? "chord chord-small" : "chord";
                return `<span class='${className}'>${chord}</span>`;
            }
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
            const currentText = chord.textContent;

            const getNextChord = (array, current) => {
                const index = array.indexOf(current);
                if (index !== -1) {
                    const nextIndex = (index + 1) % array.length;
                    return array[nextIndex];
                }
                return null;
            };

            const getPrevChord = (array, current) => {
                const index = array.indexOf(current);
                if (index !== -1) {
                    const prevIndex =
                        index === 0 ? array.length - 1 : index - 1;
                    return array[prevIndex];
                }
                return null;
            };

            const arrays = [
                this.majorChords,
                this.minorChords,
                this.minChords,
                this.min7Chords,
                this.major7Chords,
                this.min7b5Chords,
                this.sus2Chords,
                this.maj7Chords,
            ];

            for (let array of arrays) {
                const nextChord = getNextChord(array, currentText);
                if (nextChord) {
                    chord.textContent = nextChord;
                    break;
                }
            }
        });
    }

    tuneDown() {
        let chords = document.querySelectorAll(".chord");
        chords.forEach((chord) => {
            const currentText = chord.textContent;

            const getPrevChord = (array, current) => {
                const index = array.indexOf(current);
                if (index !== -1) {
                    const prevIndex =
                        index === 0 ? array.length - 1 : index - 1;
                    return array[prevIndex];
                }
                return null;
            };

            const arrays = [
                this.majorChords,
                this.minorChords,
                this.minChords,
                this.min7Chords,
                this.major7Chords,
                this.min7b5Chords,
                this.sus2Chords,
                this.maj7Chords,
            ];

            for (let array of arrays) {
                const prevChord = getPrevChord(array, currentText);
                if (prevChord) {
                    chord.textContent = prevChord;
                    break;
                }
            }
        });
    }
}
