<?php
session_start();



include("../../../backend/src/conexao.php");
if (!isset($_SESSION['values'])) {
    header('Location: ../signin/index.php');
    exit();
} else {
    $values = $_SESSION['values'];
    
}



//Pegar todos funcionarios
$sql = "SELECT * FROM User";
$stmt = $conn->prepare($sql);

try {
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro com banco de dados: " . $e->getMessage();
}




//Pegar o numero dos funcionarios
$sql = "SELECT COUNT(*) FROM User";
$stmt = $conn->prepare($sql);

try {
    $stmt->execute();
    $count = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo "Erro com banco de dados: " . $e->getMessage();
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
                            <h5 class="card-title c-primary">Vendas <span class="text-muted">| Hoje</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/cart-check.svg" class="p-3 bg-info rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6 class="c-primary fs-5">145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>
                        <div class="rounded-3 card-body bg-light">
                            <h5 class="card-title c-primary">Stoke <span class="text-muted">| Mensal</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/basket2.svg" class="p-3 bg-primary rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6 class="c-primary fs-5">2679</h6>
                                    <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>
                        <div class="rounded-3 card-body bg-light">
                            <h5 class="card-title c-primary">Funcionarios <span class="text-muted">| Este Ano</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../img/ecommerce/people.svg" class="p-3 bg-warning rounded-circle">
                                </div>
                                <div class="ps-3">
                                    <h6 class="c-primary fs-5"> <?php echo $count; ?> </h6>
                                    <span class="text-danger small pt-1 fw-bold">9%</span> <span class="text-muted small pt-2 ps-1">decrese</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid my-2">
            <h3 class="c-primary">Gestão dos funcionarios</h3>
            <table class="table table-striped">
                <thead class="bg-secondary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th> <!-- Coluna adicionada para os botões de ação -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($users)) {
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . $user['nome'] . "</td>";
                            echo "<td>" . $user['senha'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo '<td>
                                <a data-bs-toggle="modal" data-bs-target="#updateEmployer"><button class="btn btn-primary btn-sm">Editar</button></a>
                                <a href="../../../backend/src/delete.php?id=' . $user['id'] . '"><button class="btn btn-danger btn-sm">Excluir</button></a>
                              </td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum usuário encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center">
                <a data-bs-toggle="modal" data-bs-target="#addEmployer"><button class="btn btn-primary px-5">Adicionar</button></a>
            </div>
        </div>
    </section>


    <section id="modal_create">
        <div class="modal fade" id="addEmployer" tabindex="-1" aria-labelledby="addEmployerLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered container-login-small modal-lg">
                <div class="modal-content  animate__animated animate__pulse brd-15">
                    <div class="modal-body">

                        <h1 class="fw-bold text-center py-3">Sign-up</h1>

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
        </div>
    </section>

    <section id="modal_update">
        <div class="modal fade" id="updateEmployer" tabindex="-1" aria-labelledby="updateEmployerLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered container-login-small modal-lg">
                <div class="modal-content  animate__animated animate__pulse brd-15">
                    <div class="modal-body">

                        <h3 class=" text-center py-3">Editar Funcionario</h3>

                        <?php
                        if (isset($_SESSION['error'])) {
                            echo $_SESSION['error'];

                            unset($_SESSION['error']);
                        }
                        ?>

                        <form action="../../../backend/src/update.php" method="post" class="needs-validation" novalidate>
                            <div class="form-floating">
                            <input type="text" id="nome" name="nome" class="form-control hidden-focus" required placeholder="Insira seu nome">
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
                                <button type="submit" id="submitButton" class="btn btn-sm btn-primary">Submeter edição</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>