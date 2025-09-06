import { Song } from "../Classes/Song.js";

const songjson = document.getElementById("songjson");
const SongPrev = new Song();
SongPrev.renderOutput(JSON.parse(songjson.value));
