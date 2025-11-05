import { List } from "../Classes/List.js";
import { LogValidation } from "../Classes/LogValidation.js";

window.ListInstance = new List();

ListInstance.SortableInit.option("onEnd", () => {
    ListInstance.updateSortValues();
});

ListInstance.submitButton.addEventListener("click", () => {
    const listinput = document.getElementById("list_name");
    const listcollab = document.getElementById("collab");
    const songs_selected = ListInstance.songsSelected;

    const Validation = new LogValidation(null, "/cancioneros");
    Validation.postButtonSubmitHandler(
        {
            songs: songs_selected,
            listname: listinput.value,
            collab: listcollab?.checked ? 1 : 0,
        },
        Validation.url
    );
});
