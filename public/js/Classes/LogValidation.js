export { LogValidation };
import { Async } from "./Async.js";
import { Alert } from "./Alerts.js";

class LogValidation {
    constructor(form, url) {
        this.form = form;
        this.url = url;
    }

    formSubmitHandler(params = { redirect: false, url: "" }) {
        this.form.addEventListener("submit", async (e) => {
            e.preventDefault();

            Alert.LoadingAlert();

            const response = await Async.postForm(this.url, this.form);

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
}
