
<script>

    

    async function sendelete(dataid) {
        let id = dataid.getAttribute("data-id");
         fetch(`/chordhub/songs/delete/${id}`)

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
                 setTimeout(()=>{window.location.href="/chordhub/songs/delete"}, 1000)            

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
    }
    

   



</script>