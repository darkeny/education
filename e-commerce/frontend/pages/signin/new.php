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
    <script src="http://localhost/public/js/bootstrap.min.js" async defer></script>
    <script src="../../styles/js/form_validation.js" async defer></script>
    <!--O async e o defer nao permitem que a pagina seja enviada antes da rendereizacao do script -->
    <title>Sign-up</title>
</head>

<body>
    <div class="m-3 float-end">
        <a href="index.html">
            <div class="btn btn-primary">Sign-in</div>
        </a>
    </div>
    <div class="container">
        <div class="container-login-small content-center w-100 ">
            <div class="shadow p-5 brd-15">
                <h1 class="fw-bold text-center">Sign-up</h1>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
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