<!DOCTYPE html>
<html lang="es-ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/-->
    <link rel="stylesheet" href="/css/magnific-popup.css"> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"> <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/slick/slick.min.css"> <!-- https://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" href="/slick/slick-theme.css">
    <link rel="stylesheet" href="/css/templatemo-upright.css">


    <!--
    
TemplateMo 555 Upright

https://templatemo.com/tm-555-upright

-->
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <div id="tm-sidebar" class="tm-sidebar">
                <nav class="tm-nav">
                    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <div class="tm-brand-box">
                            <h1 class="tm-brand">
                                {{$persona->apellido}} {{$persona->nombre}}
                            </h1>
                        </div>
                        <ul id="tm-main-nav">
                            <li class="nav-item">
                                <a href="#home" class="nav-link current">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-home nav-icon"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallery" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-images nav-icon"></i>
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-user-friends nav-icon"></i>
                                    Sobre mi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#proyectos" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-code nav-icon"></i>
                                    Mis proyectos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Contacto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="cv/gustavo francisco silva artaza.pdf" class="nav-link external" target="_parent" rel="sponsored">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-external-link-alt nav-icon"></i>
                                    Curriculum
                                </a>
                            </li>
                        </ul>
                    </div>
                    <footer class="mb-3 tm-mt-100">
                        <a href="#" target="_parent" rel="sponsored">GFSA</a>
                    </footer>
                </nav>
            </div>

            <div class="tm-main">
                <!-- Home section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="/img/img-01.jpg"></div>
                    <section id="home" class="tm-section">
                        <h2 class="tm-text-primary">Bienvenido</h2>




                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">

                                    <p>
                                        {{$persona->presentacion_principal}}
                                    </p>
                                    <p>
                                        {{$persona->presentacion_secundaria}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">

                                    <p>
                                        En este sitio web encontraras información sobre mi y mis
                                        proyectos ademas de formas de contactarme :) .
                                    </p>
                                    <div class="text-right">
                                        <a href="#gallery" class="btn btn-primary tm-btn-next">Siguiente pagina</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr class="tm-hr-short mb-5">
                        <div class="row tm-row-home">
                            <div class="tm-col-home tm-col-home-l">
                                <div class="media mb-4">
                                    <i class="fas fa-scroll fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">23 Febrero
                                            2023</a>
                                        <p>Me recibi de analista en sistemas de información</p>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-cloud-sun fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">20 Abril 2016</a>
                                        <p>
                                            Me inscribi a licenciatura en sistemas de información
                                        </p>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-dove fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">25 febrero
                                            2015</a>
                                        <p>Cursando Ingenieria en sistemas de información</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <!-- Gallery section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="/img/img-02.jpg"></div>
                    <section id="gallery" class="tm-section">
                        <h2 class="tm-text-primary">Galeria de fotos proyectos</h2>
                        <hr class="mb-5">
                        <ul class="tm-gallery-links">
                            <li>
                                <a href="javascript:void(0);" class="active tm-gallery-link" data-filter="*">
                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                    All
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="react-native">
                                    <i class="fab fa-react tm-gallery-link-icon"></i>
                                    React native
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="java">
                                    <i class="fab fa-java tm-gallery-link-icon"></i>
                                    Spring boot
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="portrait">
                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                    portrait
                                </a>
                            </li>


                        </ul>

                        <!-- Galeria -->
                        <div class="tm-gallery">
                            <!-- React native -->
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario1.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Start</i></h2>
                                    <a href="/img/galeria/seminario1.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario2.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Iniciar sesion</i></h2>
                                    <a href="/img/galeria/seminario2.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario3.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Navegacion Drawe</i></h2>
                                    <a href="/img/galeria/seminario3.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario4.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Crear publicacion</i></h2>
                                    <a href="/img/galeria/seminario4.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario5.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Crud de publicaciones</i></h2>
                                    <a href="/img/galeria/seminario5.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario6.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Ver publicacion</i></h2>
                                    <a href="/img/galeria/seminario6.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/semiinario7.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Ver publicacion con mas detalle</i></h2>
                                    <a href="/img/galeria/semiinario7.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario8.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Ver imagen</i></h2>
                                    <a href="/img/galeria/seminario8.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario9.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Buscar amigo</i></h2>
                                    <a href="/img/galeria/seminario9.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario10.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Enviar solicitud</i></h2>
                                    <a href="/img/galeria/seminario10.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/semianrio11.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Cancelacion</i></h2>
                                    <a href="/img/galeria/semianrio11.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario12.png" alt="Image" />
                                <figcaption>
                                    <h2><i>confirmacion</i></h2>
                                    <a href="/img/galeria/seminario12.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario13.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Ver solicitudes de amistad</i></h2>
                                    <a href="/img/galeria/seminario13.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario14.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Confirmar o rechazar solicitud</i></h2>
                                    <a href="/img/galeria/seminario14.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item react-native">
                                <img src="/img/galeria/seminario15.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Publicaciones de mis amigos</i></h2>
                                    <a href="/img/galeria/seminario15.png">View more</a>
                                </figcaption>
                            </figure>

                            <!-- Spring boot -->
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring1.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring1.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring2.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring2.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring3.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring3.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring4.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring4.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring5.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring5.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring6.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend de mi web, portfolio</i></h2>
                                    <a href="/img/galeria/spring6.png">View more</a>
                                </figcaption>
                            </figure>

                            <!-- React native backend -->
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring_react_native_1.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend react native</i></h2>
                                    <a href="/img/galeria/spring_react_native_1.png">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-honey tm-gallery-item java">
                                <img src="/img/galeria/spring_react_native_2.png" alt="Image" />
                                <figcaption>
                                    <h2><i>Backend react native</i></h2>
                                    <a href="/img/galeria/spring_react_native_2.png">View more</a>
                                </figcaption>
                            </figure>



                            <!-- Retrato -->
                            <figure class="effect-honey tm-gallery-item portrait">
                                <img src="/img/perfil.jpg" alt="Image" />
                                <figcaption>
                                    <h2><i>Gustavo</i></h2>
                                    <a href="/img/perfil.jpg">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                </div>
                <!-- About section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="/img/img-03.jpg"></div>
                    <section id="about" class="tm-section">
                        <h2 class="tm-text-primary">Sobre mi</h2>
                        <hr class="mb-5">

                        <div class="row tm-row-about">

                            <div class="tm-col-about tm-col-about-l">
                                <img src="/img/perfil.jpg" width="400px" alt="Image" class="img-fluid mb-5 tm-img-about">
                                <p>
                                    Gustavo Francisco Silva Artaza
                                </p>
                            </div>

                            <div class="tm-col-about tm-col-about-r" id="trayectoria-academica">

                                <h3 class="mb-4 tm-text-primary"><u>Trayectoria academica</u></h3>

                                @foreach ($persona->educacions as $educaciones)
                                <h5 class="mb-4 tm-text-primary">{{$educaciones->institucion}}</h5>
                                <p>{{$educaciones->descripcion}}</p>
                                @endforeach

                            </div>


                            <div class="tm-col-about tm-col-about-l" id="historial_laboral">

                                <h3 class="mb-4 tm-text-primary"><u>Resumen laboral</u></h3>

                                @foreach ($persona->trabajos as $trabajos)
                                <h5 class="mb-4 tm-text-primary">{{$trabajos->ocupacion}}</h5>
                                <p>{{$trabajos->descripcion}}</p>
                                @endforeach

                            </div>

                            <div class="tm-col-about tm-col-about-l" id="conocimiento">
                                <h3 class="mb-4 tm-text-primary"><u>Conocimiento</u></h3>

                                @foreach ($persona->conocimientos as $conocimientos)
                                <p>{{$conocimientos->nombre}}, {{$conocimientos->nivel}}</p>
                                @endforeach
                            </div>
                        </div>



                        <h3 class="mb-4 tm-text-primary"><u>Mis proyectos</u></h3>
                        <div class="mt-5">

                            <div class="tm-carousel">

                                @foreach ($persona->proyectos as $proyectos)
                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="/img/mis-proyectos/{{$proyectos->imagen}}" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="{{$proyectos->url_github}}" class="tm-social-link"><i class="fab fa-github"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">{{$proyectos->nombre}}</h3>
                                        <p>{{$proyectos->descripcion}}</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">{{$proyectos->lenguaje}}</h4>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </section>
                </div>

                </br>
                </br>
                </br>
                <!-- Contact section -->
                <div class="tm-section-wrap" id="contacto">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="/img/img-04.jpg"></div>
                    <div id="contact" class="tm-section">
                        <h2 class="tm-text-primary">Contacto</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <form id="contact-form" action="" method="" class="tm-contact-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control rounded-0" placeholder="Nombre" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="inquiry" class="form-control rounded-0" placeholder="Subject" required />
                                    </div>

                                    <div class="form-group">
                                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                                    </div>

                                    <div class="form-group tm-text-right">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>
                                <a href="mailto:@gustavosilvaartaza@gmail.com" id="truco-mail"></a>
                            </div>
                            <div class="col-xl-6 tm-contact-col-r">

                                <!-- Address -->
                                <address class="mb-4">
                                    Direccion: Barrio cochangasta pasaje san antonio s/n
                                </address>

                                <!-- Links -->
                                <ul class="tm-contact-links mb-4">
                                    <li class="mb-2">
                                        <a href="tel:3804630641" id="celular">
                                            <i class="fas fa-phone mr-2 tm-contact-link-icon"></i>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:gustavosilvaartaza@gmail.com" id="correo">
                                            <i class="fas fa-at mr-2 tm-contact-link-icon"></i>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/gustavo4456">
                                            <i class="fab mr-2 fa-github"></i>
                                            GitHub: gustavo4456
                                        </a>
                                    </li>
                                </ul>

                                <ul class="tm-contact-social">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="tm-section-wrap tm-copyright row">
                    <div class="col-12">
                        <div class="text-right">
                            Copyright 2022 gustavosilvaartaza
                        </div>
                    </div>
                </div>
            </div> <!-- .tm-main -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->





    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script> <!-- https://jquery.com/ -->
    <script src="/js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="/js/parallax/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="/js/imagesloaded.pkgd.min.js"></script> <!-- https://imagesloaded.desandro.com/ -->
    <script src="/js/isotope.pkgd.min.js"></script> <!-- https://isotope.metafizzy.co/ -->
    <script src="/js/jquery.magnific-popup.min.js"></script> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <script src="/slick/slick.min.js"></script> <!-- https://kenwheeler.github.io/slick/ -->
    <script src="/js/templatemo-script.js"></script>
    <script src="/js/email-enviar.js"></script>

</body>

</html>