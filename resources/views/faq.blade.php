<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FAQ</title>

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



    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Perguntas Frequentes</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">FAQ</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- FAQ Start -->
    <div class="faq pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Você pergunta, nós respondemos</span></h2>
        </div>
        <div class="container my-5">
            <h2 class="text-center mb-5">Perguntas Frequentes</h2>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Como é feito o pagamento dos serviços?
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Aceitamos pagamentos em dinheiro, cartão de crédito e transferência bancária. Para saber mais sobre nossas opções de pagamento, entre em contato conosco.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Qual é o prazo de entrega dos serviços?
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    O prazo de entrega dos serviços pode variar dependendo da complexidade do trabalho solicitado. Entre em contato conosco para obter uma estimativa de tempo para o seu projeto.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Vocês fazem entregas?
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Não fazemos entregas físicas de nossos serviços, mas podemos enviar arquivos digitais por e-mail ou compartilhamento de arquivos na nuvem.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    É possível solicitar um orçamento para os serviços de estampagem, criação de rótulos e cartazes?
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Sim, é possível solicitar um orçamento personalizado para os serviços que oferecemos. Basta entrar em contato conosco para fornecer mais detalhes sobre o projeto que você tem em mente e receber uma cotação personalizada.
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Qual é o prazo de entrega para a criação de cartazes personalizados?
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
           O prazo de entrega varia de acordo com a complexidade do projeto e a quantidade de cartazes encomendados. Nós trabalhamos para entregar nossos projetos o mais rápido possível, sem comprometer a qualidade do trabalho.
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="reply-form">
            <h4>Tire Suas Dúvidas</h4>
            <p>Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados * </p>
            <form action="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="Seu Nome*">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="Seu Email*">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input name="website" type="text" class="form-control" placeholder="Seu Website">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="Seu Comentario*"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Postar comentário</button>

            </form>

          </div>

          </div>

    </div>
    <!-- FAQ End -->


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

        document.querySelector('.btn-primary').addEventListener('click', function() {
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
