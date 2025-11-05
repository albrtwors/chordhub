import { Song } from "../Classes/Song.js";
import { Chord } from "../Classes/Chord.js";
import { Alert } from "../Classes/Alerts.js";
const ChordPrev = new Chord();
const SongPrev = new Song();

const songjson = document.getElementById("songjson");

SongPrev.songArea.value = SongPrev.initAreaValue(JSON.parse(songjson.value));

window.addEventListener("load", () => {
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});

ChordPrev.intChordInput.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
        const allChords = [...ChordPrev.majorChords, ...ChordPrev.minorChords];

        for (const chord of allChords) {
            if (
                ChordPrev.intChordInput.value === chord &&
                ChordPrev.selectedParts.length > 0 &&
                ChordPrev.selectedPartsAndChords.length <
                    ChordPrev.selectedParts.length
            ) {
                ChordPrev.selectedPartsAndChords.push(`[${chord}]`);
                console.log(ChordPrev.selectedPartsAndChords);
                // ChordPrev.addChordInt(ChordPrev.selectedParts[0]);
                ChordPrev.isUsingMultipleSelection = true;
                ChordPrev.partsCounter -= 1;
                ChordPrev.posChordLabel.innerText =
                    "Posiciones:" + ChordPrev.partsCounter;
                ChordPrev.chordArea.value = ChordPrev.chordEditArea.value;
                ChordPrev.intChordInput.value = "";
                break;
            }
        }
    }
});
ChordPrev.multipleSelButton.addEventListener("click", () => {
    if (!ChordPrev.multiple) {
        multipleSelButton.classList.remove("btn-primary");
        multipleSelButton.classList.add("btn-danger");
        multipleSelButton.innerText = "Desactivar";
        ChordPrev.multiple = true;
    } else {
        ChordPrev.posChordLabel.innerText = `Posiciones: 0`;
        multipleSelButton.classList.remove("btn-danger");
        multipleSelButton.classList.add("btn-primary");
        multipleSelButton.innerText = "Activar";
        ChordPrev.selectedParts = [];
        ChordPrev.selectedPartsAndChords = [];
        ChordPrev.multiple = false;
        ChordPrev.isUsingMultipleSelection = false;
    }
});

ChordPrev.chordEditArea.addEventListener("click", () => {
    ChordPrev.multipleSelection();
});
ChordPrev.chordEditArea.addEventListener("click", (e) => {
    if (ChordPrev.multiple) {
        const clickHint = document.getElementById("clickHint");
        clickHint.style.position = "absolute";

        clickHint.style.top = e.pageY - 10 + "px";
        clickHint.style.left = e.pageX - 10 + "px";
        clickHint.classList.remove("d-none");
        clickHint.classList.add("d-block");
        clickHint.classList.add("expandible");

        setTimeout(() => {
            clickHint.classList.remove("expandible");
            clickHint.classList.remove("d-block");
            clickHint.classList.add("d-none");
        }, 200);
    }
});
ChordPrev.addMultiple.addEventListener("click", () => {
    if (ChordPrev.selectedParts.length === 0) {
        Alert.ErrorAlert("Debes Seleccionar Partes de la canción");
        return;
    }

    if (
        ChordPrev.selectedParts.length > 0 &&
        ChordPrev.selectedPartsAndChords.length > 0 &&
        ChordPrev.selectedParts.length !=
            ChordPrev.selectedPartsAndChords.length
    ) {
        Alert.ErrorAlert(
            "Debes completar los acordes de las posiciones restantes"
        );
        return;
    }

    if (
        ChordPrev.selectedParts &&
        ChordPrev.selectedPartsAndChords.length === 0
    ) {
        const positions = [...ChordPrev.selectedParts].sort((a, b) => b - a);
        positions.forEach((part) => {
            ChordPrev.addMultipleChord(part);
            ChordPrev.addChord(part);
        });
        ChordPrev.selectedParts = [];
        ChordPrev.selectedPartsAndChords = [];
        ChordPrev.posChordLabel.innerText = "Posiciones: 0";
    } else if (
        ChordPrev.selectedPartsAndChords.length > 0 &&
        ChordPrev.selectedPartsAndChords.length ==
            ChordPrev.selectedParts.length
    ) {
        const positions = [...ChordPrev.selectedParts].sort((a, b) => b - a);
        const chords = [...ChordPrev.selectedPartsAndChords].reverse();
        positions.forEach((part, index) => {
            console.log("foreach");
            ChordPrev.addMultipleChordsInt(part, chords[index]);
        });
        ChordPrev.selectedParts = [];
        ChordPrev.selectedPartsAndChords = [];
        ChordPrev.posChordLabel.innerText = "Posiciones: 0";
    }
});

ChordPrev.chordEditArea.addEventListener("change", () => {
    ChordPrev.chordArea.value = ChordPrev.chordEditArea.value;
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});
ChordPrev.chordEditArea.addEventListener("click", () => {
    ChordPrev.chordArea.value = ChordPrev.chordEditArea.value;
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});
ChordPrev.chordEditArea.addEventListener("keydown", () => {
    ChordPrev.chordArea.value = ChordPrev.chordEditArea.value;
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});
ChordPrev.chordSelectEditArea.addEventListener("change", () => {
    ChordPrev.chords.value = ChordPrev.chordSelectEditArea.value;
});

ChordPrev.addChordButton.addEventListener("click", () => {
    ChordPrev.addChord(ChordPrev.caretposition);
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});

SongPrev.songArea.value = SongPrev.initAreaValue(JSON.parse(songjson.value));
SongPrev.renderOutput(JSON.parse(songjson.value));

SongPrev.songArea.addEventListener("input", () => {
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
});

SongPrev.songArea.addEventListener("click", () => {
    ChordPrev.getCaretPosition();
});

// ChordPrev.tuneUpHalfButton.addEventListener("click", () => {
//     ChordPrev.tuneDown();
// });
