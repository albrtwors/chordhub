export { Async };
import { Alert } from "../Classes/Alerts.js";

class Async {
    static async postForm(url, form) {
        try {
            return fetch(url, {
                method: "POST",
                body: new FormData(form),
            }).then((response) => response.json());
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    async get(url) {
        try {
            return fetch(url, {
                method: "GET",
                headers: {
                    Accept: "application/json",
                },
            }).then((response) => response.json());
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    static async delete(url) {
        try {
            return fetch(url, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                    "Content-Type": "application/json",
                },
            }).then((response) => response.json());
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    static async put(url, form) {
        let formData = new FormData(form);
        formData.append("_method", "PUT");
        try {
            return fetch(url, {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
            }).then((response) => response.json());
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    static async sendPostObjectData(object, route, options = {}) {
        try {
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            return fetch(route, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-Token": csrfToken,
                },
                body: JSON.stringify(object),
                ...options,
            }).then((response) => response.json());
        } catch (error) {
            console.error(error);
            throw error;
        }
    }
}
