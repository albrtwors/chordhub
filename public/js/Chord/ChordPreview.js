import { Song } from "../Classes/Song.js";
import { Chord } from "../Classes/Chord.js";

const ChordPrev = new Chord();
const SongPrev = new Song();

const songjson = document.getElementById("songjson");

SongPrev.songArea.value = SongPrev.initAreaValue(JSON.parse(songjson.value));

window.addEventListener("load", () => {
    SongPrev.renderOutput(SongPrev.songToJson());
    ChordPrev.formatChord(SongPrev.songOutput);
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
