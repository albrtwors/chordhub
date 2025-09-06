import { LogValidation } from "../Classes/LogValidation.js";
import { Chatbot } from "../Classes/Chatbot.js";

const chat = new Chatbot();
const form = document.getElementById("chatbot");
const route = form.getAttribute("action");
const val = new LogValidation(form, route);

form.onsubmit = function () {
    chat.chatArea.value = "";
};
val.formChatSubmitHandler(chat);
