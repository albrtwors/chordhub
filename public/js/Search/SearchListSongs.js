import { LogValidation } from "../Classes/LogValidation.js";
import { Search } from "../Classes/Search.js";

const validation = new LogValidation(null, "/buscador/cancionero_canciones");
const input = document.getElementById("song_search");
const song = document.getElementById("song_template");
const songRow = document.getElementById("songsToAdd");
const search = new Search(input, song, songRow);

input.addEventListener("input", () => {
    search.searchSong(validation);
});
