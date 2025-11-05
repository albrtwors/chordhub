import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("songform");
const url = $form.getAttribute("action");

const validation = new LogValidation($form, url);
validation.formSubmitHandler();
