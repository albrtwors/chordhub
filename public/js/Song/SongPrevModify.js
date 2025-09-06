import { Song } from "../Classes/Song.js";

const $songoutput = document.getElementById("structure");
const $outputvalue = document.getElementById("output_value");

const SongPrev = new Song();
const songjson = document.getElementById("songjson");
SongPrev.songArea.addEventListener("click", () => {
    SongPrev.saveCaretPosition();
});

document.addEventListener("keypress", () => {
    SongPrev.caretposition = null;
});

SongPrev.formatStructure();
SongPrev.clearStructure();
SongPrev.cloneStructure();

SongPrev.songOutputValue.value = songjson.value;
SongPrev.renderOutput(JSON.parse(songjson.value));
SongPrev.songArea.value = SongPrev.initAreaValue(JSON.parse(songjson.value));

SongPrev.songArea.addEventListener("input", () => {
    SongPrev.formatOutput();
});

SongPrev.songArea.addEventListener("input", () => {
    SongPrev.renderOutput(SongPrev.songToJson());
});
