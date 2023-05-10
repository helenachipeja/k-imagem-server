
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Servicos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="FAQ.html">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="contact.html">Ajuda</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="contact.html">Suporte</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.jpg" alt="Nome do logotipo"></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search-input" placeholder="Pesquise por Servicos">
                        <!--<div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>-->
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="search-button">Pesquisar</button>
                        </div>
                    </div>
                    <div id="search-results"></div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="sigin.html" class="btn border">
                    <i class="fas fa-hand-holding-heart text-primary"></i>
                    <span class="badge">Solicitar</span>
                </a>
                <a href="sigin.html" class="btn border">
                    <i class="fas fa-sign-in-alt text-primary"></i>
                    <span class="badge">Login</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">K</span>IMAGEM</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Inicio</a>
                            <a href="shop.html" class="nav-item nav-link">serviços</a>
                           <!--<a href="detail.html" class="nav-item nav-link">Shop Detail</a>-->
                            <!--<div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>-->
                            <li>
                                <a href="#" class="nav-item nav-link">Categorias</a>
                                <div class="mega-box">
                                    <div class="content">
                                        <div class="row">
                                            <img  src="img/rotulo/rot4.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <header>cat1</header>
                                            <ul class="mega-links">
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>

                                            </ul>
                                        </div>
                                        <div class="row">
                                            <header>cat1</header>
                                            <ul class="mega-links">
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>

                                            </ul>
                                        </div>
                                        <div class="row">
                                            <header>cat1</header>
                                            <ul class="mega-links">
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>
                                                <li><a href="">banner</a></li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <a href="FAQ.html" class="nav-item nav-link">FAQ</a>
                            <a href="contact.html" class="nav-item nav-link">Contacto</a>
                        </div>

                    </div>
                </nav>

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header bg-secondary mb-5 ">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Nossos Serviços</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Serviços</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">



            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-12">
                <div class="row pb-3 category-section">

                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquise pelo Serviço">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>



                    <section id="banner" class="banner-section">
                        <h3 class="banner-title">Roll Up Banner</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner8.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner7.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner6.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner5.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/banner/banner2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="branding">
                        <h3 class="banner-title">Branding de Viatura</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 branding">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/branding/branding1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 branding">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/branding/branding4.jpg" alt="">
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 branding">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/branding/branding6.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 branding">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/branding/branding7.jpg" alt="">
                                </div>


                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 branding">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/branding/branding13.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="cartaz">
                        <h3 class="banner-title">Cartazes</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cartaz">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cartaz/cartaz1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cartaz">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cartaz/cartaz2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cartaz">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cartaz/cartaz4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cartaz">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cartaz/cartaz5.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cartaz">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cartaz/cartaz10.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="catalogo">
                        <h3 class="banner-title">Catalogo</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 catalogo">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/catalogo/catalogo2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 catalogo">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/catalogo/catalogo3.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 catalogo">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/catalogo/catalogo4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 catalogo">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/catalogo/catalogo5.png" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="cracha">
                        <h3 class="banner-title">Cracha</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 cracha">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cracha/cracha1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cracha/cracha3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cracha/cracha7.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/cracha/cracha4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="envelope">
                        <h3 class="banner-title">Envelopes para Eventos</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 envelopes">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/envelopes/envelope1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 envelopes">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/envelopes/envelope3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 envelopes">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/envelopes/envelope5.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 envelopes">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/envelopes/envelope4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="estampagem">
                        <h3 class="banner-title">Estampagem</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 estampagem">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/estampagem/cam.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 estampagem">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/estampagem/camisa7.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 estampagem">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/estampagem/cami.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 estampagem">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/estampagem/camisa2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 estampagem">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/estampagem/camisa4.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="flags">
                        <h3 class="banner-title">Bandeiras Personalizadas</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 flags">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/flags/flag2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 flags">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/flags/flag3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 flags">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/flags/flag5.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 flags">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/flags/flag6.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="menu">
                        <h3 class="banner-title">Menu</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 menu">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/menu/menu2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 menu">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/menu/menu3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 menu">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/menu/menu4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 menu">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/menu/menu5.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="outdoor">
                        <h3 class="banner-title">Outdoor</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 outdoor">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/outdoor/Free Outdoor Advertising Bus Stop Billboard Mockup PSD Files - Good Mockups.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 outdoor">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/outdoor/Outdoor Advertisement Billboard Poster Mockup Free.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ouutdoor">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/outdoor/outdoor1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 outdoor">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/outdoor/outdoor2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="poster">
                        <h3 class="banner-title">Impressão de Projectos</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 poster">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/poster/poster1.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 poster">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/poster/poster2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/poster/poster3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 poster">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/poster/poster4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="papel">
                        <h3 class="banner-title">Design de Interior/Papel de Parede</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 papel">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel5.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 papel">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel6.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 papel">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel7.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 papel">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel8.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 papel">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel9.jpg" alt="">
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel3.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 banner">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/papel/papel4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="ticket">
                        <h3 class="banner-title">Convite</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/ticket/ticket2.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/ticket/ticket3.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/ticket/ticket4.jpg" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/ticket/ticket5.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    </section>
                    <section id="cartao">
                        <h3 class="banner-title">Cartões de Visita</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/carato8.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao1.png" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao2.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao3.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao4.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao5.jpg" alt="">
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/cartao8.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/cartao/catao6.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="certificado">
                        <h3 class="banner-title">Certificado Digital</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/certificado/cert1.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/certificado/cert2.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/certificado/cert3.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/certificado/cert4.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="rotulo">
                        <h3 class="banner-title">Rotulos</h3>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/rot1.jpg" alt="">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/rot2.jpg" alt="">
                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/ticket/ticket3.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/rot3.jpg" alt="">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/rot4.jpg" alt="">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/rot5.jpg" alt="">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="img/rotulo/Trópico.jpg" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                    </section>
                    <section id="logotipo">
                        <h3 class="banner-title">Logotipo</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo1.jpg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">logotipos</h6>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo2.png" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo3.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo4.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo5.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/logotipo/logo6.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="matricula">
                        <h3 class="banner-title">Matricula para Casamento</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/matricula/mat1.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/matricula/mat2.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/matricula/mat3.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ticket">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/matricula/mat4.jpg" alt="">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->

    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.jpg" alt="Nome do logotipo"></h1>
                </a>
                <!-- <p>A K-Imagem é uma empresa especializada na criação de identidade visual para empresas e marcas, oferecendo serviços de design de logotipos, papelaria, brindes, impressão e muito mais.</p> -->
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rua Anguane, Maputo, Mozambique</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>kimagemdesign@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+258 84/86 338 3333</p>


                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Serviços</a>
                            <a class="text-dark mb-2" href="FAQ.html"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contacte-nos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Serviços</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="shop.html#cartao"><i class="fa fa-angle-right mr-2"></i>Identidade Visual</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Personalização</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Comunicação Visual</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Sinalização</a>
                            <a class="text-dark mb-2" href="shop.html#estampagem"><i class="fa fa-angle-right mr-2"></i>Estampagem</a>
                            <a class="text-dark" href="shop.html#poster"><i class="fa fa-angle-right mr-2"></i>Impressão</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Boletim Informativo</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Teu Nome" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Teu Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscreva Agora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">k-imagem</a>. Todos Direitos Reservados. Desenhado pela   <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">explicador</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>

        document.querySelector('.btn-faq').addEventListener('click', function() {
          Swal.fire({
            icon: 'success',
            title: 'Pergunta enviado!',
            text: 'Sua pergunta foi enviada com sucesso! Em breve entraremos em contato com você.',
            background: '#f9fafb',
            confirmButtonColor: '#005daa'
          });
        });
        document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-input');
        const searchButton = document.getElementById('search-button');
        const searchResults = document.getElementById('search-results');

        searchButton.addEventListener('click', function() {
        const query = searchInput.value.trim();
        if (query === '') {
            searchResults.textContent = 'Por favor, insira algo para pesquisar.';
        } else {
            searchResults.textContent = 'Você pesquisou por: ' + query;
        }
    });
});




        </script>
</body>

</html>
