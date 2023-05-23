<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/public/css/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../styles/css/globals.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <script src="http://localhost/public/js/bootstrap.min.js" async defer></script>



    <title>Malanga Store</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand text-muted " href="./index.php">
                    <img src="../../img/logo/logo.png" class="animate__animated animate__pulse" width="130px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/index.php">Painel de Controle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#parceiros">Parceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../products/index.php">Productos</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="../signin/index.php">
                            <div class="btn btn-primary">Sign-in</div>
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="container">
            <div class="row  content-div-center">
                <div class="col-md-6 animate__animated animate__fadeInUp ">
                    <div class="display-4 fw-bold c-info container-login-md">
                        Potencialize seu setup com a <span class="">Malanga store</span>
                    </div>
                    <div class="text-muted fs-3 container-login ">
                        Seu destino para produtos de informática de alta qualidade
                    </div>

                    <a href="../signin/new.php">
                        <button class=" my-2 mb-5 brd-15 btn btn-lg btn-primary">Crie uma conta</button>
                    </a>

                </div>
                <div class="col-md-6">
                    <img src="../../img/workspace.svg" class="w-100 animate__animated animate__fadeInRight">
                </div>
            </div>
        </div>
    </section>
    <section id="sobre" class="p-5 bg-primary-md bg-gradient my-5 ">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 p-3 shadow-sm bg-white brd-15">
                    <div class="container-login-md ">
                        <img src="../../img/suporte/team.svg" class="text-center pt-5 w-100">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="text-center display-6 fw-bold text-white mt-3">Saiba mais sobre nós</div>
                        <div class="fs-6 text-white text-center mt-3">
                            Somos um ecommerce de informática com ampla variedade de produtos e preços competitivos. Oferecemos frete grátis e aceitamos devoluções, proporcionando uma experiência de compra fácil e segura. Somos uma excelente opção para compras online de informática, e prestammos servicços de:
                        </div>
                        <nav>
                            <ul class="list-unstyled mt-3 ">
                                <li class="nav-item shadow-sm brd-10 bg-white p-3 fs-6 ">
                                    Assistencia Técnica
                                </li>
                                <li class=" nav-item my-3 shadow-sm brd-10 bg-white p-3 fs-6">
                                    Cloud Computing
                                </li>
                                <li class=" nav-item shadow-sm brd-10 bg-white p-3 fs-6">
                                    Segurança da Informação
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="parceiros" class="container my-5">
        <div class="row mt-5">
            <div class="col-sm-6 p-5 pt-5 mt-5">
                <div class="text-center display-6 fw-bold text-dark mt-5">Nossos Parceiros</div>
                <div class="row text-center shadow brd-15 m-5 p-3 align-items-center">
                    <div class="col-4"><img src="../../img/suporte/apple.png" width="45px"></div>
                    <div class="col-4"><img src="../../img/suporte/cisco.png" width="45px"></div>
                    <div class="col-4"><img src="../../img/suporte/lg.png" width="45px"></div>
                </div>
                <div class="row text-center shadow brd-15 m-5 my-3 p-3 align-items-center">
                    <div class="col-4"><img src="../../img/suporte/home-center.png" width="25px"></div>
                    <div class="col-4"><img src="../../img/suporte/hisense.png" width="65px"></div>
                    <div class="col-4"><img src="../../img/suporte/minerva.png" width="45px"></div>
                </div>
                <div class="row text-center shadow brd-15 m-5 p-3 align-items-center">
                    <div class="col-4"><img src="../../img/suporte/dell.png" width="45px"></div>
                    <div class="col-4"><img src="../../img/suporte/hp.png" width="25px"></div>
                    <div class="col-4"><img src="../../img/suporte/samsung.png" width="45px"></div>
                </div>
            </div>
            <div class="col-sm-6 pt-5 mt-5 text-center">
                <div class="justify-items-center container-login-md">
                    <img src="../../img/suporte/partners.svg" class="w-100">
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="footer" class="mt-5 pt-5 bg-light">

        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row text-muted">

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3 class="text-dark">Malanga Store</h3>
                                <p>
                                    Av.Nelson Mandela <br>
                                    Zimpeto, Matendene<br><br>
                                    <strong class="text-dark">Phone:</strong> +258 87 861 0417<br>
                                    <strong class="text-dark">Email:</strong> info@malanga.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4 class="text-dark">Utilitarios</h4>
                            <ul>
                                <li><a href="#home">Início</a></li>
                                <li><a href="#parceiros">Parceiros</a></li>
                                <li><a href="../products/index.php">Productos</a></li>
                                <li><a href="#sobre">Sobre nós</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4 class="text-dark">Nossos serviços</h4>
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Cloud Computing</a></li>
                                <li><a href="#">Assistência tecnica</a></li>
                                <li><a href="#">Segurança de Informação</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4 class="text-dark">Nossas Novidades</h4>
                            <p>Subscreva-se com o seu email para ser notificado quando novos productos forem adicionados</p>
                            <form action="#" method="post">
                                <div class="d-flex">
                                    <input type="email" name="email" id="email" class="me-1 form-control hidden-focus">
                                    <button class="btn btn-primary">Subscrever</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </section>
    
</body>

</html>