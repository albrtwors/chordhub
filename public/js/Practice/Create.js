const performDate = document.getElementById("performDate");
performDate.min = new Date().toISOString().split("T")[0];

import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("practice-form");
const url = $form.getAttribute("action");
const validation = new LogValidation($form, url);
validation.formSubmitHandler();
