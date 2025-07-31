export { List };
import { Alert } from "../Classes/Alerts.js";

class List {
    constructor() {
        this.addedSongsList = document.getElementById("addedSongs");
        this.songsToAddList = document.getElementById("songsToAdd");

        this.listTemplate = document.getElementById("liTemplate");
        this.list = this.listTemplate;
        this.submitButton = document.getElementById("submit");

        this.songsSelected = [];

        this.listName = document.getElementById("list_name");
    }

    addSong = (text, id) => {
        const newElement = this.list.cloneNode(true);

        newElement.innerHTML =
            text +
            `        
            <div class="d-flex justify-content-end">
            <button id="deleteButton" data-id="${id}" onclick="ListInstance.deleteSong(this)" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
            </div>
                    `;
        this.songsSelected.push(id);
        this.addedSongsList.appendChild(newElement);

        alert(this.songsSelected);
    };

    deleteSong = (element, id) => {
        let index = this.songsSelected.indexOf(id);
        this.songsSelected.splice(index, 1);

        element.parentNode.parentNode.remove();
    };

    get selectedSongs() {
        return this.songsSelected;
    }

    async sendList() {
        try {
            this.listName = document.getElementById("list_name").value;
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            const response = await fetch("/lists_create_validate", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-Token": csrfToken, // Agregar el token en los encabezados
                },
                body: JSON.stringify({
                    songs: this.songsSelected,
                    listname: this.listName,
                }),
            });

            const result = await response.json();

            if (result.status === "success") {
                Alert.SuccessAlert(result.message);
            } else {
                Alert.ErrorAlert(result.message);
            }
        } catch (error) {
            console.error("Error al enviar la lista:", error);
        }
    }
}
