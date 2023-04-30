<?php
session_start();
if (!isset($_SESSION['values'])) {
    header('Location: ../signin/index.php');
    exit();
} else {
    $values = $_SESSION['values'];
}
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/globals.css">
    <script src="http://localhost/public/js/bootstrap.min.js" async defer></script>
    <script src="../../styles/js/form_validation.js" async defer></script>
    <link rel="stylesheet" href="http://localhost/public/css/animate.css/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <title>Painel de Controle</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand text-muted " href="../home/index.php">
                    <img src="../../img/logo/logo.png" class="animate__animated animate__pulse" width="130px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/index.php">Painel de Controle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Suporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nós</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="index.php">
                            <img src="../../img/logo/perfil.jpg" class="small-logo">
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>
    <section id="dasboard">
        <div class="container-fluid">
            <div class="row gx-5 gy-2 justify-content-between m-4">
                <div class="col-sm-4 shadow-sm p-3 rounded-3">
                    <div class="row g-2 align-items-center">
                        <div class="col-8 p-2">
                            <div class="fs-5 fw-bold">Darken Paulo Machava</div>
                            <div class="text-muted fs-6">Desenvolvedor & Cyber security</div>
                        </div>
                        <div class="col-4 p-2 text-center">
                            <a href="index.php">
                                <img src="../../img/logo/perfil.jpg" class="medium-logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 shadow-sm p-3 rounded-3">
                    
                </div>
            </div>
        </div>
    </section>
</body>

</html>