const input = document.getElementById("search_lists");
const song = document.getElementById("list_template");
const songRow = document.getElementById("list_row");

input.addEventListener("input", async () => {
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    fetch("/search_lists", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": token,
        },
        body: JSON.stringify({
            list_name: input.value,
        }),
    })
        .then((data) => data.json())
        .then((response) => {
            songRow.innerHTML = "";

            response.lists.forEach((element) => {
                songRow.innerHTML += `      
                
                <div id="list_template" class="col-xl-3 col-sm-6 col-12">
         <a href="{{route("list", ${element.id})}}"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-music fa-2x"></i>
                </div>
                <div class="media-body text-right">
                  <h6>${element.date}</h6>
                  <h5>${element.name}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>`;
            });
            console.log(response.songs);
        });
});
