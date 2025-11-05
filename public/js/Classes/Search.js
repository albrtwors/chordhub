export { Search };

class Search {
    constructor(input, template, row) {
        this.input = input;
        this.template = template;
        this.row = row;
    }

    async searchList(validation) {}

    async searchSong(validation) {
        const value = this.input.value;
        this.row.innerHTML = "";
        const rows = await validation.postInputSubmitHandler({
            song_name: value,
        });

        rows.songs.forEach((element) => {
            const exists = Array.from(this.row.querySelectorAll("li")).some(
                (li) => li.getAttribute("data-id") === String(element.id)
            );

            if (!exists) {
                this.row.innerHTML += `<li id="song_template" value="${element.name}" data-id="${element.id}" class="list-group-item d-flex">
            ${element.name}
            <button onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))" class="ms-auto btn btn-success"> + </button>
        </li>`;
            }
        });
    }
    async searchSongDelete(validation) {
        const value = this.input.value;
        this.row.innerHTML = "";
        const rows = await validation.postInputSubmitHandler({
            song_name: value,
        });

        rows.songs.forEach((element) => {
            this.row.innerHTML += `${this.createSongDeleteTemplate(
                element.name,
                element.author,
                element.id
            )}`;
        });
    }
    async searchSongModify(validation) {
        const value = this.input.value;
        this.row.innerHTML = "";
        const rows = await validation.postInputSubmitHandler({
            song_name: value,
        });

        rows.songs.forEach((element) => {
            this.row.innerHTML += `${this.createSongModifyTemplate(
                element.name,
                element.author,
                element.id
            )}`;
        });
    }
    createSongTemplate(name, author, id) {
        return `                    
        <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">
                            <div>
                                <img width="100px" height="100px"
                                    src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="/chordhub/cancion/${id}">
                                    <h4>${name}</h4>
                                    <p>${author}</p>
                                </a>
                            </div>
                        </div>
        
                        </div>`;
    }
    createSongDeleteTemplate(name, author, id) {
        return `                    
        <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">
                            <div>
                                <img width="100px" height="100px"
                                    src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                            </div>
                            <div class="ms-3">
                                
                                    <h4>${name}</h4>
                                    <p>${author}</p>
                              
                                <button type="button" data-id="${id}" onclick="songDelete(this)" class="btn btn-danger">Eliminar</button>
                            </div>
                            
                        </div>
                    </div>`;
    }
    createSongModifyTemplate(name, author, id) {
        return `                    
        <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">
                            <div>
                                <img width="100px" height="100px"
                                    src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                            </div>
                            <div class="ms-3">
                             
                                    <h4>${name}</h4>
                                    <p>${author}</p>
                              
                                <a href="/chordhub/canciones/modificar/${id}"><button class="btn btn-success">Modificar</button></a>
                            </div>
                            
                        </div>
                    </div>`;
    }
}
