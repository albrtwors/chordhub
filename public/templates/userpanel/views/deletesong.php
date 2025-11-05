<h1 class="text-start sidebar-brand-text ms-5 py-3">
    Borrar canción
</h1>
<h3 class="text-start ms-5 pb-3">
    Busca la canción que hayas subido que deseas eliminar
</h3>
    <!-- Topbar Search -->


    <div class="d-flex justify-content-center container ">

        <div class="div">
                <form
                class="ms-5 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

            <div class="ms-5">
                <button class="btn btn-primary active">Todos</button>
                <button class="btn mx-3 btn-primary">Pop</button>
                <button class="btn btn-primary">Rock</button>
                <button class="btn mx-3 btn-primary">Balada</button>
                <button class="btn btn-primary">Bossa Nova</button>
            </div>
        



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
                        <button class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
                </div>



        
        
        ';
    }

    ?>




</div>
