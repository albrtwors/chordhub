import { LogValidation } from "../Classes/LogValidation.js";

const forms = document.querySelectorAll("#usersDeleteForm");
forms.forEach((element) => {
    const validation = new LogValidation(
        element,
        element.getAttribute("action")
    );
    validation.deleteSubmitHandler({}, element);
});
