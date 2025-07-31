export { Async };
import { Alert } from "../Classes/Alerts.js";

class Async {
    static async postForm(url, form) {
        return fetch(url, {
            method: "POST",
            body: new FormData(form),
        }).then((response) => response.json());
    }

    static async get(url) {
        return fetch(url).then((response) => response.json());
    }

    static async delete(url) {
        return fetch(url, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
                "Content-Type": "application/json",
            },
        }).then((response) => response.json());
    }

    static async put(url, form) {
        return fetch(url, {
            method: "PUT",
            body: new FormData(form),
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        }).then((response) => response.json());
    }

    static async sendList(listnameinput, songs) {
        try {
            const list_name = listnameinput.value;
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            const response = await fetch("/lists_create_validate", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-Token": csrfToken,
                },
                body: JSON.stringify({
                    songs: songs,
                    listname: list_name,
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
