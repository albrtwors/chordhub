
<script>
    let valueofstruct = document.getElementById("valueofstructure");
    let structure = document.getElementById("structure");


    let form = document.getElementById("songform");
    

    form.addEventListener("submit", function(e){
        e.preventDefault();
        valueofstruct.value = structure.innerHTML;

        let newform = new FormData(form);

        fetch("/chordhub/songs/createval", {

            method:"post",
            body:newform


        })

        .then(response => response.json())
        .then(data => {

            if(data.state=="ok"){
                  Swal.fire({
                    title: `${data.name}`,

                    icon: "success",
                    customClass: {
                             
                        title: 'dmsans',       // clase para el título
                        content: 'dmsans'  // clase para el contenido
                    }
                 });              

            }
            else{
                Swal.fire({
                    title: `${data.state}`,

                    icon: "warning",
                    customClass: {
                             
                        title: 'dmsans',       // clase para el título
                        content: 'dmsans'  // clase para el contenido
                    }
                 });
            }

        })





    });



</script>