<script>
    let form = document.getElementById("logform");

form.addEventListener("submit", function(e){
    e.preventDefault();

    

    let logformdata = new FormData(form);
    

    fetch("./process/login/login.php", {
        
        method:"post",
        body:logformdata

    })
    .then(response => response.json())

    .then(data => {
         console.log(data)
         if(data.state==="success"){
            
            window.location.href = "index.php";
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