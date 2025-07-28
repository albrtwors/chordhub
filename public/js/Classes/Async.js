export { Async };

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
}
