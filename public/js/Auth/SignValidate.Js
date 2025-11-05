import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("signform");
const URL = $form.getAttribute("action");

const validation = new LogValidation($form, URL);
validation.formSubmitHandler();
