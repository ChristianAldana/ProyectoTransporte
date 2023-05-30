<!DOCTYPE html>
<html lang="en">
<head>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Home</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/Home.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->

</div>
<!-- end loader -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="index.html">Inicio </a>
    <a href="#about">Nosotros</a>
    <a href="#service">Servicios  </a>
    <a href="#vehicles">Vehiculos</a>
    <a href="#testimonial">Comentario</a>
</div>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="Home.blade.php"><img src={{asset('assets/logo.png')}} alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="right_bottun">
                        <ul class="conat_info d_none ">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src={{asset('assets/menu_icon.png')}} alt="#" /> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
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
                                    <h1>Transportes S.A</h1>
                                    <span>Empresa creadora de servicios de registro</span>
                                    <a class="read_more" href="#">Contact Us</a>
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
                                                <h3>Adquiere el programa ya!!</h3>
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
<!-- end banner -->
<!-- about section -->
<div id="about" class="about ">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="about_right">
                    <figure><img src={{asset('assets/about.png')}} alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="titlepage">
                    <h2>Nosotros</h2>
                    <p>Somos una compañia de servicios, creadora de programas para registro de transportes</p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section -->
<!-- service section -->
<div id="service" class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h2>Servicios</h2>
                    <p>Nose... Rellenar, después </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service_main">
                    <div class="service_box blu_colo">
                        <i><img src={{asset('assets/ser1.png')}} alt="#" /></i>
                        <h4>Rellenar</h4>
                    </div>
                    <div class="service_box yelldark_colo">
                        <i><img src={{asset('assets/ser2.png')}} alt="#" /></i>
                        <h4>Rellenar</h4>
                    </div>
                    <div class="service_box yell_colo">
                        <i><img src={{asset('assets/ser3.png')}} alt="#" /></i>
                        <h4>Rellenar</h4>
                    </div>
                    <div class="service_box yelldark_colo">
                        <i><img src={{asset('assets/ser4.png')}} alt="#" /></i>
                        <h4>Rellenar</h4>
                    </div>
                    <div class="service_box yell_colo">
                        <i><img src={{asset('assets/ser5.png')}} alt="#" /></i>
                        <h4>Rellenar</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a class="read_more" href="#">Read More</a>
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
                    <p>Nose... Quiero dormir</p>
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
                                <h3 class="blac_co">Truck</h3>
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
                    <a class="read_more" href="#">Read More</a>
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
                    <p>Aqui va el comentario grupal...</p>
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
                                                <figure><img src="images/our.png" alt="#"/></figure>
                                                <h3>Transportes S.A. <br><span class="kisu">( Ceo)</span></h3>
                                                <p>Relleno</p>
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
                                                <figure><img src="images/our.png" alt="#"/></figure>
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
                                                    <figure><img src="images/our.png" alt="#"/></figure>
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
                <a class="read_more" href="#">Read More</a>
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
                    <h2>Razones por las cuales debe ponernos 15 en el proyecto</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="choose_box">
                    <i><img src={{asset('assets/why1.png')}} alt="#" /></i>
                    <h3>Visión</h3>
                    <p>Nose.... problemas para el futuro</p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-5 offset-md-2">
                <div class="choose_box">
                    <i><img src={{asset('assets/why2.png')}} alt="#" /></i>
                    <h3>Misión</h3>
                    <p>Poner algo aqui...</p>
                    <a class="read_more" href="#">Read More</a>
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
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> FIND US AT UMG THE BEST UNIVERSITY <br>
                        </li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>Telefono :  +(505) 5678843</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Correo : tranportes_s.a.@gmail.com</li>
                    </ul>
                    <form class="bottom_form">
                        <h3>No se que poner aqui</h3>
                        <button class="sub_btn">Relleno</button>
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
</body>
</html>
