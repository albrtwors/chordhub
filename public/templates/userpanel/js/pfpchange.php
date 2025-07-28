<script>
let form = document.getElementById("pfp");

form.addEventListener("submit", function(e){
    e.preventDefault();



    let logformdata = new FormData(form);
    

    fetch("./process/user/changepfp.php", {
        
        method:"post",
        body:logformdata

    })
    .then(response => response.json())
    

    .then(data => {

        
         
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