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
                            <a class="nav-link" href="../products/index.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../home/#sobre">Sobre nós</a>
                        </li>
                    </ul>
                    <span class="navbar-text">

                        <div class="dropdown">
                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../img/logo/perfil.jpg" class="small-logo">
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../../backend/src/logout.php">Terminar Sessão</a></li>
                            </ul>
                        </div>

                    </span>
                </div>
            </div>
        </nav>
    </header>
    <section id="dasboard">
        <div class="container-fluid">
            <div class="row gx-5 gy-2 justify-content-between align-items-center m-4 my-4">
                <div class="col-sm-4 shadow-sm py-4 mt-4 rounded-3">
                    <div class="row g-2 align-items-center">
                        <div class="col-8 p-2">
                            <div class="fs-5 fw-bold"><?php echo $values['nome']; ?></div>
                            <div class="text-muted fs-6">Gestor de vendas</div>
                        </div>
                        <div class="col-4 p-2 text-center">
                            <a href="index.php">
                                <img src="../../img/logo/perfil.jpg" class="medium-logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 shadow-sm p-3 rounded-3">
                    <div class="container d-flex align-items-center justify-content-center">

                        <div class="rounded-3 card-body bg-light">
                            <h5 class="card-title">Vendas <span>| Hoje</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/cart-check.svg" class="p-3 bg-info rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>
                        <div class="rounded-3 card-body bg-light">
                            <h5 class="card-title">Stoke <span>| Mensal</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/basket2.svg" class="p-3 bg-primary rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6>2679</h6>
                                    <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>
                        <div class="rounded-3 card-body bg-light">
                            <h5 class="card-title">Funcionarios <span>| Este Ano</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/people.svg" class="p-3 bg-warning rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6>98</h6>
                                    <span class="text-danger small pt-1 fw-bold">9%</span> <span class="text-muted small pt-2 ps-1">decrese</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>