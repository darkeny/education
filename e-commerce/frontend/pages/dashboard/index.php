<?php
session_start();
if (!isset($_SESSION['values'])) {
    header('Location: ../../frontend/pages/signin/index.php');
    exit();
} else {
    $values = $_SESSION['values'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/globals.css">
    <script src="http://localhost/public/js/bootstrap.min.js" async defer></script>
    <script src="../../styles/js/form_validation.js" async defer></script>
    <!--O async e o defer nao permitem que a pagina seja enviada antes da rendereizacao do script -->
    <title>Document</title>
</head>

<body>
    <div class="conatiner">
        <div class="content-center">
            <h2>
                <?php echo 'Bem Vindo!' . $values['nome'] . '!' ?>
            </h2>
        </div>
    </div>
</body>

</html>