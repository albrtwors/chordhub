<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bienvenido a Chordhub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('templates/landing/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/landing/vendors/owl-carousel/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/landing/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/landing/vendors/aos/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('templates/landing/css/style.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="{{ asset('dash/css/sb-admin-2.min.css') }}" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="{{ asset('css/dashstyles.css') }}" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pt-4 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <i class="fa mt-1 fa-music"></i>
                    <p class="ml-3"> Chordhub</p>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <i class="fa fa-music"></i>
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#header-section">Principal <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#features-section">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#digital-marketing-section">Blog</a>
                        </li>

                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">Contactános</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">Chordhub</h1>
            <h6 class="font-weight-normal text-muted pb-3">Organiza digitalmente tus canciones, cancioneros y acordes.
            </h6>
            <div>
                <a href="{{ route('login') }}"> <button class="btn btn-primary mr-1">Inicia sesión</button></a>
                <a href="{{ route('sign') }}"><button class="btn btn-primary ">Crea una cuenta</button></a>
            </div>
            <img src="{{ asset('BD-simple-landing-page-ea1c3f39a22f/images/Group171.svg') }}" alt=""
                class="img-fluid">
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <section class="features-overview" id="features-section">
                <div class="content-header">
                    <h2>¡Potencia tu Música al Máximo!</h2>
                    <h6 class="section-subtitle text-muted">Crea, organiza y visualiza tus letras y acordes fácilmente
                        con nuestro editor visual. ¡Lleva tu talento al siguiente nivel!</h6>
                </div>
                <div class="d-md-flex justify-content-between">
                    <div class="grid-margin d-flex justify-content-start">
                        <div class="features-width">
                            <img width="50px"
                                src="https://cdn.pixabay.com/photo/2014/04/03/10/06/headphones-309805_1280.png"
                                alt="" class="img-icons">
                            <h5 class="py-3">Gestiona Tus Canciones</h5>
                            <p class="text-muted">Administra fácilmente las letras de las alabanzas y canciones de tu
                                grupo musical, ¡todo en un solo lugar!</p>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-center">
                        <div class="features-width">
                            <img width="50px"
                                src="https://cdn.pixabay.com/photo/2016/05/30/20/54/bass-clef-1425777_1280.png"
                                alt="" class="img-icons">
                            <h5 class="py-3">Visualiza Acordes al Instante</h5>
                            <p class="text-muted">Accede rápidamente a nuestros repertorios de acordes y lleva tus
                                ensayos a otro nivel.</p>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-end">
                        <div class="features-width">
                            <img width="50px"
                                src="https://cdn.pixabay.com/photo/2013/07/12/14/51/vinyl-148941_1280.png"
                                alt="" class="img-icons">
                            <h5 class="py-3">Organiza tus Cancioneros</h5>
                            <p class="text-muted">Crea y gestiona listas personalizadas para cada servicio y cada
                                evento.</p>
                            <a href="#">
                                <p class="readmore-link">Descubre más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="digital-marketing-service" id="digital-marketing-section">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                        <h3 class="m-0">¡Crea Repertorios Personalizados!</h3>
                        <div class="col-lg-7 col-xl-6 p-0">
                            <p class="py-4 m-0 text-muted">Organiza tus canciones y acordes de forma sencilla y
                                efectiva. ¡Lleva tus repertorios al siguiente nivel y prepárate para cada evento con
                                confianza!</p>
                            <p class="font-weight-medium text-muted">Gestiona tus listas, accede rápidamente y
                                sorprende a tu congregación o grupo musical con una presentación impecable.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                        <img src="https://cdn.pixabay.com/photo/2018/04/13/10/25/music-player-3316150_1280.png"
                            alt="" class="w-75 img-fluid">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                        <img src="https://media.istockphoto.com/id/1193408548/vector/musical-show-or-concert-set.jpg?s=612x612&w=0&k=20&c=VKNLytPUjDrqUW9OBdQebDpU0jFAldAPTngTHucW-Qg="
                            alt="" class="img-fluid w-75">
                    </div>
                    <div class="mt-3 col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                        <h3 class="m-0">Visualiza Acordes con Facilidad</h3>
                        <div class="col-lg-9 col-xl-8 p-0">
                            <p class="py-4 m-0 text-muted">Accede rápidamente a nuestros repertorios de acordes y lleva
                                tus ensayos y presentaciones al siguiente nivel. ¡Simplifica tu práctica y sorprende con
                                interpretaciones impecables!</p>
                            <p class="pb-2 font-weight-medium text-muted">Con funciones inteligentes y optimizadas,
                                nuestra plataforma hace que la visualización de acordes sea sencilla y efectiva para
                                todos.</p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="case-studies" id="case-studies-section">
                <div class="row grid-margin">
                    <div class="col-12 text-center pb-5">
                        <h2>Participa colaborativamente</h2>
                        <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                        <div class="card color-cards">
                            <div class="card-body p-0">
                                <div class="bg-primary text-center card-contents">
                                    <div class="card-image">
                                        <img src="{{ asset('BD-simple-landing-page-ea1c3f39a22f/images/Group95.svg') }}"
                                            class="case-studies-card-img" alt="">
                                    </div>
                                    <div class="card-desc-box d-flex align-items-center justify-content-around">
                                        <div>
                                            <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                                            <button class="btn btn-white">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-details text-center pt-4">
                                    <h6 class="m-0 pb-1">Online Marketing</h6>
                                    <p>Seo, Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="card color-cards">
                            <div class="card-body p-0">
                                <div class="bg-warning text-center card-contents">
                                    <div class="card-image">
                                        <img src="{{ asset('BD-simple-landing-page-ea1c3f39a22f/images/Group108.svg') }}"
                                            class="case-studies-card-img" alt="">
                                    </div>
                                    <div class="card-desc-box d-flex align-items-center justify-content-around">
                                        <div>
                                            <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                                            <button class="btn btn-white">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-details text-center pt-4">
                                    <h6 class="m-0 pb-1">Web Development</h6>
                                    <p>Developing, Designing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="card color-cards">
                            <div class="card-body p-0">
                                <div class="bg-violet text-center card-contents">
                                    <div class="card-image">
                                        <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                                    </div>
                                    <div class="card-desc-box d-flex align-items-center justify-content-around">
                                        <div>
                                            <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                                            <button class="btn btn-white">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-details text-center pt-4">
                                    <h6 class="m-0 pb-1">Web Designing</h6>
                                    <p>Designing, Developing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
                        <div class="card color-cards">
                            <div class="card-body p-0">
                                <div class="bg-success text-center card-contents">
                                    <div class="card-image">
                                        <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                                    </div>
                                    <div class="card-desc-box d-flex align-items-center justify-content-around">
                                        <div>
                                            <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                                            <button class="btn btn-white">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-details text-center pt-4">
                                    <h6 class="m-0 pb-1">Software Development</h6>
                                    <p>Developing, Designing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="customer-feedback" id="feedback-section">
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <h2>Nuestras últimas adiciones al repositorio</h2>
                        <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                        </h6>
                    </div>
                    <div class="owl-carousel owl-theme grid-margin">
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face2.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Tony Martinez</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face3.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face20.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Cody Lambert</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face15.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Cody Lambert</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face16.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Cody Lambert</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face1.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Tony Martinez</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face2.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Tony Martinez</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face3.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="images/face20.jpg" width="89" height="89" alt=""
                                        class="img-customer">
                                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                        Fusce egeabus consectetuer turpis, suspendisse.</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">Cody Lambert</h6>
                                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-us" id="contact-section">
                <div class="contact-us-bgimage grid-margin">
                    <div class="pb-4">
                        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Tienes alguna sugerencia?</h4>

                    </div>
                    <div data-aos="fade-up">
                        <button class="btn btn-primary">Contáctanos</button>
                    </div>
                </div>
            </section>
            <section class="contact-details" id="contact-details-section">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <img src="images/Group2.svg" alt="" class="pb-2">
                        <div class="pt-2">
                            <p class="text-muted m-0">mikayla_beer@feil.name</p>
                            <p class="text-muted m-0">906-179-8309</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Get in Touch</h5>
                        <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
                        <form>
                            <input type="text" class="form-control" id="Email" placeholder="Email id">
                        </form>
                        <div class="pt-3">
                            <button class="btn btn-dark">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Our Guidelines</h5>
                        <a href="#">
                            <p class="m-0 pb-2">Terms</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1 pb-2">Privacy policy</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1 pb-2">Cookie Policy</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1">Discover</p>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Our address</h5>
                        <p class="text-muted">518 Schmeler Neck<br>Bartlett. Illinois</p>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a href="#"><span class="mdi mdi-facebook"></span></a>
                            <a href="#"><span class="mdi mdi-twitter"></span></a>
                            <a href="#"><span class="mdi mdi-instagram"></span></a>
                            <a href="#"><span class="mdi mdi-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2025<a href="https://www.bootstrapdash.com/"
                        class="px-1">Chordhub</p>
            </footer>
            <!-- Modal for Contact - us Button
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
            <script src="{{ asset('templates/landing/vendors/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('templates/landing/vendors/bootstrap/bootstrap.min.js') }}"></script>
            <script src="{{ asset('templates/landing/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('templates/landing/vendors/aos/js/aos.js') }}"></script>
            <script src="{{ asset('templates/landing/js/landingpage.js') }}"></script>
</body>

</html>
