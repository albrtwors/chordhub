import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("modify");
const url = $form.getAttribute("action");

const validation = new LogValidation($form, url);
validation.formSubmitHandler({
    redirect: true,
    url: "/chordhub/canciones/modificar",
});
