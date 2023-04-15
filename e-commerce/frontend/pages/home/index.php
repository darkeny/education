<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/public/css/animate.css/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <link rel="stylesheet" href="../../styles/css/globals.css">
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
                            <a class="nav-link" href="#suporte">Suporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
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
                        Potencialize seu setup com a Malanga Store
                    </div>
                    <div class="text-muted fs-3 container-login ">
                        Seu destino para produtos de informática de alta qualidade
                    </div>

                    <a href="../signin/new.php">
                        <button class=" my-2 mb-5 btn btn-lg btn-primary">Crie uma conta</button>
                    </a>

                </div>
                <div class="col-md-6">
                    <img src="../../img/workspace.svg" class="w-100 animate__animated animate__fadeInRight">
                </div>
            </div>
        </div>
    </section>
    <section id="sobre" class="p-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 p-3 shadow-sm bg-light brd-15">
                    <div class="container-login-md">
                        <img src="../../img/suporte/undraw_software_engineer_re_tnjc.svg" class="w-100">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="text-center display-6 fw-bold text-white">Saiba mais sobre nós</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>