import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("modifyform");
const url = $form.getAttribute("action");

const validation = new LogValidation($form, url);
validation.putSubmitHandler();
