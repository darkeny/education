<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/globals.css">
    <link rel="stylesheet" href="http://localhost/public/css/animate.css/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <script src="http://localhost/public/js/bootstrap.min.js" async defer></script>
    <script src="../../styles/js/form_validation.js" async defer></script>
    <!--O async e o defer nao permitem que a pagina seja enviada antes da rendereizacao do script -->
    <title>Sign-up</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
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
                            <a class="nav-link active" aria-current="page" href="../home/index.php">Início</a>
                        </li>
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
                        <a href="./index.php">
                            <div class="btn btn-primary">Sign-in</div>
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="container-login-small content-center w-100 ">
            <div class="shadow p-5 brd-15">
                <h1 class="fw-bold text-center">Sign-up</h1>

                <?php
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];

                    unset($_SESSION['error']);
                }
                ?>

                <form action="../../../backend/src/insert.php" method="post" class="needs-validation" novalidate>
                    <div class="form-floating">
                        <input type="text" id="name" name="nome" class="form-control hidden-focus" required placeholder="Insira seu nome">
                        <label for="name">Insira o seu nome</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="email" id="email" name="email" class="form-control hidden-focus" required placeholder="Insira seu email">
                        <label for="name">Insira o seu email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="password" name="senha" class="form-control hidden-focus" required placeholder="Insira seu nome">
                        <label for="name">Insira a sua senha</label>
                    </div>
                    <div class="m-3  text-center">
                        <button type="submit" id="submitButton" class="btn btn-sm btn-primary">Submeter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>