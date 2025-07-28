    
    const $addChorusButton = document.getElementById("chorus-button");
    const $addEstButton = document.getElementById("est-button");
    const $addBridgeButton = document.getElementById("bridge-button");
    const $addPreButton = document.getElementById("pre-button");

    let submitButton = document.getElementById("sub");
    let songArea = document.getElementById("area");

    $addChorusButton.addEventListener("click", ()=>{area.value+="\nCoro\n"})
    $addEstButton.addEventListener("click", () => {
    if (area.value.trim() === "") {
    
        area.value += "Estrofa\n";
    } else {
        
        area.value += "\nEstrofa\n";
    }
    });
    $addBridgeButton.addEventListener("click", ()=>{area.value+="\nPuente\n"})
    $addPreButton.addEventListener("click", ()=>{area.value+="\nPrecoro\n"})

   songArea.addEventListener("input", ()=>{
  
        const textarea = document.getElementById('area');
        const outputDiv = document.getElementById('structure');

        const texto = textarea.value;
        const palabrasClave = ["Estrofa", "Precoro", "Coro", "Interludio", "Puente", "Intro", "Verso"];


        const regex = new RegExp('\\b(' + palabrasClave.join('|') + ')\\b', 'gi');

        const textoConEtiquetas = texto.replace(regex, (match) => `<h3 class='d-inline'>${match}</h3>`);


        const textoConSaltos = textoConEtiquetas.replace(/\n/g, '<br>');

        outputDiv.innerHTML = textoConSaltos;

     


        })
