import { LogValidation } from "../Classes/LogValidation.js";

const $form = document.getElementById("songdelete");
const url = $form.getAttribute("action");

window.songDelete = async (element) => {
    const validation = new LogValidation(
        $form,
        `${url}${element.getAttribute("data-id")}`
    );
    validation.deleteSubmitHandler(element, {
        redirect: true,
        url: `/chordhub/canciones/`,
    });
};
