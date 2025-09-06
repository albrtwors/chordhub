export { LogValidation };
import { Async } from "./Async.js";
import { Alert } from "./Alerts.js";
import { CommentCard } from "../Components/CommentCard.js";
class LogValidation {
    constructor(form, url) {
        this.form = form;
        this.url = url;
        this.botErrorMessage = () => {
            return `            
            <span class="chatbot-message">
                <h6 class="message-remitent">Bot</h6>
                <p class="message">Hubo un error intenta de nuevo</p>

            </span>`;
        };
        this.botComment = (message) => {
            return `
            <span class="chatbot-message">
                <h6 class="message-remitent">Bot</h6>
                <p class="message">${message}</p>

            </span>
            `;
        };
    }

    async displayMensajeCaracterPorCaracter(elemento, mensaje, velocidad = 10) {
        elemento.innerHTML = ""; // Limpia el contenido
        for (let char of mensaje) {
            elemento.innerHTML += char;
            await new Promise((resolve) => setTimeout(resolve, velocidad));
        }
    }

    showLoader(chat) {
        const loaderHTML = `<div class="loaderOfChat"></div>`;
        // Inserta el loader en el chat
        chat.chatSection.innerHTML += loaderHTML;
    }

    hideLoader(chat) {
        const loader = chat.chatSection.querySelector(".loaderOfChat");
        if (loader) {
            loader.remove();
        }
    }

    putSubmitHandler(params = { redirect: false, url: "" }) {
        this.form.addEventListener("submit", async (e) => {
            e.preventDefault();

            Alert.LoadingAlert();

            const response = await Async.put(this.url, this.form);

            if (response.status === "success") {
                Alert.SuccessAlert(response.message);
                if (params.redirect) {
                    window.location.href = params.url;
                }
            } else {
                Alert.ErrorAlert(response.message);
            }
        });
    }

    async deleteSubmitHandler(
        params = { redirect: false, url: "" },
        element = null
    ) {
        this.form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const cancelResponse = await Alert.confirmDeleteAlert();

            if (cancelResponse == true) {
                const response = await Async.delete(this.url);
                if (response.status === "success") {
                    Alert.SuccessAlert(response.message);
                    if (element) {
                        element.parentNode.parentNode.remove();
                    }
                    if (params.redirect) {
                        window.location.href = params.url;
                    }
                } else {
                    Alert.ErrorAlert(response.message);
                }
            }
        });
    }

    async postButtonSubmitHandler(
        object,
        params = { redirect: false, url: "" }
    ) {
        const response = await Async.sendPostObjectData(object, this.url);
        if (response.status === "success") {
            Alert.SuccessAlert(response.message);
            if (params.redirect) {
                window.location.href = params.url;
            }
        } else {
            Alert.ErrorAlert(response.message);
        }
    }

    formSubmitHandler(params = { redirect: false, url: "" }, element = null) {
        this.form.addEventListener("submit", async (e) => {
            e.preventDefault();

            Alert.LoadingAlert();

            const response = await Async.postForm(this.url, this.form);

            if (response.status === "success") {
                Alert.SuccessAlert(response.message);
                if (element) {
                    // element.row.appendChild(comment);
                    element.row.parentNode.innerHTML += CommentCard(
                        null,
                        response.comment,
                        response.user,
                        null,
                        null
                    );
                }
                if (params.redirect) {
                    window.location.href = params.url;
                }
            } else {
                Alert.ErrorAlert(response.message);
            }
        });
    }

    async postInputSubmitHandler(
        object,
        params = { redirect: false, url: "" }
    ) {
        const controller = new AbortController();
        this.abortController = controller;
        const signal = controller.signal;

        const response = await Async.sendPostObjectData(object, this.url, {
            signal,
        });

        if (this.abortController) {
            this.abortController.abort();
        }
        return response;
    }
}
