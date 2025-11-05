export { List };

import { Alert } from "../Classes/Alerts.js";

class List {
    constructor() {
        this.addedSongsList = document.getElementById("addedSongs");
        this.songsToAddList = document.getElementById("songsToAdd");

        this.addedSongsValue = document.getElementById("songs");
        this.songListNameValue = document.getElementById("listname");

        this.listTemplate = document.getElementById("liTemplate");
        this.list = this.listTemplate;
        this.submitButton = document.getElementById("submit");

        this.songsSelected = [];
        this.SortableInit = new Sortable(this.addedSongsList, {
            animation: 150,
        });
        this.sortableorder = this.SortableInit.toArray();
        this.listName = document.getElementById("list_name");
    }

    updateSortValues() {
        const listSongs = document.querySelectorAll(".songbut");
        this.songsSelected = Array.from(listSongs).map((song) => {
            return song.getAttribute("data-id");
        });
        this.addedSongsValue.value = JSON.stringify(this.songsSelected);

        this.addedSongsList = document.getElementById("addedSongs");
        this.SortableInit = new Sortable(this.addedSongsList, {
            handle: ".handle",
            animation: 150,
        });
        console.log(this);
    }

    modifiedListInit() {
        const listSongs = document.querySelectorAll(".songbut");
        listSongs.forEach((e) => {
            let id = e.getAttribute("data-id");
            this.songsSelected.push(id);
        });

        this.addedSongsValue.value = JSON.stringify(this.songsSelected);
    }

    checkIfIsAlreadyOnList(id, array) {
        return array.indexOf(id) !== -1;
    }

    addSong = (text, id, update = false) => {
        if (this.checkIfIsAlreadyOnList(id, this.songsSelected)) {
            Alert.ErrorAlert("Ya incluiste esta canción");
            return false;
        }

        const newElement = this.list.cloneNode(true);
        newElement.classList.add("d-block");

        newElement.innerHTML =
            text +
            `        
            
            <div class="d-flex justify-content-end" draggable="true">
            
            <button id="deleteButton" data-id="${id}" onclick="ListInstance.deleteSong(this)" class="btn btn-danger songbut">
                        <i class="fas fa-trash"></i>
                    </button>
            </div>
            <i class="fas fa-bars handle"></i>
                    `;
        this.songsSelected.push(id);

        this.addedSongsList.appendChild(newElement);
        if (update) {
            this.addedSongsValue.value = JSON.stringify(this.songsSelected);
        }
    };

    deleteSong = (element) => {
        let index = this.songsSelected.indexOf(element.getAttribute("data-id"));
        this.songsSelected.splice(index, 1);
        element.parentNode.parentNode.remove();
        this.addedSongsValue.value = JSON.stringify(this.songsSelected);
    };

    get selectedSongs() {
        return this.songsSelected;
    }
}
