import { Song } from "../Classes/Song.js";

let songjson = document.getElementById("songjson");
let SongPrev = new Song();
SongPrev.renderOutput(JSON.parse(songjson.value));
