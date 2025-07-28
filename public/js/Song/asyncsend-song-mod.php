<script>
    const valueofstruct = document.getElementById("structure");
    const submit = document.getElementById("sub");

    submit.addEventListener("click", async function(id){
        
        fetch("/chordhub/songs/modifyval")
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
        })


    })



</script>