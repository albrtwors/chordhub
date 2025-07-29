import { Song } from "../Classes/Song.js";

const SongPrev = new Song();

SongPrev.formatStructure();
SongPrev.clearStructure();
SongPrev.cloneStructure();

SongPrev.songArea.addEventListener("input", () => {
    SongPrev.formatOutput();
});
