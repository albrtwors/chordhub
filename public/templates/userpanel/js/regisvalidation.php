<script>
    let form = document.getElementById("signform");

form.addEventListener("submit", function(e){
    e.preventDefault();

    swal({
    title: 'Cargando...',
    buttons: false,
    text: "Espere mientras validamos su solicitud",
    closeOnClickOutside: false,
    closeOnEsc: false
    });
            

    let logformdata = new FormData(form);
    

    fetch("./process/sign/sign.php", {
        
        method:"post",
        body:logformdata

    })
    .then(response => response.json())
    

    .then(data => {
         swal.close();
         if(data.state==="success"){
            
            swal({
            icon: 'success',
            title: '¡Éxito!',
            text: data.mess,
            confirmButtonText: 'Aceptar'
            });
            
            
         }
         else{
            
            
            swal({
            icon: 'error',
            title: '¡Error!',
            text: data.mess,
            confirmButtonText: 'Aceptar'
            });
                    
         }
       
    })




})
</script>