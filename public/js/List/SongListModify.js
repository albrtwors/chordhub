import { LogValidation } from "../Classes/LogValidation.js";
import { List } from "../Classes/List.js";

window.ListInstance = new List();

ListInstance.modifiedListInit();

ListInstance.SortableInit.option("onEnd", () => {
    ListInstance.updateSortValues();
});

const form = document.getElementById("fileform");
const url = form.getAttribute("action");
const validation = new LogValidation(form, url);
validation.putSubmitHandler();

// ListInstance.submitButton.addEventListener("click", () => {
//     const listinput = document.getElementById("list_name");
//     const songs_selected = ListInstance.songsSelected;

//     const Validation = new LogValidation(null, "/list_modify_validate");
//     Validation.postButtonSubmitHandler(
//         {
//             songs: songs_selected,
//             listname: listinput.value,
//             id: listinput.getAttribute("data-id"),
//             order: ListInstance.sortableorder,
//         },
//         Validation.url
//     );
// });
