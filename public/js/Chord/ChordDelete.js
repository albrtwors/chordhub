import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("delform");
const url = $form.getAttribute("action");

const validation = new LogValidation($form, url);

validation.deleteSubmitHandler({
    redirect: true,
    url: `/acordes`,
});
