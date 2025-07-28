<script>
let form = document.getElementById("emailform");

form.addEventListener("submit", function(e){
    e.preventDefault();



    let logformdata = new FormData(form);
    

    fetch("./process/sign/emailcode.php", {
        
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
            
            setTimeout(function(){window.location.href="login.php"}, 3000)
            
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