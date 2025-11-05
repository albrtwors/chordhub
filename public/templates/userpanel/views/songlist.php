<h1 class="ms-5 py-3">
    Canciones
</h1>
<h3 class="ms-5 pb-3">
    Aquí encontrarás todas las canciones disponibles
</h3>



<h4 class="ms-5 pb-3">Géneros</h4>


<div class="ms-5">
    <button class="btn btn-primary active">Todos</button>
    <button class="btn btn-primary">Pop</button>
    <button class="btn btn-primary">Rock</button>
    <button class="btn btn-primary">Balada</button>
    <button class="btn btn-primary">Bossa Nova</button>
</div>

<div class="ms-5 row justify-content-center">



    <?php 

    $song = array(
        array("En Tu Presencia", "Danilo Montero", "https://images.unsplash.com/photo-1492684223066-81342ee5ff30"),
        array("Aquí Estoy", "Marcos Witt", "https://images.unsplash.com/photo-1506744038136-46273834b3fb"),
        array("Dios de Pactos", "Marcos Brunet", "https://images.unsplash.com/photo-1520974734940-4f7b0f37e0b8"),
        array("La Niña de Tus Ojos", "Hillsong Worship", "https://images.unsplash.com/photo-1606788075761-cc2d0dca1d4a"),
        array("Que Se Abra el Cielo", "Elevation Worship", "https://images.unsplash.com/photo-1506744038136-46273834b3fb"),
        array("Tu Fidelidad", "Marcos Brunet", "https://images.unsplash.com/photo-1512917774080-9991f1c4c750"),
        array("Alabaré", "Marcos Witt", "https://images.unsplash.com/photo-1523413651479-597f00b91b92"),
        array("Grande y Fiel", "Miel San Marcos", "https://images.unsplash.com/photo-1519389950473-47ba0277781c"),
        array("Mi Redentor", "Evan Craft", "https://images.unsplash.com/photo-1549924231-f129b911e442"),
        array("Gracias te Doy", "Christine D'Clario", "https://images.unsplash.com/photo-1506744038136-46273834b3fb"),
        array("Dios Es Bueno", "Marcos Brunet", "https://images.unsplash.com/photo-1549924231-f129b911e442"),
        array("La Luz del Mundo", "Miel San Marcos", "https://images.unsplash.com/photo-1519389950473-47ba0277781c"),
        array("Tu Amor Es Grande", "Hillsong United", "https://images.unsplash.com/photo-1521737604893-d14cc237f11d"),
        array("El Poder de Tu Amor", "Jesús Adrián Romero", "https://images.unsplash.com/photo-1549924231-f129b911e442"),
        array("Eres Santo", "Christine D'Clario", "https://images.unsplash.com/photo-1506744038136-46273834b3fb"),
        array("Solo Jesús", "Marcos Brunet", "https://images.unsplash.com/photo-1519389950473-47ba0277781c"),
        array("Por Siempre", "Miel San Marcos", "https://images.unsplash.com/photo-1519389950473-47ba0277781c"),
        array("Dios de lo Imposible", "Evan Craft", "https://images.unsplash.com/photo-1549924231-f129b911e442"),
        array("Tú Eres Rey", "Hillsong Worship", "https://images.unsplash.com/photo-1506744038136-46273834b3fb"),
        array("Mi Fortaleza", "Marcos Brunet", "https://images.unsplash.com/photo-1519389950473-47ba0277781c")
    );

    foreach($song as $so){
        echo '
                <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                <div class="d-flex">
                    <div>
                        <img width="100px" height="100px" src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                    
                    </div>
                    <div class="ms-3">
                        <h4>'.$so[0].'</h4>
                        <p>'.$so[1].'</p>
                    </div>
                </div>
                </div>



        
        
        ';
    }

    ?>




</div>





















<!--
<div class="row d-flex justify-content-md-center">

    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://i.ytimg.com/vi/3dkSjwER4IQ/maxresdefault.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Balada Pop</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>

    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://www.lavintagegear.com/wp-content/uploads/2023/02/gibson-LP-wildwood-spec-R9-21-scaled.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Rock</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>


    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://th.bing.com/th/id/OIP.cK0ZuVmmkcvgKGxod7gBowHaEK?w=307&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Worship</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>


    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://i.ytimg.com/vi/4ov7klBVto8/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGHIgQCg3MA8=&rs=AOn4CLCDF11M_FZLcgwoo91hVll6JtbHZA" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Bossa Nova</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>



    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://www.lopesancostabavaro.com/wp-content/uploads/2021/10/Persona-tocando-un-tambor-en-Republica-Dominicana.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Merengue</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>




    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://img.freepik.com/premium-vector/colorful-vibrant-pattern-with-musical-instruments_961875-377423.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Salsa</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>





    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://images.ctfassets.net/3s5io6mnxfqz/1OB3S3xv8EmUHra4cg8xzX/1bcc144b6698f55e80c241b4b78dfc9c/AdobeStock_249428244.jpeg?fm=jpg&w=1200&fl=progressive" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Jazz</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>





    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://img.benvaughn.com/1666086003594.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Reggae</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>
  

    <div class="ms-xl-5 ms-md-3  col-xl-3 col-md-4 col-6 mt-3 card">
    <img src="https://visitcubago.com/wp-content/uploads/2021/05/guitarra.jpg" class="card-img-top" alt="green iguana" />
    <div class="card-img-overlay text-white">
        <h4>Bolero</h4>
        <p class="card-text">
        
        </p>
    </div>
    
    </div>


</div>









</div>
-->