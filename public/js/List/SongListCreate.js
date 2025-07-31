import { List } from "../Classes/List.js";
import { Async } from "../Classes/Async.js";

window.ListInstance = new List();
ListInstance.submitButton.addEventListener("click", () => {
    const listinput = document.getElementById("list_name");
    Async.sendList(listinput, ListInstance.songsSelected);
});
