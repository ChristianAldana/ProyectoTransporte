@extends('layouts/inicio')

@section('tituloPagina', 'home con laravel')

@section('contenido')


    </div>

<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{ route('transportista.index') }}">Transportistas</a>
    <a href="#">Camiones</a>
    <a href="{{ route('ingreso.index') }}">Ingreso</a>
    <a href="{{ route('egreso.index') }}">Egreso</a>
</div>
<!-- header -->
<header>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="right_bottun">
                        <ul class="conat_info d_none ">


                            <a href="{{ route('login') }}";  class="btn btn-primary"; >login</a>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <a href="{{ route('register') }}" class="btn btn-primary">registrar</a>
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src={{asset('assets/menu_icon.png')}} alt="#" /> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- fin del header -->

<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide banner_slide" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-7 col-lg-5">
                                <div class="text-bg">
                                    <h1>Servicio de transportes S.A.</h1>
                                    <span>Empresa creadora de programas para registro de camiones</span>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ban_track">
                                            <figure><img src={{asset('assets/track.png')}} alt="#" /></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="transfot">
                                            <div class="col-md-12">
                                                <span>Servicio Profesional</span>
                                                <h3>Proveedor de servicios Internacional</h3>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- fin del banner -->

<!-- Sección de comentario -->
<div id="about" class="about ">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="about_right">
                    <figure><img src={{asset('assets/logo4.jpeg')}} alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="titlepage">
                    <h2>Nosotros</h2>
                    <p>Somos una empresa especializada en programas de registro de transportes. Nuestros programas simplifican la gestión de flotas, optimizan rutas y brindan datos en tiempo real. Con tecnología innovadora y enfoque centrado en el cliente, impulsamos la eficiencia y el crecimiento en el sector del transporte.</p>
                    <a class="read_more" href="#">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de comentario -->

<!-- Sección de servicios -->
<div id="service" class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h2>Servicios</h2>
                    <p>Ventajas de nuestros servicios</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service_main">
                    <div class="service_box blu_colo">
                        <i><img src={{asset('assets/ser1.png')}} alt="#" /></i>
                        <h4>Estable</h4>
                    </div>
                    <div class="service_box yelldark_colo">
                        <i><img src={{asset('assets/ser2.png')}} alt="#" /></i>
                        <h4>Eficiente</h4>
                    </div>
                    <div class="service_box yell_colo">
                        <i><img src={{asset('assets/ser3.png')}} alt="#" /></i>
                        <h4>Rapido</h4>
                    </div>
                    <div class="service_box yelldark_colo">
                        <i><img src={{asset('assets/ser4.png')}} alt="#" /></i>
                        <h4>Practico</h4>
                    </div>
                    <div class="service_box yell_colo">
                        <i><img src={{asset('assets/ser5.png')}} alt="#" /></i>
                        <h4>Seguro</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <a class="read_more" href="#">Volver</a>
            </div>
        </div>
    </div>
</div>
<!-- end service section -->
<!-- vehicles section -->
<section id="vehicles" class="vehicles">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Vehiculos</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div id="veh" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vehicles_truck">
                                    <figure><img src={{asset('assets/truc1.png')}} alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vehicles_truck">
                                    <figure><img src={{asset('assets/truc2.png')}} alt="#" /></figure>
                                </div>
                                <h3 class="blac_co"></h3>
                            </div>
                            <div class="col-md-4">
                                <div class="vehicles_truck">
                                    <figure><img src={{asset('assets/truc3.png')}} alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="read_more" href="#">Volver</a>
                </div>
            </div>
        </div>
</section>
<!-- end vehicles section -->
<!-- testimonial section -->
<div id="testimonial" class="testimonial bottom_cross bottom_cross2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Comentario</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="testimonial_box">
                                                <figure></figure>
                                                <h3>Transportes S.A. <br><span class="kisu">( Ceo)</span></h3>
                                                <p>Al crear un proyecto como este, nos brindó la oportunidad de colaborar de manera profesional, dándonos experiencia en el campo de la programación, logramos obtener conocimientos, además de lograr una vision más profunda en las necesidades de la industria del transporte </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="testimonial_box">
                                                <figure><img src="#" alt="#"/></figure>
                                                <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="full cross_layout">
                                                <div class="testimonial_box">
                                                    <figure><img src="#" alt="#"/></figure>
                                                    <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="read_more" href="#">Volver</a>
            </div>
        </div>
    </div>
</div>
<!-- end testimonial section -->
<!-- choose section -->
<div class="choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Información de la empresa</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="choose_box">
                    <i><img src={{asset('assets/why1.png')}} alt="#" /></i>
                    <h3>Visión</h3>
                    <p>Nuestra visión es ser líderes en soluciones tecnológicas para el registro de transportes, simplificando y optimizando el proceso. Buscamos establecer relaciones sólidas con nuestros clientes, brindando productos de calidad y un excelente servicio. Nuestro objetivo es impulsar la transformación digital en el sector del transporte, ayudando a las empresas a optimizar sus operaciones y tomar decisiones informadas.</p>
                    <a class="read_more" href="#">Volver</a>
                </div>
            </div>
            <div class="col-md-5 offset-md-2">
                <div class="choose_box">
                    <i><img src={{asset('assets/why2.png')}} alt="#" /></i>
                    <h3>Misión</h3>
                    <p>Nuestra misión es ofrecer soluciones para el registro de transportes, brindando herramientas eficientes y fiables que simplifiquen la gestión de flotas. Nos comprometemos a proporcionar a nuestros clientes una plataforma intuitiva y fácil de usar, que les permita registrar y controlar sus transportes de manera precisa y segura.</p>
                    <a class="read_more" href="#">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end choose section -->
<!--  footer -->
<footer>
    <div class="footer bottom_cross1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>Encuentranos en: Unversidad Mariano Galvez (UMG) <br>
                        </li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>Telefono :  +(505) 5678843</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Correo : tranportes_s.a.@gmail.com</li>
                    </ul>
                    <form class="bottom_form">
                        <h3></h3>

                    </form>
                </div>
                <div class="col-md-8">
                    <div class="map">
                        <figure><img src={{asset('assets/map.png')}} alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by<a href="https://html.design/">Transportes S.A.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>

@endsection