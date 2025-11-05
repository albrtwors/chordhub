export function CommentCard(img, comment, user, id, route) {
    return `
            <div class="ms-5">
            <div class="d-flex flex-xl-row flex-md-column flex-sm-column flex-column">
                <div class="col-2">
                    <img src="${img}" width="100px" height="100px" alt="">
                </div>
                <div class="col-6">
                    <h3 class="fw-bold">${user}</h3>
                    <p>${comment}</p>
                </div>

            </div>
            <button class="btn btn-primary my-3" data-toggle="collapse" data-target="#answer-${id}">
                Responder
            </button>

            <div id="answer-${id}" class="collapse">
                    <form method="post" class="form-group" action="{{$route}}">
                    @csrf
                    @method('POST')
                    @if($parentid)
                    <input value="{{$parentid}}" name="parentid" type="hidden">
                    @else
                    <input value="" name="parentid" type="hidden">
                    @endif
                    <input type="hidden" value="{{$postid}}" name="postid">
                    <input type="hidden" value="{{$postype}}" name="postype">
                    <textarea class="form-control my-3 col-5" name="comment" id="" data-user-id="32" rows="5"></textarea>
                    <input class="btn btn-primary" type="submit"  value="Subir Respuesta">

                    </form>
            </div>


        </div>
    
    
    
    `;
}
// Asegúrate de tener en tu HTML en <head>:
// <meta name="csrf-token" content="{{ csrf_token() }}">

export function createCommentCard(
    img,
    comment,
    user,
    id,
    route,
    parentId = null
) {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    // Contenedor principal
    const container = document.createElement("div");
    container.className = "ms-5";

    // Estructura interna
    const innerDiv = document.createElement("div");
    innerDiv.className =
        "d-flex flex-xl-row flex-md-column flex-sm-column flex-column";

    // Imagen
    const imgDiv = document.createElement("div");
    imgDiv.className = "col-2";
    const imgEl = document.createElement("img");
    imgEl.src = img;
    imgEl.width = 100;
    imgEl.height = 100;
    imgDiv.appendChild(imgEl);

    // Comentario y usuario
    const commentDiv = document.createElement("div");
    commentDiv.className = "col-6";

    const userH3 = document.createElement("h3");
    userH3.className = "fw-bold";
    userH3.innerText = user;

    const commentP = document.createElement("p");
    commentP.innerText = comment;

    commentDiv.appendChild(userH3);
    commentDiv.appendChild(commentP);

    // Agregar las partes internas
    innerDiv.appendChild(imgDiv);
    innerDiv.appendChild(commentDiv);
    container.appendChild(innerDiv);

    // Botón para responder
    const btnResponder = document.createElement("button");
    btnResponder.className = "btn btn-primary my-3";
    btnResponder.setAttribute("data-toggle", "collapse");
    btnResponder.setAttribute("data-target", `#answer-${id}`);
    btnResponder.innerText = "Responder";

    container.appendChild(btnResponder);

    // Div para el formulario colapsable
    const collapseDiv = document.createElement("div");
    collapseDiv.id = `answer-${id}`;
    collapseDiv.className = "collapse";

    // Crear formulario
    const form = document.createElement("form");
    form.method = "post";
    form.action = route;

    // CSRF token
    const csrfInput = document.createElement("input");
    csrfInput.type = "hidden";
    csrfInput.name = "_token";
    csrfInput.value = csrfToken;

    // Método POST si quieres, pero en Laravel generalmente solo necesitas el método POST
    // Si quieres agregar _method, sería así:
    const methodInput = document.createElement("input");
    methodInput.type = "hidden";
    methodInput.name = "_method";
    methodInput.value = "POST";

    // Input hidden para parentId si existe
    if (parentId !== null) {
        const parentInput = document.createElement("input");
        parentInput.type = "hidden";
        parentInput.name = "parentid";
        parentInput.value = parentId;
        form.appendChild(parentInput);
    }

    // Otros inputs ocultos
    const postIdInput = document.createElement("input");
    postIdInput.type = "hidden";
    postIdInput.name = "postid";
    postIdInput.value = id; // o el valor que corresponda

    // Si tienes más, agrégales

    form.appendChild(csrfInput);
    // form.appendChild(methodInput); // si usas método
    form.appendChild(postIdInput);

    // Textarea
    const textarea = document.createElement("textarea");
    textarea.className = "form-control my-3 col-5";
    textarea.name = "comment";
    textarea.rows = 5;
    form.appendChild(textarea);

    // Submit button
    const submitBtn = document.createElement("input");
    submitBtn.type = "submit";
    submitBtn.className = "btn btn-primary";
    submitBtn.value = "Subir Respuesta";

    form.appendChild(submitBtn);

    // Agregar evento para enviar vía fetch si quieres
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch(route, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            body: formData,
        })
            .then((res) => res.json())
            .then((data) => {
                // Aquí puedes agregar la respuesta en la página
                console.log("Respuesta:", data);
                // Limpiar formulario si quieres
                this.reset();
                // O agregar la respuesta en la estructura DOM
            })
            .catch((err) => console.error("Error:", err));
    });

    collapseDiv.appendChild(form);
    container.appendChild(collapseDiv);

    return container;
}
// @csrf
// @method('POST')
// @if($parentid)
// <input value="{{$parentid}}" name="parentid" type="hidden">
// @else
// <input value="" name="parentid" type="hidden">
// @endif
