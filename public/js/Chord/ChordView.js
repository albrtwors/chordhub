import { Song } from "../Classes/Song.js";
import { Chord } from "../Classes/Chord.js";

const ChordPrev = new Chord();
const songjson = document.getElementById("songjson");
const SongPrev = new Song();

ChordPrev.tuneDownHalfButton.onclick = () => {
    ChordPrev.tuneDown();
};
ChordPrev.tuneUpHalfButton.onclick = () => {
    ChordPrev.tuneUp();
};

SongPrev.renderOutput(JSON.parse(songjson.value));
ChordPrev.formatChord(SongPrev.songOutput);
