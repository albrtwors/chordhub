import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("changepass");
const URL = $form.getAttribute("action");

const validation = new LogValidation($form, URL);
validation.formSubmitHandler({
    redirect: true,
    url: "/",
});
