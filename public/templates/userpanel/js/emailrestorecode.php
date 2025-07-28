

<script>

let form = document.getElementById('<?php echo $form;?>');

form.addEventListener("submit", function(e){
    e.preventDefault();

    <?php
    //LOADING SCREENS 
    if($loadingscreen)
       {
              echo "    swal({
              title: 'Cargando...',
              buttons: false,
              text: 'Espere mientras validamos su solicitud',
              closeOnClickOutside: false,
              closeOnEsc: false
              });
              ";
              }
     ?>


    let logformdata = new FormData(form);
    

    fetch('<?php echo $endpoint;?>', {
        
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
            closeOnClickOutside: false,
            closeOnEsc: false,
            confirmButtonText: 'Aceptar'
            });
            
            <?php

            $_SESSION["passchange"] = $_POST["email"];

            ?>
            setTimeout(function(){window.location.href='changepass.php';},1000);


                
           
            
            
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