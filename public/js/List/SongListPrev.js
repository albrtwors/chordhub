import { List } from "../Classes/List.js";

window.ListInstance = new List();
ListInstance.submitButton.addEventListener("click", () => {
    ListInstance.sendList();
});
