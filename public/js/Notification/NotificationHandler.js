import { Notification } from "../Classes/Notification.js";
import { LogValidation } from "../Classes/LogValidation.js";

const form = document.getElementById("notiForm");
const url = form.getAttribute("action");
const validation = new LogValidation(form, url);
validation.formSubmitHandler();

// window.sayHello = async function (element) {
//     alert(element.getAttribute("data-id"));
//     Notification.readNotification(
//         element.getAttribute("data-id"),
//         element.parentElement.parentElement.parentElement.parentElement
//             .parentElement
//     );
// };
