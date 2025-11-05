var width = window.innerWidth;
var height = window.innerHeight;
const winbox = new WinBox(`Editor`, {
    min: true,
    mount: document.getElementById("editBox"),
});
winbox.move(width / 2);
const songsValues = JSON.parse(document.getElementById("allSongsJSON").value);
const songInput = document.getElementById("searchSongsInput");
const songsDock = document.getElementById("songsDock");
const songModal = document.getElementById("songModal");
const modalCloseButton = document.getElementById("modalCloseButton");
const songLetter = document.getElementById("songLetter");
let songModalState = false;
modalCloseButton.onclick = () => {
    songModal.classList.remove("show");
};
songsValues.forEach((value) => {
    const song = document.createElement("div");

    song.innerText = value.name;
    song.classList.add("bg-primary", "rounded", "text-white", "p-3");
    song.addEventListener("click", () => {
        songModal.classList.add("show");
        document.getElementById("songLetter").innerHTML = ``;
        JSON.parse(value.structure).parts.forEach((part) => {
            const li = document.createElement("li");
            const p = document.createElement("p");
            const icon = document.createElement("i");
            icon.classList.add("fas", "fa-clipboard", "ms-2", "cursor-pointer");
            icon.addEventListener("click", () => {
                navigator.clipboard.writeText(part.text);
            });
            p.innerText = part.type;
            li.classList.add("d-flex", "gap-3");

            li.appendChild(p);
            li.appendChild(icon);
            songLetter.appendChild(li);
        });
    });
    songsDock.appendChild(song);
});

function removeAccents(str) {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

songInput.onkeyup = function search(e) {
    songsDock.innerHTML = "";
    const searchTerm = removeAccents(e.target.value.toLowerCase());
    const regex = new RegExp(searchTerm, "i");
    const searchedSongs = songsValues.filter((element) => {
        const nameWithoutAccents = removeAccents(element.name.toLowerCase());
        return regex.test(nameWithoutAccents);
    });

    searchedSongs.forEach((songXD) => {
        const song = document.createElement("div");
        song.innerText = songXD.name;
        song.style = "cursor:pointer";
        song.classList.add("bg-primary", "rounded", "text-white", "p-3");
        song.addEventListener("click", () => {
            songModal.classList.add("show");
            document.getElementById("songLetter").innerHTML = ``;
            JSON.parse(songXD.structure).parts.forEach((part) => {
                const li = document.createElement("li");
                const p = document.createElement("p");
                const icon = document.createElement("i");
                icon.classList.add(
                    "fas",
                    "fa-clipboard",
                    "ms-2",
                    "cursor-pointer"
                );
                icon.addEventListener("click", () => {
                    navigator.clipboard.writeText(part.text);
                });
                p.innerText = part.type;
                li.classList.add("d-flex", "gap-3");

                li.appendChild(p);
                li.appendChild(icon);
                songLetter.appendChild(li);
            });
        });
        songsDock.appendChild(song);
    });
};
