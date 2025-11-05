import { CommentCard } from "../Components/CommentCard.js";
import { LogValidation } from "../Classes/LogValidation.js";

const userData = {
    img: document.getElementById("username"),
    user: document.getElementById("id"),
    id: document.getElementById("image"),
    route: document.getElementById("xd"),
};

const CommentForms = document.querySelectorAll("#Comment");
CommentForms.forEach((element) => {
    const val = new LogValidation(element, element.getAttribute("action"));
    val.formSubmitHandler({}, {});
});
