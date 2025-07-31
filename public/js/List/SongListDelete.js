import { LogValidation } from "../Classes/LogValidation.js";

const form = document.getElementById("filler");
const url = "/list_delete_validate/";

window.listDelete = async (element) => {
    const validation = new LogValidation(
        form,
        `${url}${element.getAttribute("data-id")}`
    );

    validation.deleteSubmitHandler(element, {
        redirect: true,
        url: `/chordhub/listas/eliminar`,
    });
};
