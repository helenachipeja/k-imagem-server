<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

        <!-- Inclui o CSS do SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

<!-- Inclui o JavaScript do SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

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
                    <a class="text-dark" href="{{('faq')}}">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{('contact')}}">Ajuda</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{('contact')}}">Suporte</a>
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
                <a href="/" class="text-decoration-none">
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
                <a href="{{('sigin')}}" class="btn border">
                    <i class="fas fa-hand-holding-heart text-primary"></i>
                    <span class="badge">Solicitar</span>
                </a>
                <a href="{{('sigin')}}" class="btn border">
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
                            <a href="{{('/')}}" class="nav-item nav-link active">Inicio</a>
                            <a href="{{('service')}}" class="nav-item nav-link">Serviços</a>
                            <li>
                                <a href="#" class="nav-item nav-link">Categorias</a>
                                <div class="mega-box">
                                    <div class="content">
                                        <div class="row">
                                            <img  src="img/rotulo/rot4.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <header>Identidade visual </header>
                                            <ul class="mega-links">
                                            <a href="{{('service')}}#cartao" class="dropdown-item">Cartões de visita</a>
                                <a href="{{('service')}}#papel" class="dropdown-item">Papel de parede personalizado</a>
                                <a href="{{('service')}}#rotulo" class="dropdown-item">Rótulos</a>
                                <a href="{{('service')}}#logotipo" class="dropdown-item">Logotipo</a>
                                <a href="{{('service')}}#outdoor" class="dropdown-item">Outdoor</a>

                                            </ul>
                                        </div>
                                        <div class="row">
                                            <header>Comunicação visual</header>
                                            <ul class="mega-links">
                                            <a href="{{('service')}}#cartaz" class="dropdown-item">Cartazes</a>
                                            <a href="{{('service')}}#menu" class="dropdown-item">Menu</a>
                                            <a href="{{('service')}}#cracha" class="dropdown-item">Cracha</a>
                                            <a href="{{('service')}}#rotulo" class="dropdown-item">Rótulos</a>
                                            <a href="{{('service')}}#album" class="dropdown-item">Capa de álbum</a>

                                            </ul>
                                        </div>
                                        <div class="row">
                                            <header>Personalização</header>
                                            <ul class="mega-links">
                                            <a href="{{('service')}}#branding" class="dropdown-item">Branding de viatura</a>
                                             <a href="{{('service')}}#flags" class="dropdown-item">Bandeira personalizada</a>
                                <a href="{{('service')}}#envelope" class="dropdown-item">Envelope</a>
                                <a href="{{('service')}}#matricula" class="dropdown-item">Matrículas de casamento personalizadas</a>


                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <a href="{{('faq')}}" class="nav-item nav-link">FAQ</a>
                            <a href="{{('contact')}}" class="nav-item nav-link">Contacto</a>
                        </div>

                    </div>
                </nav>

        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contacte-nos</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contacto</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contacto para qualquer dúvida</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Teu Nome"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Teu Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Assunto"
                                required="required" data-validation-required-message="Por favor escrevam o assunto,nao se esquecam" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Por favor escrevam o assunto,nao se esquecam"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5 contact">
                <h5 class="font-weight-semi-bold mb-3">Entre em contato conosco</h5>
                <p>Entre em contato conosco hoje mesmo para discutir seus projetos e descobrir como podemos ajudá-lo a alcançar seus objetivos de negócios com nossos serviços de design gráfico de alta qualidade. Estamos ansiosos para trabalhar com você!</p>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">K-Imagem</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rua Anguane, Maputo, Mozambique</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>kimagemdesign@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+258 84/86 338 3333</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold mr-5"><img src="img/logo1.jpg" alt="Nome do logotipo"></h1>
                </a>
                <p>A K-Imagem é uma empresa especializada na criação de identidade visual para empresas e marcas, oferecendo serviços de design de logotipos, papelaria, brindes, impressão e muito mais.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rua Anguane, Maputo, Mozambique</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>kimagemdesign@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+258 84/86 338 3333</p>
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
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">k-imagem</a>. Todos Direitos Reservados. Desenhado pela

                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">explicador</a>
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
