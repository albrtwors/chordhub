import { LogValidation } from "../Classes/LogValidation.js";
import { Search } from "../Classes/Search.js";

const validation = new LogValidation(null, "/search_songs");
const input = document.getElementById("search_songs");
const song = document.getElementById("song_template");
const songRow = document.getElementById("song_row");
const search = new Search(input, song, songRow);

input.addEventListener("input", () => {
    search.searchSong(validation);
});
